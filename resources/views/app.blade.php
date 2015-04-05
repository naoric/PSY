<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>שפ"י דרום</title>
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
                      <a href="/map">השפ"חים במחוז</a>
                </li>
                <li>
                    <a href="#">המוסדות במחוז</a>
                    <ul>
                        <li><a href="{{route('institute.index')}}">רשימת המוסדות</a></li>
                        <li><a href="{{route('institute.create')}}">הוספת מוסד חדש</a></li>

                    </ul>
                </li>
                <li><a href="#">הפסיכולוגים במחוז</a>
                     <ul>
                        <li><a href="{{route('psychologist.index')}}">רשימת הפסיכולוגים</a></li>
                        <li><a href="{{route('psychologist.create')}}">הוספת פסיכולוג חדש</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#">מפגשים ודיווח</a>
                    <ul>
                        <li><a href="{{route('visit.index')}}">רשימת מפגשים
                      <li><a href="{{route('visit.create')}}">דיווח מפגש במוסד</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">שיבוץ פסיכולוג במוסד</a>
                     <ul>
                    <li><a href="/calc">מחשבון לתקן שיבוץ</a></li>
                      <li><a href="new_match">שיבוץ פסיכולוג למוסד בשנת עבודה</a></li>
                      <li><a href="delete_match">מחיקת שיבוץ</a></li>
                    </ul>
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
        <li><a href="http://cms.education.gov.il/EducationCMS/Units/shefi">שפ"י נט</a>
            &nbsp
                </li>
        <li><a href="http://edu.gov.il/owlheb/Pages/default.aspx">משרד החינוך</a>
            &nbsp
                </li>
                <li><a href="http://www.apa.org/">American Psychological Association</a>
                &nbsp
                </li>
                <li> <a href="http://www.psychology.org.il/">הסתדרות הפסיכולוגים בישראל</a>&nbsp
                </li>
                <li><a href="http://www.hebpsy.net/">פסיכולוגיה עברית</a>
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
