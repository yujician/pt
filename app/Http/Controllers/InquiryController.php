<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\InquiryRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryMail;

class InquiryController extends Controller
{
    public function show()
    {
        //お問い合わせページ表示
        return view('contents.inquiry_form');
    } 

    public function show_auth()
    {
        $user = Auth::user();
        $u_id = $user->id;
        $master_data = User::find($u_id);
        //dd($master_data->all());
        $sub_data = Profile::where('u_id', $u_id)->get();
        // dd($u_id);
        // $profile = Profile::where('u_id', $user->id)->first();
        // $inquiry = Inquiry::where('id', )->latest()->first();
        // dd($inquiry);
        return view('contents.inquiry_form', ['master_data' => $master_data, 'sub_data' => $sub_data ]);
    } 

    public function sendInquiry(Request $request)
    {
        // dd($request);
        // if($request->input('change')){
            $inquiry = new Inquiry;
            $inquiry->u_id = $request->g_id;
            $inquiry->name = $request->g_name;
            $inquiry->email = $request->g_mail;
            $inquiry->tel = $request->g_tel;
            $inquiry->subject = $request->g_subject;
            $inquiry->content = $request->g_contents;
            // dd($request);
            $inquiry->save();
        // };
        Mail::send(new InquiryMail($request));
        return view('contents.thanks');
        // return redirect('dashboard')->with('flash_message', 'お問い合わせを送信しました。');
    }

}
