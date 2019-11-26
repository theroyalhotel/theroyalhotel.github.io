<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Mail;
use App\Email;
use Illuminate\Support\MessageBag;

class ContactController extends Controller
{
    public function showpage(){
        return view('home.contact');
    }

    public function PostContact(Request $request){
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'min:8','max:255'],
            'message' => ['required', 'string', 'min:20', 'max:850'],
            'status'  => 'required',
            'categories'  => 'required',
        ]);
        $maildata=[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'status'=>$request->status,
            'categories'=>$request->categories,
        ];
        Mail::send('admin.email-template-contact', $maildata, function ($message) use ($maildata) {
            $message->from('dieuhai.it@gmail.com', 'The Royals');
            $message->to($maildata['email'],$maildata['name']);
            $message->subject('Thank to contact us !');
        });
           

        $email = new Email();
        $email->name = request('name');
        $email->email_address = request('email');
        $email->phone = request('phone');
        $email->subject = request('subject');
        $email->message = request('message');
        $email->status = request('status');
        $email->categories = request('categories');
        $email->save();
        session()->flash('success','Send Contact Successfully');
        return redirect('/');
        
    }
}
