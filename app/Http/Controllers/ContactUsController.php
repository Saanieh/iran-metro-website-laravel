<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

class ContactUsController extends Controller
{
    public function index(){
        return view('contact-us')->with('title','ارتباط با ما');
    }

    public function post(){
        $input = Request::all();


    }
}
