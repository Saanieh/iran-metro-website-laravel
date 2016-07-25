@extends('layout.app')

@section('content')

    <div style="text-align: center;">
        <div class="box" style="width:30%">
            <!-- left side -->
        </div>

        <div style="animation-delay: 1s; width:30%" class="animated flip box">
            <!-- center side -->
            <h1 style="color: white; font-family:BFarnaz; padding-top: 40px">ایران مترو</h1>
        </div>

        <div class="box" style="width:30%">
            <!-- right side -->
        </div>
    </div>

    <div>
        <img src="img/Icon.png" style="width: 100px; height: 100px;display: block; margin: auto">
    </div>

    <div style="text-align: center">
        <h3 class="farsi" style="color: white;">به وب سایت ما خوش آمدید</h3>
    </div>

    <div class="slideshow-container">

        <div class="mySlides slideFade">
            <div class="farsi numbertext">3 / 1</div>
            <img class="slideImg" src="img/poster%201.jpg">
            <!--<div class="text">Caption Text</div>-->
        </div>

        <div class="mySlides slideFade">
            <div class="farsi numbertext" style="color: #333333">3 / 2</div>
            <img class="slideImg" src="img/poster%202.jpg">
            <!--<div class="text">Caption Two</div>-->
        </div>

        <div class="mySlides slideFade">
            <div class="farsi numbertext">3 / 3</div>
            <img class="slideImg" src="img/poster%203.jpg" style="width:240px">
            <!--<div class="text">Caption Three</div>-->
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

@stop