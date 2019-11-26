<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomdetailController extends Controller
{
    public function showpage($id){
        $listroom = Room::where('id_hotel',$id)->paginate(2);
        return view('home.roomlist', compact('listroom','id'));
    }
    public function showdetail($id){
        $roomdetail = Room::find($id);
        return view('home.roomdetail',compact('roomdetail'));
    }
}
