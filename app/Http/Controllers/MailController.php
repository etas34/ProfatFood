<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{

    public function mail_anasayfa(Request $request)
    {
//        $this->isValidCaptcha($request->all());
        if (!$this->isValidCaptcha($request->all())) {
            return redirect()->back()->withErrors([
                'message' => 'invalid recaptcha'
            ]);
        }




        $data = array
        (
            'ad'=>$request->ad,
            'mail'=>$request->mail,
            'mesaj'=>$request->mesaj,
        );

        Mail::send('mail/mail_icerik', $data, function ($message) use ($data, $request){
            $message->subject ('Profat Food İletişim Formu!');
            $message->from ($data['mail'], $data['ad']);
            $message->to('eyup.tas@ciftcilerelektrik.com.tr', 'Eyüp Taş');
            $message->to('info@profatfood.com', 'Profat Food');
        });

        if (Mail::failures()) {
            return view('iletisim')->with('send', FALSE);
        }

        else
        {
            return view('iletisim')->with('send', TRUE);
        }
    }


    public function isValidCaptcha(array $data)
    {
        if (env('APP_DEBUG') === true) return true;

        if (!isset($data['token']) || is_null($data['token'])) return false;

        $url = "https://www.google.com/recaptcha/api/siteverify";
        $secret = "6Lc7NeEUAAAAANNVG3_3oAr-7o_5Zb-gi6WsYYss";

        $data = [
            'secret' => "$secret",
            'response' => $data['token'],
        ];

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );


        $context  = stream_context_create($options);
        $response = file_get_contents($url,false, $context);


        $recaptcha = json_decode($response, true);


        if (isset($recaptcha['success']) && $recaptcha['success'] == false) return false;

        return ($recaptcha['score'] >= 0.5) ? true : false;
    }




}
