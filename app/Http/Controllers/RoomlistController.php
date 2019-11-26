<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomlistController extends Controller
{
    public function showpage(){
        return view('home.roomlist');
    }
}
