<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Hotel;
use App\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $checkin = Carbon::parse($request->checkin);
        $checkout = Carbon::parse($request->checkout);
        $hotel_id = $request->id_hotel;
        /**********************************************************/
        $room_in_bill=BillDetail::all()->pluck('id_room')->toArray();
        $room_in_hotel=Room::where('id_hotel',$hotel_id)->pluck('id')->toArray();
        $room_free=array_diff($room_in_hotel,$room_in_bill); // lấy ra các phòng chưa bao giờ được ai đặt của ks đó 
        $room_cancel=Bill::where('status',3)->pluck('id')->toArray();
        /**********************************************************/
        $result1 = Room::where('id_hotel', $request->id_hotel)->get();  //lấy ra danh sách phòng của ks đang tìm!
        $bills_of_hotel_1= Bill::where(['id_hotel' =>$hotel_id,])
        ->where('checkout','<=',$checkin)->pluck('id')->toArray();
        $bills_of_hotel_2= Bill::where(['id_hotel' =>$hotel_id,])
        ->where('checkin','>=',$checkout)->pluck('id')->toArray();
        $bill_ida = array_merge($bills_of_hotel_1,$bills_of_hotel_2,$room_cancel); 
        $bill_id = array_unique($bill_ida);  // lấy ra id của các bills không có trong thời gian input
        /**********************************************************/
        $result2=[];
        foreach($bill_id as $bill)
        {
            $bills_detail=BillDetail::where('id_bill',$bill)->pluck('id_room')->toArray();
            foreach($bills_detail as $detail)
            {
                $result2[]=$detail;
            }
        }
        $room_id_list=array_merge($result2,$room_free);
        $result=[];
        foreach($room_id_list as $room_id)
        {
            $room_info=Room::find($room_id);
            $result[]=$room_info;
        }
        return view('home.resultsearch',compact('result'));
    }
    public function searchroom(Request $request){
        $result = Room::where('price', 'like', '%' . $request->price . '%')
            ->where('no_slot', 'like', '%' . $request->no_slot . '%')
            ->where('no_bed', 'like', '%' . $request->no_bed . '%')
            ->where('id_hotel', $request->id_hotel)
            ->get();
        return view('home.resultsearch',compact('result'));
    }
}
