@extends('layouts.app')

@section('content')
    <style>
        .textBox {
            width: 80%;
            max-width: 900px;
            padding: 10px;
            margin: auto;
            margin-bottom: 30px;
            text-align: right;
            background: rgba(255, 255, 255, 0.5)
        }

    </style>

    <div style="text-align: center;">
        <div style="animation-delay: 1s; text-align: center; margin-top: 40px" class="animated flip box">
            <!-- center side -->
            <h1 style="color: white; font-family:BFarnaz;">ایران مترو</h1>
        </div>
    </div>

    <div style="text-align: center">
        <h2 class="farsi" style="color: white;">نظرات کاربران</h2>
    </div>


    @foreach($comments as $comment)
        <article dir="rtl" class="textBox">
            <span class="farsi" style="color: #555555">نام: </span> <span class="farsi">{{$comment->name}}</span>
            <br/>
            <span class="farsi" style="color: #555555">ایمیل: </span><span class="farsi">{{$comment->email}}</span>
            <br/>
            <span class="farsi" style="color: #555555">پیام: </span>
            <br/>
            <span class="farsi">{{$comment->comment}}</span>
            <br/>
            <span class="farsi" style="color: #555555">تاریخ: </span>
            <span class="farsi" dir="ltr">{{$comment->commented_on}}</span>
        </article>
    @endforeach

    @if(count($comments) == 0)
        <article class="farsi textBox" dir="rtl">نظری وجود ندارد.</article>
    @endif
@stop