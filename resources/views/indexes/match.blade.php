@extends('app')

@section('page-title')
    <h1>שיבוצים</h1>
@stop

@section('content')

    <table border="1">
        <tr>
            <td>ערוך</td>
            <td>מחק</td>
            <td>מזהה</td>
            <td>פסיכולוג</td>
            <td>מוסד</td>
            <td>שעות במוסד</td>
            <td>שנת שיבוץ</td>
        </tr>

        @foreach ($matches as $mat)
            <tr>
                <td>
                    <a href="{{{route('match.edit', $mat->id)}}}">
                        <img src="{{{asset('images/icons/edit.png')}}}">
                    </a>
                </td>
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
                <td>{{$mat->psychologist['first_name']}}</td>
                <td>{{{$mat->institute['name']}}}</td>
                <td>{{{$mat->match_hours}}}</td>
                <td>{{{$mat->match_year}}}</td>
            </tr>
        @endforeach
    </table>




@stop
