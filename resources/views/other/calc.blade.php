@extends('app')

@section('page-title')
        <h1> מחשבון לחישוב תקן</h1>
        <h2> ע"פ מפתח עבודה מומלץ בחוז"ר מנכ"ל משרד החינוך</h2>
        <h3>מתווה השירות הפסיכולוגי חינוכי" תש"ע 8/א 1212" </h3>
@stop

@section('content')
    <form class="psy-form" id="calcForm">


                <div class="input-line clearfix">
                    <label>מספר הילדים בגיל הגן וכיתות א, גילאים 3-6</label>
                    <input type="number" class= "small" id="ages3to6" size="4" maxlength="4" max="9999" min="1">
                </div>

                <div class="input-line clearfix">
                    <label>מספר התלמידים בכיתות ב-י"ב</label>
                    <input type="number" class= "small" id="agesbetybet" size="4" maxlength="4" max="9999" min="1">
                </div>

                <div class="input-line clearfix">
                    <label>מספר התלמידים בחינוך מיוחד</label>
                    <input type="number"   class= "small" id="agesspecial" size="4" maxlength="4" max="9999" min="1">
                </div>
        <br>
 <button onclick="calcFunction(); return false;" clearfix>חשב תקן פסיכולוג</button>
         <input type="button" onclick="resetFunction()" value="איפוס ערכים">
        <br>
        <br>
                <div class="input-line clearfix">
                    <label>מספר התקנים לפסיכולוג</label>
<input type="number" id="output" readonly class= "medium" size="5" STYLE="background-color: #B8B8B8;">
        </div>





    </form>

        <script>
function calcFunction() {


   document.getElementById('output').value = (((document.getElementById('agesspecial').value/500)+(document.getElementById('agesbetybet').value/1000)+(document.getElementById('agesspecial').value/300)).toFixed(2));
}


            function resetFunction() {
    document.getElementById("calcForm").reset();
}
            </script>
@stop
