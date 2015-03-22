@extends('app')

@section('page-title')
    <h1>מחיקת שיבוץ קיים</h1>
@stop

@section('content')
    <form class="psy-form" action="">



                    <label>בחר פסיכולוג</label>
                    <div class="input-line clearfix">
                        <select name="type[]" class="pull-right mult" >
                            <option disabled="disabled" selected="selected" >בחר מרשימה</option>
                            <option value="">דוד</option>
                            <option value="">משה</option>
                            <option value="">חיים</option>
                        </select>
                    </div>

                 <h3>כאן תופיע טבלת כל השיבוצים של אותו פסיכולוג וניתן יהיה למחוק שיבוץ, כלומר שורה בטבלה</h3>


    </form> <!-- /form -->
@stop
