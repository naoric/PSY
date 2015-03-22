@extends('app')

@section('page-title')
       <h1>הזנת פסיכולוג חדש</h1>
@stop

@section('content')
<!--form-->


        <form class="psy-form" action="">

            <div class="input-line" required>
                <label>מספר רשיון פסיכולוג</label>
                <input type="number" name="" size="12" maxlength="12" required>
            </div>

            <label>בחר שפ"ח</label>

            <div class="input-line clearfix">
                <select name="type[]" class="pull-right mult">
                    <option disabled="disabled" selected="selected">בחר שירות</option>
                    <option value="10">אופקים</option>
                    <option value="11">נתיבות</option>
                    <option value="12">עומר</option>
                </select>
            </div>
            <div class="input-line clearfix">
                <label>מועד תחילת עבודה</label>
                <input type="month" name="work_starting_date">
            </div>
            <div class="input-line" required>
                <label>שם פרטי</label>
                <input type="text" name="" size="10" maxlength="8" required>
            </div>
            <div class="input-line" required>
                <label>שם משפחה</label>
                <input type="text" name="" size="10" maxlength="8" required>
            </div>

            <div class="input-line">
                <label>היקף משרה- שעות בשבוע</label>
                <input type="number" class="small" name="" size="2" maxlength="2" max="50" min="1">
            </div>

            <div class="input-line">
                <label>טלפון</label>
                <input type="tel" name="" size="10" maxlength="10" required>
            </div>

            <div class="input-line" required>
                <label>email</label>
                <input type="email" name="" size="22" maxlength="22" required>
            </div>
            <div class="dynamic-list clearfix" data-label="ססטוס מקצועי">
                <label>סטטוס מקצועי</label>
                <div class="input-line">
                    <select name="type[]" class="pull-right mult">
                        <option disabled="disabled" selected="selected">בחר סטטוס</option>
                        <option value="1">סטודנט</option>
                        <option value="2">פרקטיקום מורחב</option>
                        <option value="3">מתמחה</option>
                        <option value="4">מומחה</option>
                        <option value="5">הסכמה להדרכה</option>
                        <option value="6">מדריך</option>
                        <option value="7">אחר</option>
                    </select>
                </div>
            </div>
            <div class="dynamic-list" data-label="תפקיד">
                <label>תפקיד בשפ"ח</label>

                <div class="input-line clearfix">
                    <select name="type[]" class="pull-right mult">
                        <option disabled="disabled" selected="selected">בחר תפקיד</option>
                        <option value="1">ראש צוות</option>
                        <option value="2">אחראי תחום</option>
                        <option value="3">מנהל שפ"ח</option>
                        <option value="4">מדריך</option>
                    </select>
                </div>
            </div>
            <div class="input-line clearfix">
                <button type="submit" class="pull-left approve">שלח</button>
            </div>
        </form>
        <!-- /form -->

@stop
