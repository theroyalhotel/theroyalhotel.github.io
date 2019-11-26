<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelListController extends Controller
{
    public function showpage(){
        $hotels = Hotel::paginate(5);
        return view('home.hotellist',compact('hotels'));
    }
}
