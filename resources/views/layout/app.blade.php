<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="lib/animate.css"/>
    <link rel="stylesheet" href="css/slider.css"/>
    <title>{{$title}}</title>
</head>

<body>

<div id="fullContainer">

    @yield('content')

</div>


<div id="menu">
    <ul style="position: absolute; right: 30px; display: inline; margin-bottom: 10px; padding: 10px">
        <a href="/">
            <li class="link">خانه</li>
        </a>
        <a href="/contact-us">
            <li class="link">ارتباط با ما</li>
        </a>
        <a href="/about">
            <li class="link">درباره ما</li>
        </a>
    </ul>

    <ul style="position: absolute; left: 0px; display: inline; top: 0px; padding: 10px">
        @if (isset($loggedIn))
            <a href="/logout">
                <li class="link">خروج</li>
            </a>
        @endif
        <a href="/admin">
            <li class="link">پنل مدیریت</li>
        </a>
    </ul>
</div>

@if (isset($msg))
    <div class="animated fadeIn">
        <span class="farsi topMsg animated fadeOutLeft" style="color: #b3ffa7; animation-delay: 3s">
        {{$msg}}
        </span>
    </div>
@endif

@if (isset($err))
    <span class="farsi topMsg animated fadeOutLeft"
          style="color: red; animation-delay: 3s">! خطایی پیش آمده است !</span>
@endif

</body>
<script src="script/slider.js"></script>

</html>
