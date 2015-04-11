@extends('app')

@section('page-title')
    <h1>שיבוצים</h1>
@stop

@section('content')

    <table border="1">
        <thead>
        <tr>
            <td>ערוך</td>
            <td>מזהה</td>
            <td>פסיכולוג</td>
            <td>מוסד</td>
            <td>שעות במוסד</td>
            <td>שנת שיבוץ</td>
        </tr>
            </thead>

        @foreach ($matches as $mat)
            <tr>
                <td>
                    <a href="{{{route('match.edit', $mat->id)}}}">
                        <img src="{{{asset('images/icons/edit.png')}}}">
                    </a>
                </td>

                <td>{{$mat->id}}</td>
                <td>{{$mat->psychologist['first_name'].(' ').$mat->psychologist['last_name']}}</td>
                <td>{{{$mat->institute['name']}}}</td>
                <td>{{{$mat->match_hours}}}</td>
                <td>{{{$mat->match_year}}}</td>
            </tr>
        @endforeach
    </table>




@stop
