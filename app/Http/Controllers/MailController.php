<?php

namespace App\Http\Controllers;

use App\Mail\QueryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        $mailData = [
            'title'=>'Testing Mail',
            'body'=>'This is a test mail.'
        ];

        Mail::to('ajaykmankani66@gmail.com')->send(new QueryMail($mailData));
        dd('mail sent successfully');
    }
}
