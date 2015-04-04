@extends('app')

@section('page-title')
    <h1>עמוד פסיכולוג</h1>
@stop

@section('content')

    <div class="row">
        <label>מזהה פסיכולוג:</label>
        <span class="label-data">{{$psychologist->id}}</span>
    </div>
    <div class="row">
     <label>מספר רישיון:</label>
     <span class="label-data">{{$psychologist->license_number}}</span>
    </div>

    <div class="row">
     <label>שם פרטי:</label>
     <span class="label-data">{{$psychologist->first_name}}</span>
</div>

    <div class="row">
     <label>שם משפחה:</label>
     <span class="label-data">{{$psychologist->last_name}}</span>
</div>

    <div class="row">
 <label>עיר מגורים</label>
     <span class="label-data">{{$psychologist->city_of_residence}}</span>
</div>
    <div class="row">
<label>טלפון</label>
     <span class="label-data">{{$psychologist->phone_number}}</span>
</div>

    <div class="row">
<label>דואר אלקטרוני</label>
     <span class="label-data">{{$psychologist->psychologist_email}}</span>
</div>


    <div class="row">
<label>זמינות</label>
     <span class="label-data">{{$psychologist->availability}}</span>

</div>    <div class="row">
<label>סטטוס</label>
     <span class="label-data">{{$psychologist->status['professional_status_description']}}</span>
</div>    <div class="row">
<label>תפקיד</label>
     <span class="label-data">{{$psychologist->role['psychologist_roles_description']}}</span>
</div>    <div class="row">
<label>תאריך תחילת עבודה</label>
     <span class="label-data">{{$psychologist->start_working_date}}</span>
</div>


	</tr>

    <div>
        <table border="1">
        @foreach($psychologist->visits as $visit)
            <tr>
                <td>{{$visit->id}}</td>
                <td>{{$visit->date}}</td>
                <td>{{$visit->length_in_institute}}</td>
                <td>{{$visit->comment1}}</td>
                <td>{{$visit->length_in_shapah}}</td>
                <td>{{$visit->comment2}}</td>
            </tr>
        @endforeach
        </table>
    </div>

@stop
