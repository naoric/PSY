@extends('app')

@section('page-title')
       <h1>הזנת שיבוץ לשנת עבודה - פסיכולוג במוסד חינוכי</h1>
@stop

@section('content')

    <form class="psy-form" action="">


                    <label>בחר פסיכולוג</label>
                    <div class="input-line clearfix">
                        <select name="type[]" class="pull-right mult">
                            <option disabled="disabled" selected="selected" >בחר מרשימה                               </option>
                            <option value="">דוד</option>
                            <option value="">משה</option>
                            <option value="">חיים</option>
                        </select>
                    </div>

                  <div class="input-line" >
                    <label>מספר רשיון פסיכולוג</label>
                    <input type="text" name="" size="12" maxlength="12" readonly                             style="background-color: #D8D8D8;">
                    <br></br>
                </div>

           <label>שנת שיבוץ</label>
                    <div class="input-line clearfix">
                        <select name="type[]" class="pull-right mult" >
                            <option disabled="disabled" selected="selected" >בחר שנה</option>
                            <option value="">2015</option>
                            <option value="">2016</option>
                            <option value="">2017</option>
                            <option value="">2018</option>
                            <option value="">2019</option>
                            <option value="">2020</option>
                            <option value="">2021</option>
                            <option value="">2022</option>
                        </select>
                    </div>



                <div class="input-line">
                    <label>היקף משרה- שעות בשבוע</label>
                    <input type="number" name="" size="2" maxlength="2" max="60" min="1" required>
                </div>
                  <div class="input-line">

                    <label>שם המוסד</label>

                    <select name="institute-name" >
                        <option value="AU">תיכון עמית עמל</option>
                         <option value="AU">תיכון ששת עמל</option>
                    </select>
                </div>

                <div class="input-line clearfix">
                    <button type="submit" class="pull-left approve">שלח</button>
                </div>


            </form> <!-- /form -->
@stop
