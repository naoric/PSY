@extends('app')

@section('page-title')
    <h1>מוסדות המחוז</h1>
@stop

@section('content')
    <table border="1">
        <tr>
            <td>ערוך</td>
            <td>מחק</td>
            <td>מזהה</td>
            <td>שפ"ח</td>
            <td>עיר</td>
            <td>כיתות</td>
            <td>כיתות מיוחדות</td>
            <td>תלמידים בחינוך מיוחד</td>
            <td> תלמידים בכיתות א</td>
            <td>תלמידים בכיתות ב-יב</td>
            <td>סוג גן</td>
            <td>ילדי גן</td>
        </tr>

        @foreach ($all_educational_institutes as $ei)
            <tr>
                <td>
                    <a href="{{{route('educational-institute.edit', $ei->id)}}}">
                        <img src="{{{asset('images/icons/edit.png')}}}">
                    </a>
                </td>
                <td>
                    <form action="{{route('educational-institute.destroy', $ei->id)}}" method="post">
                        <input type="hidden" name="_method" value="DELETE"/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit">
                            <img src="{{{asset('images/icons/delete.png')}}}">
                        </button>
                    </form>


                </td>

                <td>{{{$ei->id}}}</td>
                -->
                <td>{{{$ei->educational_institute_name}}}</td>
                <td>{{{$ei->first_name}}}</td>
                <td>{{{$ei->last_name}}}</td>
                <td>{{{$ei->educational_institute_city}}}</td>
                <td>{{{$ei->number_of_classes}}}</td>
                <td>{{{$ei->number_of_special_classes}}}</td>
                <td>{{{$ei->number_of_alef_students}}}</td>
                <td>{{{$ei->number_of_non_alef_students}}}</td>
                <td>{{{$ei->number_of_special_students}}}</td>
                <td>{{{$ei->kindergaten_type}}}</td>
                <td>{{{$ei->number_of_kindergarten_children}}}</td>
                -->
            </tr>
        @endforeach
    </table>
@stop
