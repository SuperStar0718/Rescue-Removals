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
        $data = ['message'=> $message];
        try {
            //code...
            // Mail::to('bestdeveloper0718@gmail.com')->send(new MailSender($data));
            Mail::send('EmailTemplate.Contact', [
                'name' => $request->name,
                'email' => $request->email,
                'number' => $request->number,
                'message' => $request->message ],
                function ($message) use($email, $name, $subject) {
                        $message->from($email, $name);
                        $message->to('superdev0718@gmail.com', 'Boris')
                                ->subject($subject);
        });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

        } catch (\Exception $e) {
            //throw $th;
            dd($e);
        }
        return redirect()->route('main');
    }
}
