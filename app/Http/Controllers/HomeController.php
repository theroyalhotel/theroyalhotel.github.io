<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Place;
use App\User;

use Illuminate\Http\Request;

use App\blogs;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showindex()
    {
        $dbplaces=Place::all();
        $dbhotels=Hotel::all();
        return view('home.home',compact('dbplaces','dbhotels'));
    }

    public function single_blog($id)
    {
        $blogs= blogs::find($id);
        return view('home.single_blog')->with(['blog'=>$blogs]);
    }

    public function demo()
    {
        return ('hello');
    }
}
