@extends('app')

@section('page-title')
    <h1>שיבוצים</h1>
@stop

@section('content')

    <table border="1">
        <thead>
        <tr>
            <td>מחק</td>
            <td>מזהה</td>
            <td>פסיכולוג</td>
            <td>מוסד</td>
            <td>שעות במוסד</td>
            <td>שנת שיבוץ</td>
            <td>תקן למוסד (למחוק)</td>
        </tr>
            </thead>

        @foreach ($matches as $mat)
            <tr>
                <td>
                    <form action="{{route('match.destroy', $mat->id)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE"/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit">
                            <img src="{{{asset('images/icons/delete.png')}}}">
                        </button>
                    </form>
                </td>

                <td>{{$mat->id}}</td>
                <td>{{$mat->psychologist['first_name'].(' ').$mat->psychologist['last_name']}}</td>
                <td>{{{$mat->institute['name']}}}</td>
                <td>{{{$mat->match_hours}}}</td>
                <td>{{{$mat->match_year}}}</td>
                <td>{{{$mat->institute['standart_before_cover']}}}</td>
            </tr>
        @endforeach
    </table>




@stop
