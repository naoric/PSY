@extends('app')

@section('page-title')
       <h1>עמוד פסיכולוג</h1>
@stop

@section('content')

<table border="1">
	<tr>
		<td>ערוך</td>
		<td>מחק</td>
		<td>מזהה</td>
		<td>מספר רישיון</td>
		<td>שם פרטי</td>
		<td>שם משפחה</td>
		<td>עיר מגורים</td>
		<td>טלפון</td>
		<td>דוא"ל</td>
		<td>זמינות</td>
		<td>מועד התחלת תפקיד</td>
	</tr>

	@foreach ($psychologists as $psy)
	<tr>
		<td>
			<a href="{{{route('psychologist.edit', $psy->id)}}}">
				<img src="{{{asset('images/icons/edit.png')}}}">
			</a>
		</td>
		<td>
			<a href="{{{route('psychologist.destroy', $psy->id)}}}">
				<img src="{{{asset('images/icons/delete.png')}}}">
			</a>
		</td>
		<td>{{{$psy->id}}}</td>
		<td>{{{$psy->license_number}}}</td>
		<td>{{{$psy->first_name}}}</td>
		<td>{{{$psy->last_name}}}</td>
		<td>{{{$psy->city_of_residence}}}</td>
		<td>{{{$psy->phone_number}}}</td>
		<td>{{{$psy->psychologist_email}}}</td>
		<td>{{{$psy->availability}}}</td>
		<td>{{{$psy->start_working_date}}}</td>
	</tr>
	@endforeach
</table>


      

@stop
