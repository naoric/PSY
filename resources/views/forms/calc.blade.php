@extends('app')

@section('page-title')
        <h1> מחשבון לחישוב תקן</h1>
        <h2> ע"פ מפתח עבודה מומלץ בחוז"ר מנכ"ל משרד החינוך</h2>
        <h3>מתווה השירות הפסיכולוגי חינוכי" תש"ע 8/א 1212" </h3>
@stop

@section('content')
    <form class="psy-form" action="">


                <div class="input-line clearfix">
                    <label>מספר הילדים בגיל הגן וכיתות א, גילאים 3-6</label>
                    <input type="number" class= "small" name="" size="4" maxlength="4" max="9999" min="1">
                </div>

                <div class="input-line clearfix">
                    <label>מספר התלמידים בכיתות ב-י"ב</label>
                    <input type="number" class= "small" name="" size="4" maxlength="4" max="9999" min="1">
                </div>

                <div class="input-line clearfix">
                    <label>מספר התלמידים בחינוך מיוחד</label>
                    <input type="number" class= "small" name="" size="4" maxlength="4" max="9999" min="1">
                </div>


                    <div class="input-line">
                    <label>מספר שעות תקן ע"פ ערכים שהוזנו </label>
                    <input type="number" class= "small" name="" size="3" maxlength="3" readonly style="background-color: #D8D8D8;">





    </form> <!-- /form -->
@stop
