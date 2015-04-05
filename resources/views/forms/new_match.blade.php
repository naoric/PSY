@extends('app')

@section('page-title')
       <h1>הזנת שיבוץ לשנת עבודה - פסיכולוג במוסד חינוכי</h1>
@stop

@section('content')

    <form class="match-form" action="{{{route('match.update',
        $match->id)}}}" method="post">


                    <label>בחר פסיכולוג</label>
                    <div class="input-line clearfix">
                        <select name="psychologist_id" class="pull-right mult">
                            <option disabled="disabled" selected="selected" >בחר מרשימה                               </option>
                           @foreach ($shapahs as $shapah)
                    <option value="{{{$psychologists->id}}}">{{{$psychologists->first_name}}}</option>
                            @endforeach
                        </select>
                         <span class="error">
                    </div>



           <label>שנת שיבוץ</label>
                    <div class="input-line clearfix">
                        <select name="match_year" class="pull-right mult" >
<option disabled="disabled" selected="selected" value="{{{$match->match_year}}}">בחר שנה</option>
                            <option value="">התשע"ה</option>
                            <option value="">התשע"ו</option>
                            <option value="">התשע"ז</option>
                            <option value="">התשע"ח</option>
                            <option value="">התשע"ט</option>
                            <option value="">התש"ף</option>
                            <option value="">התשפ"א</option>
                            <option value="">התשפ"ב</option>
                        </select>
                    </div>



                <div class="input-line">
                    <label>היקף משרה- שעות בשבוע</label>
                    <input type="number" name="match_hours" size="2" maxlength="2" max="60" min="1" value="{{{$match->match_hours}}}" required>
                </div>
                  <div class="input-line">





                    <label>שם המוסד</label>
     <div class="input-line clearfix">
            <select name="institute_id" class="pull-right mult">
                <option disabled="disabled" selected="selected">בחר מוסד</option>
                @foreach ($institutes as $institute)
                    <option value="{{{$institute->id}}}">{{{$institute->name}}}</option>
                @endforeach
            </select>
            <span class="error"></span>
        </div>


                <div class="input-line clearfix">
                    <button type="submit" class="pull-left approve">שלח</button>
                </div>


            </form> <!-- /form -->
@stop
