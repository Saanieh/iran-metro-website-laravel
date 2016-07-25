<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $session = $request->session();

        $msg = $session->get('msg');
        $err = $session->get('err');
        $title = 'ایران مترو';


        return view('home')->with(compact('msg', 'err', 'title'));
    }
}
