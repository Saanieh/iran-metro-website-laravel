<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;


class AdminController extends Controller
{
    public function index()
    {
        if (Auth::guest())
            return redirect('/login');
        else {
            $comments = Comment::all();

            return view('admin')->with('comments', $comments);

        }
    }
}
