<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>דיווח מפגש</title>
    <link href='http://fonts.googleapis.com/css?family=Alef:400,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('lib/Pikaday-master/css/pikaday.css') }}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>
<div class="container">
    <header class="main-header">
        <nav class="horizontal">
            <ul class="clearfix">
                <li>
                    <a href="#">מוסדות המחוז</a>
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </li>
                <li><a href="#">הפסיכולוגים במחוז</a>
                </li>
                <li>
                    <a href="#">מערכת לשיבוץ</a>
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </li>
                <li><a href="#">מחשבון תקן</a>
                </li>
                <li><a href="#">דו"חות</a>
                </li>
            </ul>
        </nav>
    </header>
    <article class="main-content">
        @section('page-title')
        @show
        @yield('content')
    </article>
    <footer>
        <nav class="horizontal centered">
            <ul class="clearfix">
                <li><a href="#">קישור לדף</a>
                </li>
                <li><a href="#">קישור לדף</a>
                </li>
                <li><a href="#">קישור לדף</a>
                </li>
                <li><a href="#">קישור לדף</a>
                </li>
                <li><a href="#">קישור לדף</a>
                </li>
            </ul>
        </nav>

    </footer>
</div>
<script src="{{asset('lib/moment/min/moment.min.js')}}"></script>
<script src="{{asset('lib/Pikaday-master/pikaday.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>

</html>
