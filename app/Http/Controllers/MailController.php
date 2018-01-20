<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        Mail::send('users.mail',['firstname','Taataparea'],function($message){
            $message->to('taie.taataparea1@gmail.com','To Parea')->subject('Test Email');
            $message->from('taie.taataparea1@gmail.com','Taataparea');
        });
    }
}
