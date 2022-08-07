<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryMail;
use App\Mail\OrderNoteMail;

class MailController extends Controller
{
    public function inquiryMail (Request $request)
    {
        //dd($request->all());
        Mail::send(new InquiryMail($request));
        return view('contents.thanks');
    }

    public function OrderNoteMail (Request $request)
    {
        //dd($request->all());
        Mail::send(new OrderNoteMail($request));
        return view('contents.thanks');
    }
}
