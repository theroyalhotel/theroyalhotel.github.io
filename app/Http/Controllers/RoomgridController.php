<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomgridController extends Controller
{
    public function showpage(){
        return view('home.roomgird');
    }
}
