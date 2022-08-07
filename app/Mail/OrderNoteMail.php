<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderNoteMail extends Mailable
{
    use Queueable, SerializesModels;

    // private $params = array();

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $params)
    {
        $this->request = $request;
        //パラメータ設定
        $this->params = $params;
    }
    // dd($request);

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $request = $this->request;
        $params = $this->params;
        // dd($params);
        // return $this->to($request->o_mail)->bcc('jf@jf1.co.jp')
        return $this->to($request->o_mail)->bcc('yujician.sumi@gmail.com')
        ->subject('お見積り受け付けのお知らせ')
        ->text('mail.order-note', compact('request', 'params'));
        // ->attach($this->params['file'], compact('request'));

    }
}
