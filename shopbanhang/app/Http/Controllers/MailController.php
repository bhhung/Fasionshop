<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Mail;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class MailController extends Controller
{
    public function send_mail() {
        $data = [
            'name' => 'Van Quy',
        ];
        Mail::send('send_mail',$data,function($message){
            $message->from('vquy9591@gmai.com','Van Quy');
            $message->to('vquy9591@gmai.com','Van Quy');
            $message->subject('Thư mua sản phẩm');
        });
     
   }
}
