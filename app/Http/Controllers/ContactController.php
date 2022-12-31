<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function contact()
    {
        return view('frontend.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "mobile" => "numeric",
            "companyName" => "required",
            "subject" => "required",
            "message" => "required",
        ]);

        if ($this->isOnline()) {
            $mail_data = [
                // 'recipient' => 'mostafarohman85@gmail.com',
                'recipient' => 'tanvircsdev@gmail.com',
                'fromMail' => $request->email,
                'fromName' => $request->name,
                'fromMoblie' => $request->mobile,
                'fromCompany' => $request->companyName,
                'subject' => $request->subject,
                'mailBody' => $request->message,
            ];

            // return $mail_data;

            Mail::send('Email.VisitorMailTemplate', $mail_data, function ($message) use ($mail_data) {
                $message->from($mail_data['fromMail'],$mail_data['fromName']);
                $message->to($mail_data['recipient']);
                $message->subject($mail_data['subject']);
            });

            return redirect()->back()->with('success','Email has been sent!');


        } else {
            return redirect()->back()->withInput()->with('error', 'Check your internet connection!');
        }
    }

    public function isOnline($site = 'https://www.youtube.com/')
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
}
