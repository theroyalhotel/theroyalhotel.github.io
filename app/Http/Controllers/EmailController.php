<?php

namespace App\Http\Controllers;
use Validator,Mail;
use App\Email;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    public function __construct()    {
        $this->middleware('auth');
        $this->autoDeleteMailFromdata();
    }
    public function getEmail(){
        $id_hotel=Auth::user()->id_hotel;
        if(Auth::user()->is_admin=='1'){
            $emails=Email::where('status','<','3')->orderBy('created_at','DESC')->get();
        }else{
            $emails =Email::where([
                ['status','<','3'],
                ['hotel',$id_hotel]
            ])->orderBy('created_at', 'DESC')->get();
        }
        $count=Email::count();
        $today = date('m-d-Y',strtotime(Carbon::today()));
        $time  = date('H:i A',strtotime(Carbon::now()));
        return view('admin.email-inbox', compact('emails' ,'count','today','time'));
    }

    public function getEmailSent($id){
        $id_hotel=Auth::user()->id_hotel;
        if(Auth::user()->is_admin=='1'){
            $emails=Email::where([
                ['status','=',$id],
            ])->orderBy('created_at','DESC')->get();
        }else{
            $emails=Email::where([
                ['status','=',$id],
                ['hotel',$id_hotel],
            ])->orderBy('created_at','DESC')->get();
        }
        $today = date('m-d-Y',strtotime(Carbon::today()));
        return view('admin.email-inbox', compact('emails','today'));
    }
    
    public function getEmailView($id){
        $emails=Email::where('id',$id)->get();
        $read=Email::find($id);
        if($read){
            $read->status=1;
            $read->save();
        }
        return view('admin.email-view',compact('emails'));
    }

    public function getEmailCompose($id){
        if(is_numeric($id)){
            $emails=Email::where('id',$id)->get();
            return view('admin.email-compose',compact('emails'));
        }elseif($id==='create'){
            $emails=Email::all();
            return view('admin.email-send',compact('emails'));            
        }

    }

    public function getEmailByCategory($id){
        $id_hotel=Auth::user()->id_hotel;
        if(Auth::user()->is_admin=='1'){
            $emails=Email::where([
                ['status','<','3'],
                ['categories',$id]
            ])->orderBy('created_at','DESC')->get();
        }else{
            $emails=Email::where([
                ['status','<','3'],
                ['categories',$id],
                ['hotel',$id_hotel],
            ])->orderBy('created_at','DESC')->get();
        }
        $today = date('m-d-Y',strtotime(Carbon::today()));
        return view('admin.email-inbox', compact('emails','today'));
    }
    
    public function getEmailFromTrash($id){
        $id_hotel=Auth::user()->id_hotel;
        if(Auth::user()->is_admin=='1'){
            $emails=Email::where([
                ['status','=',$id],
            ])->orderBy('created_at','DESC')->get();
        }else{
            $emails=Email::where([
                ['status','<',$id],
                ['hotel',$id_hotel],
            ])->orderBy('created_at','DESC')->get();
        }
        $today = date('m-d-Y',strtotime(Carbon::today()));
        return view('admin.email-inbox', compact('emails','today'));
    }

    public function sendEmail(Request $request){
        $validatedData = $request->validate([
            'email' => ['required', 'string', 'email', 'max:50'],
            'subject' => ['required', 'string', 'max:50'],
            'message' => ['required', 'string', 'min:20', 'max:850'],
            'status'  => 'required',
            'categories'  => 'required',
        ]);

        $email = new Email();
        $email->name = request('name');
        $email->email_address = request('email');
        $email->phone = request('phone');
        $email->subject = request('subject');
        $email->message = request('message');
        $email->hotel = request('hotel');
        $email->status = request('status');
        $email->categories = request('categories');
        $email->save();
        

        $maildata=[
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'hotel'=>$request->hotel,
            'status'=>$request->status,
            'categories'=>$request->categories,
        ];
        Mail::send('admin.email-template-contact', $maildata, function ($message) use ($maildata) {
            // $message->from(env('MAIL_USERNAME'), Auth::user()->name));
            $message->from('dieuhai.it@gmail.com', Auth::user()->name);
            $message->to($maildata['email'],$maildata['name']);
            $message->subject($maildata['subject']);
        });
        session()->flash('success','Send Email Successfully');
        return redirect('/admin/email');
    }

    public function delEmail($id){
        $email=Email::find($id);
        if($email){
            $email->status=3;
            $email->save();
            session()->flash('success','Add to trash successfully');
            return redirect('/admin/email');
        }
    }
    public function restoreEmail($id){
        $email=Email::find($id);
        if($email){
            $email->status=1;
            $email->save();
            session()->flash('success','Restore email successfully');
            return redirect('/admin/email/email-trash/3');
        }
    }
    public function readEmail($id){
        $email=Email::find($id);
        if($email){
            $email->status=1;
            $email->save();
            session()->flash('success','Add to read successfully');
            return redirect('/admin/email');
        }
    }
    // auto xóa mail sau 15 ngày  
    public function autoDeleteMailFromdata(){
        $emails=Email::get();
        $timeNow=Carbon::now();
        foreach ($emails as $email){
            $timemailCreated= $email->created_at;
            $time= $timeNow->diffInDays($timemailCreated); //So sách thời gian hiện tại với created_at 1/day(15 ngày)
            if($time>=15){
                $email::destroy($email->id);
            }
        }
    }
}   
