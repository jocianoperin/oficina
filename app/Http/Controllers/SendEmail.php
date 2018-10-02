<?php namespace App\Http\Controllers;

use App\User;
use Input;
use Hash;
use Auth;

class SendEmail extends Controller
{

    public function sendMail(Request $request) {
        //dd($request->all());

        $validator = \Validator::make($request->all(), [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required',
                'bodymessage' => 'required']
        );

        if ($validator->fails()) {
            return redirect('contact')->withInput()->withErrors($validator);
        }


        $name = $request->name;
        $email = $request->email;
        $title = $request->subject;
        $content = $request->bodymessage;


        \Mail::send('emails.visitor_email', ['name' => $name, 'email' => $email, 'title' => $title, 'content' => $content], function ($message) {

            $message->to('comissaoculturautfpr@gmail.com')->subject('Subject of the message!');
        });


        return redirect('contact')->with('status', 'You have successfully sent an email to the admin!');

    }

}
