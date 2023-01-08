<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function SendMail(Request $request){
        $message = $request->message;
        Mail::to($request->email)->send(new sendMail($message));

        return redirect()->back() ->with('alert', 'Message sent succesfully');
    }
}
