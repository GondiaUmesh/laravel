<?php

namespace App\Http\Controllers;

use App\Mail\Mailtrap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function index()

    {

    	Mail::to('gondiaumesh007@gmail.com')->send(new Mailtrap());


    }
}
