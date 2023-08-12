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
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        $name = $request->name;
        $number = $request->number;
        $data = [
            'name'=>$name,
            'email'=>$email,
            'number'=>$number,
            'message'=> $message
        ];
        try {
            //code...
            Mail::send('EmailTemplate.Contact', ['data' => $data],
                function ($message) use( $subject) {
                        $message->from('bestdeveloper0718@gmail.com');
                        $message->to('info@rescueremovals.com', 'Support Team')
                                ->subject($subject);
        });

        
        } catch (\Exception $e) {
            //throw $th;
            dd($e);
        }
        return back();
}
}
