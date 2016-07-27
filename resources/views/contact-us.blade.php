@extends('layouts.app')

@section('title','ارتباط با ما')

@section('content')
    <link rel="stylesheet" href="lib/animate.css">
    <style>
        .textBox {
            width: 80%;
            padding: 10px;
            margin: auto;
            text-align: right;
            background: rgba(255, 255, 255, 0.5)
        }

        .formRow {
            margin: 7px;
            display: block;
        }

        .inputTitle {
            display: inline-block;
            width: 130px;
        }

        .error {
            color: firebrick;
            margin-right: 10px;
            visibility: hidden;
        }
    </style>

    <div style="text-align: center;">
        <div style="animation-delay: 1s; text-align: center; margin-top: 40px" class="animated flip box">
            <!-- center side -->
            <h1 style="color: white; font-family:BFarnaz;">ایران مترو</h1>
        </div>
    </div>

    <div style="text-align: center">
        <h2 class="farsi" style="color: white;">ارتباط با ما</h2>
    </div>

    <div dir="rtl" class="textBox" style="max-width: 700px">
        <form onsubmit="return onClick()" method="post" action="/contact-us">
            <div class="form-group">
                <div class="formRow">
                    <span class="inputTitle">نام :</span>
                    <input class="form-control" id="name" name="name" type="text">
                    <span class="error" id="nameErr">وارد کردن نام الزامی است</span>
                </div>

                <div class="formRow">
                    <span class="inputTitle">آدرس ایمیل :</span>
                    <input class="form-control" id="email" name="email" type="email">
                    <span class="error" id="emailErr">ایمیل را وارد کنید</span>
                </div>

                <div class="formRow" style="margin-top: 15px">
                    <span class="formRow">پیام :</span>
                    <textarea class="form-control" id="comment" style="margin-right: 6px" name="comment" cols="40"
                              rows="6"></textarea>
                    <span class="error" id="commentErr">متن پیام خالی است.</span>
                </div>
                <div dir="ltr" style="text-align: left">
                    <input class="form-control btn btn-primary" id="submitBtn" type="submit" value="ارسال"
                           class="farsi">
                </div>
            </div>
            {{ csrf_field() }}
        </form>
    </div>

    <script src="script/contact-us.js"></script>

@stop