@extends('app')

@section('page-title')
    <h1>מוסדות המחוז</h1>
@stop

@section('content')
    <!--form-->


    <form class="psy-form" action="">

         <form class="psy-form" action="">


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
        <td> תלמידים בכיתות א </td>
        <td>תלמידים בכיתות ב-יב</td>
        <td>סוג גן</td>
        <td>ילדי גן</td>
	</tr>

	@foreach ($EducationalInstitutes as $ei)
	<tr>
		<td>
			<a href="{{{route('EducationalInstitute.edit', $ei->id)}}}">
				<img src="{{{asset('images/icons/edit.png')}}}">
			</a>
		</td>
		<td>
      <form action="{{route('EducationalInstitute.destroy', $ei->id)}}" method="post">
                <input type="hidden" name="_method" value="DELETE"/>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit">
                    <img src="{{{asset('images/icons/delete.png')}}}">
                </button>
            </form>


		</td>

		<td>{{{$ei->id}}}</td>
        <td>
            @foreach($psy->shapahs as $shapah)
                {{$shapah->shapah_name}}<br/>
            @endforeach
        </td>
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


          <!--   <h3>---בחירת שם המוסד על ידי שדה חיפוש והשלמה אוטומטית---</h3>


                    <div class="input-line clearfix">
                    <label>שפ"ח</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

             <div class="input-line">
                    <label>עיר</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

             <div class="input-line">
                    <label>כתובת</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

                <div class="input-line">
                    <label>טלפון</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

             <div class="input-line">
                    <label>דואר אלקטרוני</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

                    <div class="input-line">
                    <label>מנהל המוסד- שם פרטי</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

             <div class="input-line">
                    <label>מנהל המוסד- שם משפחה</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

                   <div class="input-line">
                    <label>מספר כיתות</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>


                   <div class="input-line">
                    <label>מספר כיתות מיוחדות</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

            <div class="input-line">
                    <label>תלמידים בחינוך מיוחד</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

             <div class="input-line">
                    <label>תלמידים בכיתות א</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

            <div class="input-line">
                    <label>תלמידים בכיתות ב-יב</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

             <div class="input-line">
                    <label>ילדי גן</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

             <div class="input-line">
                    <label>סוג גן</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

            <a href="url">לצפיה במפגשי פסיכולוגים במוסד</a>
-->





    </form>
    <!-- /form -->
@stop
