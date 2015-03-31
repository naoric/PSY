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

                    <div class="input-line clearfix">

                    <select name="type[]" class="pull-right mult">
                    <option disabled="disabled" selected="selected">בחר סוג המוסד</option>
                        <option value="1">גן ילדים</option>
                        <option value="2">בית ספר יסודי</option>
                        <option value="3">חטיבת ביניים</option>
                        <option value="4">בית ספר תיכון</option>
                         <option value="5">בית ספר תיכון + חטיבת ביניים</option>
                        <option value="6">בית ספר יסודי + חטיבת ביניים </option>
                    </select>
                </div>
               <div class="input-line">
                    <label>שם המוסד</label>
                    <input type="text" name="" size="12" maxlength="12" required>
                    </div>

                    <div class="input-line">
                    <label>עיר המוסד</label>
                    <input type="text" name="" size="12" maxlength="12" required>
                    </div>

                    <div class="input-line">
                    <label>כתובת</label>
                    <input type="text" name="" size="35" maxlength="35" required>
                    </div>

                <div class="input-line">
                    <label>טלפון</label>
                    <input type="text" name="" size="12" maxlength="12" >
                    </div>

                    <div class="input-line">
                    <label>דואר אלקטרוני</label>
                    <input type="email" name="" size="22" maxlength="22">
                    </div>

                    <div class="input-line">
                    <label>מנהל המוסד- שם פרטי</label>
                    <input type="text" name="" size="7" maxlength="7" >
                    </div>

              <div class="input-line">
                    <label>מנהל המוסד- שם משפחה</label>
                    <input type="text" name="" size="7" maxlength="7" >
                    </div>

                   <div class="input-line">
                    <label>מספר כיתות</label>
                    <input type="number" class="small" name="" size="2" maxlength="2"                          max="99" min="0">
                    </div>

                   <div class="input-line">
                    <label>מספר כיתות מיוחדות</label>
                    <input type="number" class="small" name="" size="2" maxlength="2"                         max="50" min="0" >
                    </div>

              <div class="input-line" >
                    <label>תלמידים בחינוך מיוחד</label>
                    <input type="number"  class="small" name="" size="3" maxlength="3"                       max="2000" min="0" >
                    </div>

             <div class="input-line">
                    <label>תלמידים בכיתות א</label>
                    <input type="number"  class="small" name="" size="3" maxlength="3"                       max="2000" min="0">
                    </div>

              <div class="input-line">
                    <label>תלמידים בכיתות ב-יב</label>
                    <input type="number"  class="small" name="" size="3" maxlength="3"                       max="2000" min="0">
                    </div>

            <div class="input-line" >
                    <label>ילדי גן</label>
                    <input type="number"  class="small" name="" size="3" maxlength="3"                max="200" min="0" >
                    </div>

               <div class="input-line clearfix">
                     <label>בחר סוג גן</label>
                    <select name="type[]" class="pull-right mult">
                    <option disabled="disabled" selected="selected"></option>
                        <option value="1">טרום טרום חובה</option>
                        <option value="2">טרום חובה</option>
                        <option value="3">חובה</option>
                        <option value="4">רב גילי</option>
                        <option value="5">חנוך מיוחד</option>
                    </select>
                </div>


             <div class="input-line clearfix">
                <button type="submit" class="pull-left approve">צור מוסד</button>
            </div>


        </form>

    </form>
    <!-- /form -->
@stop
