<?php

namespace App\Http\Controllers;

use App\Jobs\WelcomeEmailJob;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $req){
        $data=[
        'name'=>$req->name,
        'email'=>$req->email,
        'message' =>$req->message
        ];
 //   Mail::to('khanh.dq@extremevn.com.vn')->send(new ContactMail($data));
    WelcomeEmailJob::dispatch($data)->onQueue('emails');
    return 'Send email successfully!';
    }
}
