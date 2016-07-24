@extends('layout.app')

@section('content')

    <style>
        .textBox {
            width: 80%;
            max-width: 900px;
            padding: 10px;
            margin: auto;
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

    <div>
        <img src="img/Icon.png" style="width: 100px; height: 100px;display: block; margin: auto">
    </div>

    <div style="text-align: center">
        <h2 class="farsi" style="color: white;">درباره ما</h2>
    </div>

    <article dir="rtl" class="textBox">
        <span class="farsi">ایران مترو حاصل تلاش گروهی از دانشجویان دانشگاه صنعتی امیرکبیر است که در شهریور ماه سال 1394 پروژه اش کلید خورد و در آبان ماه همان سال، اولین نسخه اش روانه <a href="https://cafebazaar.ir/app/ir.blog.chameco.iranmetro/?l=fa" target="_blank">بازار</a> شد.</span>
        <br/>
        <span class="farsi">اعضای تیم:</span>
        <br/>
        <span class="farsi">محمدمهدی آقاجانی</span>
        <br/>
        <span class="farsi">ایمان تبریزیان</span>
        <br/>
        <span class="farsi">عمران باتمان غلیچ</span>
        <br/>
        <br/>
        <span class="farsi" style="display: block">برای تماس با ما می توانید به آدرس زیر ایمیل بزنید.</span>
        <a href="mailto:autcodelovers@gmail.com">autcodelovers@gmail.com</a>
    </article>


@stop