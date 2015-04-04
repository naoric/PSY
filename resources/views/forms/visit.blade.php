@extends('app')

@section('page-title')
    <h1>דיווח מפגש פסיכולוג</h1>
@stop

@section('content')
    <!--form-->


    <form class="psy-form" action="{{{route('visit.update',
        $visit->id)}}}" method="post">

        @if(isset($is_new) && !$is_new)
            <input type="hidden" name="_method" value="PUT">
        @endif

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="input-line clearfix">
            <label>תאריך פגישה</label>
            <input type="text" id="datepicker" class="datepicker" name="date" required value="{{{$visit->date}}}">
        </div>


        <div class="input-line clearfix">
            <label>שם המוסד</label>
            <select name="institute-name" title="שם המוסד">
                @foreach ($institutes as $ei)
                    <option value="{{{$ei['id']}}}">
                        {{{$ei['name']}}}</option>
                @endforeach
            </select>
        </div>

        <div class="input-line" required>
            <label>שעות שהיה בבית הספר</label>
            <input type="number" name="length_in_institute" size="1" maxlength="1" min="1" max="8" name="date"
                   value="{{{$visit->length_in_institute}}}">
        </div>

        <div class="input-line" required>
            <label>שעות שהיה בשפ"ח</label>
            <input type="number" name="length_in_shapah" size="1" maxlength="1" max="8" min="1"
                   value="{{{$visit->length_in_shapah}}}" title="שעות שהייה בשפח">
        </div>

        <div class="dynamic-list" data-label="סוגי פעילויות">
            <label>דווח פעילות</label>

            <div class="input-line">
                <select name="activity1" class="pull-right mult" title="דווח פעילות">
                    <option disabled="disabled" selected="selected" value="{{{$visit->activity1}}}">בחר פעילות</option>
                    <optgroup label="ועדות /ישיבות">
                        <option>ישיבת צוות בינ-מקצועי + מנהל</option>
                        <option>ישיבת צוות בינ-מקצועי ללא מנהל</option>
                        <option>ועדת שילוב</option>
                        <option>ועדת השמה</option>
                        <option>ועדת החלטה</option>
                        <option>ועדת שיבוצים על יסודי</option>
                        <option>אחר</option>
                    </optgroup>

                    <optgroup label="פגישות">
                        <option>מנהל</option>
                        <option>יועצת</option>
                        <option>גננת</option>
                        <option>מורה</option>
                        <option>אינטייק הורים</option>
                        <option>החזר הוצאות הורים</option>
                        <option>הדרכת הורים</option>
                        <option>אחר</option>
                    </optgroup>

                    <optgroup label="אבחון והערכה">
                        <option>אבחון בשלות</option>
                        <option>אבחון פסיכולוגי מלא</option>
                        <option>אבחון בדגש הערכה רגשית</option>
                        <option>אבחון רב תחומי להערכת לקות למידה</option>
                        <option>הערכה פסיכולוגית לועדת שילוב</option>
                        <option>הערכה פסיכולוגית לועדת השמה</option>
                        <option>(אבחון מערכתי (בי"ס/כתה</option>
                        <option>תצפית</option>
                    </optgroup>

                    <optgroup label="עבודה קבוצתית מערכתית">
                        <option>עבודה קבוצתית עם תלמידים</option>
                        <option>עבודה קבוצתית עם מורים</option>
                        <option>הרצאה למורים</option>
                        <option>הרצאה להורים</option>
                        <option>אחר</option>
                    </optgroup>

                    <optgroup label="טיפול">
                        <option>טיפול פרטני בילד</option>
                        <option>טיפול משפחתי</option>
                        <option>אחר</option>
                    </optgroup>

                    <optgroup label="הפניות">
                        <option>הפניה לפסיכיאטר</option>
                        <option>הפניה לנוירולוג</option>
                        <option>הפניה למכון להתפתחות הילד</option>
                        <option>הפניה למכון להתפתחות הילד</option>
                        <option>הפניה לטיפול פרא רפואי</option>
                        <option>אחר</option>
                    </optgroup>
                </select>
                <textarea name="activity-desc1[]" maxlength="100" placeholder="תאר את הפעילות - עד 100 תווים " cols="40"
                        >{{{$visit->comment1}}}</textarea>
            </div>


        </div>

        <div class="input-line clearfix">
            <button type="submit" class="pull-left approve">שלח</button>
        </div>


    </form> <!-- /form -->

@stop