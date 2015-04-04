@extends('app')

@section('page-title')
    <h1>הפסיכולוגים בשפ"י</h1>
@stop

@section('content')
    {{$institute}}
    <div class="row">
        <label>מזהה פסיכולוג:</label>
        <span class="label-data">{{$psychologist->id}}</span>
    </div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>

    <div>
        <table border="1">
        @foreach($psychologist->visits as $visit)
            <tr>
                <td>{{$visit->id}}</td>
                <td>{{$visit->date}}</td>
                <td>{{$visit->length_in_institute}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
        </table>
    </div>

@stop
