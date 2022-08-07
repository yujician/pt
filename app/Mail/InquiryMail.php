<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $request = $this->request;
      // return $this->to($request->g_mail)->bcc('jf@jf1.co.jp')
      return $this->to($request->g_mail)->bcc('yujician.sumi@gmail.com')
      ->subject('お問い合わせ受け付けのお知らせ')
      ->text('mail.inquiry',compact('request')); // inquiry.blade.phpへ送る
    }
}
