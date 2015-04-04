@extends('app')

@section('page-title')
    <h1>טופס מוסד חינוכי</h1>
@stop

@section('content')
    <!--form-->

    <form class="institute-form" action="{{{route('educational-institute.update',
       16)}}}" method="post">



         @if(isset($is_new) && !$is_new)
            <input type="hidden" name="_method" value="PUT">
        @endif
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        <div class="input-line clearfix">
            <select name="shapah_id" class="pull-right mult">
                <option disabled="disabled" selected="selected">בחר שירות</option>
                @foreach ($shapahs as $shapah)
                    <option value="{{{$shapah->id}}}">{{{$shapah->shapah_name}}}</option>
                @endforeach
            </select>
            <span class="error">
        </div>


        <div class="input-line clearfix">
            <select name="educational_institute_type" class="pull-right mult"
                    value="{{{$educational_institute->educational_institute_type}}}">
                <option disabled="disabled" selected="selected">בחר סוג המוסד</option>
                <option value="1">גן ילדים</option>
                <option value="2">בית ספר יסודי</option>
                <option value="3">חטיבת ביניים</option>
                <option value="4">בית ספר תיכון</option>
                <option value="5">בית ספר תיכון + חטיבת ביניים</option>
                <option value="6">בית ספר יסודי + חטיבת ביניים</option>
            </select>
        </div>


        <div class="input-line">
            <label>שם המוסד</label>
            <input type="text" name="educational_institute_name" size="12" maxlength="12" required
                   value="{{{$educational_institute->educational_institute_name}}}">
        </div>

        <div class="input-line">
            <label>עיר המוסד</label>
            <input type="text" name="educational_institute_city" size="12" maxlength="12" required
                   value="{{{$educational_institute->educational_institute_city}}}">
        </div>

        <div class="input-line">
            <label>כתובת</label>
            <input type="text" name="educational_institute_address" size="35" maxlength="35" required
                   value="{{{$educational_institute->educational_institute_address}}}">
        </div>

        <div class="input-line">
            <label>טלפון</label>
            <input type="text" name="educational_institute_phone" size="12" maxlength="12"
                   value="{{{$educational_institute->educational_institute_phone}}}">
        </div>

        <div class="input-line">
            <label>דואר אלקטרוני</label>
            <input type="email" name="educational_institute_email" size="22" maxlength="22"
                   value="{{{$educational_institute->educational_institute_email}}}">
        </div>

        <div class="input-line">
            <label>מנהל המוסד- שם פרטי</label>
            <input type="text" name="principal_first_name" size="7" maxlength="7"
                   value="{{{$educational_institute->principal_first_name}}}">
        </div>

        <div class="input-line">
            <label>מנהל המוסד- שם משפחה</label>
            <input type="text" name="principal_last_name" size="7" maxlength="7"
                   value="{{{$educational_institute->principal_last_name}}}">
        </div>

        <div class="input-line">
            <label>מספר כיתות</label>
            <input type="number" class="small" name="number_of_classes" size="2" maxlength="2" max="99" min="0"
                   value="{{{$educational_institute->number_of_classes}}}">
        </div>

        <div class="input-line">
            <label>מספר כיתות מיוחדות</label>
            <input type="number" class="small" name="number_of_special_classes" size="2" maxlength="2" max="50" min="0"
                   value="{{{$educational_institute->number_of_special_classes}}}">
        </div>

        <div class="input-line">
            <label>תלמידים בחינוך מיוחד</label>
            <input type="number" class="small" name="number_of_special_students" size="3" maxlength="3" max="2000"
                   min="0" value="{{{$educational_institute->number_of_special_classes}}}">
        </div>

        <div class="input-line">
            <label>תלמידים בכיתות א</label>
            <input type="number" class="small" name="number_of_alef_students" size="3" maxlength="3" max="2000" min="0"
                   value="{{{$educational_institute->number_of_alef_students}}}">
        </div>

        <div class="input-line">
            <label>תלמידים בכיתות ב-יב</label>
            <input type="number" class="small" name="number_of_non_alef_students" size="3" maxlength="3" max="2000"
                   min="0" value="{{{$educational_institute->number_of_non_alef_students}}}">
        </div>

        <div class="input-line">
            <label>ילדי גן</label>
            <input type="number" class="small" name="number_of_kindergarten_children" size="3" maxlength="3" max="200"
                   min="0" value="{{{$educational_institute->number_of_kindergarten_children}}}">
        </div>

        <div class="input-line clearfix">
            <label>בחר סוג גן</label>
            <select name="kindergaten_type" class="pull-right mult"
                    value="{{{$educational_institute->kindergaten_type}}}">
                <option disabled="disabled" selected="selected"></option>
                <option value="1">טרום טרום חובה</option>
                <option value="2">טרום חובה</option>
                <option value="3">חובה</option>
                <option value="4">רב גילי</option>
                <option value="5">חנוך מיוחד</option>
            </select>
        </div>


        <div class="input-line clearfix">
            <button type="submit" class="pull-left approve">שלח</button>
        </div>


    </form>

    </form>
    <!-- /form -->
@stop
