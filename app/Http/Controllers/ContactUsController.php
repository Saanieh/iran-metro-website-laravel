<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;
use Request;

use App\Http\Requests;

class ContactUsController extends Controller
{
    public function index(){
        return view('contact-us')->with('title','ارتباط با ما');
    }

    public function post(){
        $input = Request::all();

        $comment = new Comment;

        $comment->name = $input['name'];
        $comment->email = $input['email'];
        $comment->comment = $input['comment'];
        $comment->commented_on = Carbon::now();

        $comment->save();

        return redirect('/');
    }
}
