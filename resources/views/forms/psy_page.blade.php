@extends('app')

@section('page-title')
       <h1>עמוד פסיכולוג</h1>
@stop

@section('content')
 <!--form-->


        <form class="psy-form" action="">

               <label>בחר פסיכולוג</label>
                    <div class="input-line clearfix">
                        <select name="type[]" class="pull-right mult">
                            <option disabled="disabled" selected="selected" >בחר מרשימה</option>
                            <option value="">דוד</option>
                            <option value="">משה</option>
                            <option value="">חיים</option>
                        </select>
                    </div>


                    <div class="input-line clearfix">
                    <label>מספר רשיון פסיכולוג</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

             <div class="input-line">
                    <label>email</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

                <div class="input-line">
                    <label>שפ"ח</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>


             <div class="input-line">
                    <label>מועד תחילת עבודה</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

                       <div class="input-line">
                    <label>עיר מגורים</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>


             <div class="input-line">
                    <label>טלפון</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>


                     <div class="input-line">
                    <label>דואר אלקטרוני</label>
                    <input type="text" name="" size="20" maxlength="20" readonly style="background-color: #D8D8D8;">
                    </div>

                      <div class="input-line clearfix">
                    <label>מועד תחילת העבודה</label>
                    <input type="date" name="" size="9" maxlength="9" readonly style="background-color: #D8D8D8;">
                    </div>

                     <div class="input-line clearfix">
                    <label>סטטוס מקצועי</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>

                     <div class="input-line">
                    <label>תפקיד בשפ"ח</label>
                    <input type="text" name="" size="12" maxlength="12" readonly style="background-color: #D8D8D8;">
                    </div>



            <a href="url">לצפיה במפגשי הפסיכולוג</a>

        </form>
        <!-- /form -->

@stop
