<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\ImageHotel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Feedback;

class HotelDetailController extends Controller
{
    public function showpage($id){

        $today = date('m-d-Y',strtotime(Carbon::today()));
        $time  = date('H:i A',strtotime(Carbon::now()));
        $feedbacks =Feedback::where([
            ['approve','=',1],
            ['hotelId',$id]
        ])->orderBy('created_at', 'DESC')->take(6)->get();
        $hoteldetail=Hotel::find($id);
        $images_hotel=ImageHotel::where('id_hotel',$id)->get();
        return view('home.hoteldetail',compact('hoteldetail','images_hotel','feedbacks','today','time'));
    }
}
