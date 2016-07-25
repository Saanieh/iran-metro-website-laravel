<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact-us')->with('title', 'ارتباط با ما');
    }

    public function post(Request $request)
    {
        $input = $request->all();

        $comment = new Comment;

        $comment->name = $input['name'];
        $comment->email = $input['email'];
        $comment->comment = $input['comment'];
        $comment->commented_on = Carbon::now();

        $session = $request->session();

        if ($comment->save())
            $session->flash('msg', 'با سپاس از پیام شما');
        else
            $session->flash('err', 'خطا در ارسال پیام');

        return redirect('/');
    }
}
