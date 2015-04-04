@extends('app')

@section('page-title')
    <h1>ביקורים</h1>
@stop

@section('content')

    <table border="1">
        <tr>
            <td>ערוך</td>
            <td>מחק</td>
            <td>מזהה</td>
            <td>משובץ במוסד</td>
            <td>תאריך</td>
            <td>פעילות</td>
            <td>משך הביקור</td>
            <td>תיאור מפגש</td>
        </tr>

        @foreach ($visits as $vis)
            <tr>
                <td>
                    <a href="{{{route('visit.edit', $vis->id)}}}">
                        <img src="{{{asset('images/icons/edit.png')}}}">
                    </a>
                </td>
                <td>
                    <form action="{{route('visit.destroy', $vis->id)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE"/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit">
                            <img src="{{{asset('images/icons/delete.png')}}}">
                        </button>
                    </form>

                </td>
                <td>
                    <a href="{{route('visit.show', $vis->id)}}">
                        {{$vis->id}}
                    </a>
                </td>
                <td>
                    @foreach($vis->institutes as $institute)
                        {{$institute->name}}<br/>
                    @endforeach
                </td>
                <td>{{{$vis->date}}}</td>
                <td>{{{$vis->activity}}}</td>
                <td>{{{$vis->length}}}</td>
                <td>{{{$vis->comment}}}</td>
            </tr>
        @endforeach
    </table>




@stop
