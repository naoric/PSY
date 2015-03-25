@extends('app')

@section('page-title')
    <h1>יצירת מוסד חינוכי חדש</h1>
@stop

@section('content')
    <!--form-->



        <form class="psy-form" action="">



                  <div class="input-line clearfix">
                    <select name="type[]" class="pull-right mult">
                        <option disabled="disabled" selected="selected">בחר שפ"ח</option>
                        <option value="1">אופקים</option>
                        <option value="2">אילת</option>
                        <option value="3">ירוחם</option>
                        <option value="4">עומר</option>
                    </select>
                </div>

             <div class="input-line">
                    <label>עיר המוסד</label>
                    <input type="text" name="" size="12" maxlength="12" required>
                    </div>

                <div class="input-line">
                    <label>טלפון</label>
                    <input type="text" name="" size="12" maxlength="12" >
                    </div>


                    <div class="input-line">
                    <label>שם המנהל</label>
                    <input type="text" name="" size="12" maxlength="12" >
                    </div>


                   <div class="input-line">
                    <label>מספר כיתות</label>
                    <input type="text" name="" size="12" maxlength="12" required>
                    </div>


                   <div class="input-line">
                    <label>כיתות מיוחדות</label>
                    <input type="text" name="" size="12" maxlength="12" >
                    </div>

            <div class="input-line">
                    <label>ילדי גן</label>
                    <input type="text" name="" size="12" maxlength="12" >
                    </div>

             <div class="input-line">
                    <label>תלמידים - כיתה א</label>
                    <input type="text" name="" size="12" maxlength="12" >
                    </div>

            <div class="input-line">
                    <label>תלמידים - כיתות ב-יב</label>
                    <input type="text" name="" size="12" maxlength="12" >
                    </div>

             <div class="input-line">
                    <label>תלמידים - צרכים מיוחדים</label>
                    <input type="text" name="" size="12" maxlength="12" >
                    </div>


             <div class="input-line clearfix">
                <button type="submit" class="pull-left approve">צור מוסד</button>
            </div>


        </form>

    </form>
    <!-- /form -->
@stop
