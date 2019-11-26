<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\Room;
use App\Bill;
use App\BillDetail;
use Illuminate\Http\Request;
use Session;
use App\Email;
use Validator,Mail;
use Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Feedback;


class BooktotalController extends Controller
{
    public function __construct(){
        $this->bookDeactivate(); //Hủy phòng auto
        $this->Autocheckout();
        // $this->Sendfeedback();
    }
    public function showpage(){
        $book = session()->get('book');
        if (isset($book)) {
            foreach ($book as $key => $value) {
                $id_room = $key;
            }
            $data = Room::find($id_room);
            $id_hotel = $data['id_hotel'];
            $datahotel = Hotel::find($id_hotel);
            return view('home.booktotal', compact('datahotel'));
        }
        else{
            return view('home.booktotal');
        }
    }
    public function addroom($id){
        $data=Room::find($id);
        $new_id_hotel=$data['id_hotel'];
        $book = session()->get('book');
        if(is_array($book)){
            foreach ($book as $id_room => $value){
                $id_hotel= $this->checkroom($id_room);
                if($id_hotel != $new_id_hotel){
                    return redirect()->back()->with('faild', 'Hotel order');
                }
            }
        }
            if (isset($book[$data['id']])) {
                return redirect()->back()->with('faild', 'This room has been ordered');
            }

            $book[$data['id']] = [
                "id" => $data['id'],
                "vip" => $data['vip'],
                "no_room" => $data['no_room'],
                "price" => $data['price'],
                "no_slot" => $data['no_slot'],
                "no_bed" => $data['no_bed']
            ];
            Session::put('book', $book);
            return redirect()->to('booktotal');
    }
    public function checkroom($id_book){
        $data = Room::find($id_book);
        $id_hotel=$data['id_hotel'];
        return $id_hotel;
    }
    public function delroom(Request $request, $id){
        $newBook = Session::get('book');
        unset($newBook[$id]);
        Session::put('book', $newBook);
        return redirect()->back();
    }
    public function postbill(Request $request)
    {
        $bills = new bill();
        $bills->id_hotel = $request->id_hotel;
        $bills->name = $request->name;
        $bills->phone = $request->phone;
        $bills->email = $request->email;
        $bills->status = '0';
        $checkin=$request->checkin;
        $checki=date('Y-m-d',strtotime($checkin));
        $bills->checkin = $checki;
        $checkout=$request->checkout;
        $checko=date('Y-m-d',strtotime($checkout));
        $bills->checkout = $checko;
        $days = abs(strtotime($checko) - strtotime($checkin));
        $ngay = floor($days/ (60*60*24));
        $bills->days = $ngay;
        $bills->note = $request->note;
        $bills->totalall = $request->totalall * $ngay;
        $bills->save();
        $idbill = $bills->orderby('id', 'desc')->first('id');

        $billdetail = session()->get('book');
        foreach ($billdetail as $key => $value){
            $billdetail = new billdetail();
            $billdetail->id_room = $value['id'];
            $billdetail->price = $value['price'];
            $billdetail->vip = $value['vip'];
            $billdetail->no_room=$value['no_room'];
            $billdetail->no_bed = $value['no_bed'];
            $billdetail->no_slot = $value['no_slot'];
            $billdetail->id_bill = $idbill['id'];
            $billdetail->save();
        }
        $maildata=[
            'name'   =>$request->name,
            'email'  =>$request->email,
            'no_room'=>$value['no_room'],
            'no_slot'=>$value['no_slot'],
            'no_bed' =>$value['no_bed'],
            'price'  =>$value['price'],
            'id'     =>$idbill['id'].date("Y-m-d h:i:sa"),
            'ngay'=>$ngay,
            'urlactive1'=>$idbill['id'],
            'urlactive2'=>Str::random(64),

        ];
        Mail::send('admin.email-template-billing', $maildata, function ($message) use ($maildata) {
            // $message->from(env('MAIL_USERNAME'), Auth::user()->name));
            $message->from('dieuhai.it@gmail.com', 'Royal Hotel');
            $message->to($maildata['email'],$maildata['name']);
            $message->subject('Bill Book Room ?');
        });

            $request->session()->forget('book');
            return back()->with('ordered','Bạn đã đặt phòng thành công');
            }
    // Các trạng thái cột status
    //      : 0 (mới tạo bill chưa xác nhận mail)
    //      : 1 (mail đã xác nhận)
    //      : 2 (không xác nhận mail, (hệ thông tự động chuyển trang thái))
    //      : 3 (khách hàng đã checkout, (hệ thông tự động chuyển trang thái))

