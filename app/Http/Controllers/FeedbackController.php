<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Feedback;
use Session;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function showpage($id){
        $feedbacks=Feedback::where('id','=',$id)->get();
        if($feedbacks){
            return view('home.feedback',compact('feedbacks'));
       }
    }
    public function getListFeedback(){
        $id_hotel=Auth::user()->id_hotel;
        $taguser='';
        if(Auth::user()->is_admin=='1'){
            $taguser=1;
            $feedbacks=Feedback::where('check','=',1)->orderBy('created_at','DESC')->get();
        }else{
            $feedbacks =Feedback::where([
                ['check','=',1],
                ['hotelId',$id_hotel]
            ])->orderBy('created_at', 'DESC')->get();
        }
        $today = date('m-d-Y',strtotime(Carbon::today()));
        $time  = date('H:i A',strtotime(Carbon::now()));
        return view('admin.list-feedback', compact('feedbacks','today','time','taguser'));
    }
    
    public function Approve($id,$action){
        $feedback=Feedback::find($id);
        if($action==1){ // Kích hoạt
            $feedback->approve=1;
            $feedback->save();
            session()->flash('success','Active Successfully');
        }elseif($action==2){ // Bỏ Kích hoạt
            $feedback->approve=0;
            $feedback->save();
            session()->flash('success','Unactive Successfully');
        }elseif($action==3){ // Xóa
            $feedback->delete($id);
            $feedback->save();
            session()->flash('success','Delete Successfully'); 
        }
        return redirect('/admin/feedback-list');

    }


    public function PostFeedback(Request $request){
        $id      = $request->id;
        $message =$request->message;
        $validatedData = $request->validate([
            'message' => ['required', 'string', 'min:20', 'max:250'],
        ]);
        $feedback=Feedback::find($id);
    
        if($feedback){
            if(($id == $feedback->id)&&($feedback->check == 0)){
            $feedback->check  =1;
            $feedback->message=$request->message;
            $feedback->save();
            session()->flash('success','Thanks for your Feeback');
            return redirect('/');
            }elseif(($id == $feedback->id)&&($feedback->check == 1)){
                session()->flash('success','You have previously rated');
                return redirect('/');
            }
        }
    }
}
