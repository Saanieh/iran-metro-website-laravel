@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="lib/animate.css">
    <style>
        .textBox {
            padding: 10px;
            margin: auto;
            text-align: right;
            background: rgba(255, 255, 255, 0.5);
            max-width: 300px;
            min-width: 300px;
        }

        .formRow {
            margin: 7px;
            display: block;
        }

        .inputTitle {
            display: inline-block;
            width: 130px;
        }

        #submitBtn {
            background: #0066dd;
            border: solid 2px #2100d9;
            padding: 10px;
            padding-right: 75px;
            padding-left: 75px;
            margin-bottom: -15px;
            transition-property: width;
            transition-duration: 0.5s;
        }

        #submitBtn:hover {
            background: #3690fa;
            border: solid 2px #2100d9;
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
        <h2 class="farsi" style="color: white;">ورود به پنل مدیریت</h2>
    </div>

    <div dir="rtl" class="textBox">
        <form onsubmit="return onClick()" method="post" action="/login">
            {{csrf_field()}}
            <div class="formRow">
                <span class="inputTitle">ایمیل :</span>
                <input id="email" name="email" type="email">
                <span class="error" id="emailErr">ایمیل مدیریت را وارد کنید</span>
            </div>

            <div class="formRow">
                <span class="inputTitle">پسورد :</span>
                <input id="password" name="password" type="password">
                <span class="error" id="passwordErr">پسورد را وارد کنید</span>
            </div>
            <div dir="ltr" style="text-align: center">
                <input id="submitBtn" type="submit" value="ورود" class="farsi">
            </div>
        </form>
    </div>

    <script src="script/login.js"></script>

@stop