    // Nếu xác nhận mail thì chuyển trang thái từ 0 không sang 1
    public function bookActive($url1,$url2){
        $idBill=bill::find($url1);
        $billStatus = md5($idBill->status);
        if($billStatus===md5(0)){
            $idBill->status=1;
            $idBill->save();
            session()->flash('success','Active successfully');
            return redirect('/');
        }else{
            // session()->flash('error','Sorry Active unsuccessful! Invoice for previously activated');
            // return redirect('/');
        }
    }
    // Hủy phòng sau 30 phút , chuyển trang thái sang status =2
    public function bookDeactivate(){
        $bills=Bill::get();
        $timeNow=Carbon::now();
        foreach ($bills as $bill){
            $timebillCreated= $bill->created_at;
            $time= $timeNow->diffInHours($timebillCreated); //So sách thời gian hiện tại với created_at 1=1tiếng
            if(($time>=1/2)&&($bill->status==0)){
                $bill->status=2;
                $bill->save();
            }
        }
    }
    // Chuyển trạng thái 3 khi đến thời hạn checkout
    public function Autocheckout(){
        $bills=Bill::get();
        $timeNow=Carbon::now();
        foreach ($bills as $bill){
            $timeCheckin= $bill->checkin;
            $time= $timeNow->diffInDays($timeCheckin); //So sách thời gian hiện tại với checkin 1=1day
            if(($time>=$bill->days)&&($bill->status==1)){
               
                $maildata=[
                    'name'   =>$bill->name,
                    'email'  =>$bill->email,
                    'urlactive1'=>$bill->id,
                    'urlactive2'=>Str::random(64),
                ];
                  Mail::send('admin.email-template-feedback', $maildata, function ($message) use ($maildata) {
                      // $message->from(env('MAIL_USERNAME'), Auth::user()->name));
                      $message->from('dieuhai.it@gmail.com', 'Royal Hotel');
                      $message->to($maildata['email'],$maildata['name']);
                      $message->subject('Please tell us how you feel about us | Royal Hotel');
                  }); 
                  
                $bill->status=3;
                $bill->save();

                $feedback= new Feedback();
                $feedback->check    =0;
                $feedback->approve  =0;
                $feedback->name     =$bill->name;
                $feedback->hotelId  =$bill->id_hotel;
                $feedback->message  =null;
                $feedback->save();
            }
        }
    }
    // send feedback 

    public function Quantityaaaa ()
    {
        $bill_price=Bill::where('status',2 )->pluck('totalall')->toArray();
        $quantity=0;
        foreach($bill_price as $price)
        {
            $quantity=$quantity+$price;
        }
        // return view()->with([''])
        dd($quantity);
    }

    public function Sendfeedback($id){
        $bills=Bill::where('id',$id);
        $timeNow=Carbon::now();
        foreach ($bills as $bill) {
            $timeCheckout=$bill->updated_at;
            $time= $timeNow->diffInHours($timeCheckout);
            $maildata=[
                'name'   =>$bill->name,
                'email'  =>$bill->email,
                'urlactive1'=>$bill->id,
                'urlactive2'=>Str::random(64),
            ];
              Mail::send('admin.email-template-feedback', $maildata, function ($message) use ($maildata) {
                  // $message->from(env('MAIL_USERNAME'), Auth::user()->name));
                  $message->from('dieuhai.it@gmail.com', 'Royal Hotel');
                  $message->to($maildata['email'],$maildata['name']);
                  $message->subject(' Thank You !Feedback ?');
              });    
        }
    }
}

