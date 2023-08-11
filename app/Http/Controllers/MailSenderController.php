<?php

namespace App\Http\Controllers;
use App\Mail\MailSender;
use Mail;

use Illuminate\Http\Request;

class MailSenderController extends Controller
{
    //
    public function contact_us(Request $request){
        $request->validate([
            'name' => ['required'],
            'number' => ['required'],
            'email' => ['required','email'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);
        $message = $request->message;
        $data = ['message'=> $message];
        try {
            //code...
            Mail::to('bestdeveloper0718@gmail.com')->send(new MailSender($data));
        } catch (\Exception $e) {
            //throw $th;
            dd($e);
        }
        return redirect()->route('main');
    }
}
