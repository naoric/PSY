@extends('app')

@section('page-title')
    <h1>עמוד שפ"ח</h1>
@stop

@section('content')

    <div class="row">
        <label>שם השפ"ח:</label>
        <span class="label-data">{{$shapah->shapah_name}}</span>
    </div>

    <div class="row">
        <label>שם פרטי- מנהל השפ"ח:</label>
        <span class="label-data">{{$shapah->manager_first_name}}</span>
    </div>


@stop
