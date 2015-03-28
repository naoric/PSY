@extends('app')

@section('page-title')
       <h1>דיווח מפגש פסיכולוג</h1>
@stop

@section('content')
<!--form-->

            <form class="psy-form" action="">


                 <div class="input-line clearfix">
                    <label>תאריך פגישה</label>
                    <input type="date" id="datepicker" class="datepicker" required>
                </div>


                <div class="input-line clearfix">
                    <label>שם המוסד</label>
                    <select name="institute-name">
                        <option value="AU">תיכון עמית עמל</option>
                         <option value="AU">תיכון ששת עמל</option>
                    </select>
                </div>

                <div class="input-line" required>
                    <label>שעות שהיה בבית הספר</label>
                    <input type="number" name="" size="1" maxlength="1" min="1" max="8">
                </div>

                <div class="input-line" required>
                    <label>שעות שהיה בשפ"ח</label>
                    <input type="number" name="" size="1" maxlength="1" max="8" min="1">
                </div>

                <div class="dynamic-list" data-label="סוגי פעילויות">
                   <label>דווח פעילות</label>
                    <div class="input-line">
                        <select name="type[]" class="pull-right mult">
                            <option disabled="disabled" selected="selected">בחר פעילות</option>
                            <optgroup label="ועדות /ישיבות">
                            <option value="10">ישיבת צוות בינ-מקצועי + מנהל</option>
                            <option value="11">ישיבת צוות בינ-מקצועי ללא מנהל</option>
                            <option value="12">ועדת שילוב</option>
                            <option value="13">ועדת השמה</option>
                            <option value="14">ועדת החלטה</option>
                            <option value="15">ועדת שיבוצים על יסודי</option>
                            <option value="16">אחר</option>
                            </optgroup>

                            <optgroup label="פגישות">
                            <option value="20">מנהל</option>
                            <option value="21">יועצת</option>
                            <option value="22">גננת</option>
                            <option value="23">מורה</option>
                            <option value="24">אינטייק הורים</option>
                            <option value="25">החזר הוצאות הורים</option>
                            <option value="26">הדרכת הורים</option>
                            <option value="27">אחר</option>
                            </optgroup>

                            <optgroup label="אבחון והערכה">
                            <option value="30">אבחון בשלות</option>
                            <option value="31">אבחון פסיכולוגי מלא</option>
                            <option value="32">אבחון בדגש  הערכה רגשית</option>
                            <option value="33">אבחון רב תחומי להערכת לקות למידה</option>
                            <option value="34">הערכה פסיכולוגית לועדת שילוב</option>
                            <option value="35">הערכה פסיכולוגית לועדת השמה</option>
                            <option value="36">(אבחון מערכתי (בי"ס/כתה</option>
                            <option value="37">תצפית</option>
                            </optgroup>

                             <optgroup label="עבודה קבוצתית מערכתית">
                            <option value="40">עבודה קבוצתית עם תלמידים</option>
                            <option value="41">עבודה קבוצתית עם מורים</option>
                            <option value="42">הרצאה למורים</option>
                            <option value="43">הרצאה להורים</option>
                            <option value="44">אחר</option>
                            </optgroup>

                            <optgroup label="טיפול">
                             <option value="50">טיפול פרטני בילד</option>
                             <option value="51">טיפול משפחתי</option>
                             <option value="52">אחר</option>
                            </optgroup>

                            <optgroup label="הפניות">
                            <option value="60">הפניה לפסיכיאטר</option>
                            <option value="61">הפניה לנוירולוג</option>
                            <option value="62">הפניה למכון להתפתחות הילד</option>
                            <option value="62">הפניה למכון להתפתחות הילד</option>
                            <option value="63">הפניה לטיפול פרא רפואי</option>
                            <option value="64">אחר</option>
                                  </optgroup>
                        </select>
                        <textarea name="activity-desc[]" maxlength="100" placeholder="תאר את הפעילות - עד 100 תווים" cols="40"></textarea>
                    </div>


                    <label>דווח פעילות</label>
                    <div class="input-line">
                        <select name="type[]" class="pull-right mult">
                            <option disabled="disabled" selected="selected">בחר פעילות</option>
                            <optgroup label="ועדות /ישיבות">
                            <option value="10">ישיבת צוות בינ-מקצועי + מנהל</option>
                            <option value="11">ישיבת צוות בינ-מקצועי ללא מנהל</option>
                            <option value="12">ועדת שילוב</option>
                            <option value="13">ועדת השמה</option>
                            <option value="14">ועדת החלטה</option>
                            <option value="15">ועדת שיבוצים על יסודי</option>
                            <option value="16">אחר</option>
                            </optgroup>

                            <optgroup label="פגישות">
                            <option value="20">מנהל</option>
                            <option value="21">יועצת</option>
                            <option value="22">גננת</option>
                            <option value="23">מורה</option>
                            <option value="24">אינטייק הורים</option>
                            <option value="25">החזר הוצאות הורים</option>
                            <option value="26">הדרכת הורים</option>
                            <option value="27">אחר</option>
                            </optgroup>

                            <optgroup label="אבחון והערכה">
                            <option value="30">אבחון בשלות</option>
                            <option value="31">אבחון פסיכולוגי מלא</option>
                            <option value="32">אבחון בדגש  הערכה רגשית</option>
                            <option value="33">אבחון רב תחומי להערכת לקות למידה</option>
                            <option value="34">הערכה פסיכולוגית לועדת שילוב</option>
                            <option value="35">הערכה פסיכולוגית לועדת השמה</option>
                            <option value="36">(אבחון מערכתי (בי"ס/כתה</option>
                            <option value="37">תצפית</option>
                            </optgroup>

                             <optgroup label="עבודה קבוצתית מערכתית">
                            <option value="40">עבודה קבוצתית עם תלמידים</option>
                            <option value="41">עבודה קבוצתית עם מורים</option>
                            <option value="42">הרצאה למורים</option>
                            <option value="43">הרצאה להורים</option>
                            <option value="44">אחר</option>
                            </optgroup>

                            <optgroup label="טיפול">
                             <option value="50">טיפול פרטני בילד</option>
                             <option value="51">טיפול משפחתי</option>
                             <option value="52">אחר</option>
                            </optgroup>

                            <optgroup label="הפניות">
                            <option value="60">הפניה לפסיכיאטר</option>
                            <option value="61">הפניה לנוירולוג</option>
                            <option value="62">הפניה למכון להתפתחות הילד</option>
                            <option value="62">הפניה למכון להתפתחות הילד</option>
                            <option value="63">הפניה לטיפול פרא רפואי</option>
                            <option value="64">אחר</option>
                                  </optgroup>
                        </select>
                        <textarea name="activity-desc[]" maxlength="100" placeholder="תאר את הפעילות - עד 100 תווים" cols="40"></textarea>
                    </div>

                </div>

                <div class="input-line clearfix">
                    <button type="submit" class="pull-left approve">שלח</button>
                </div>



            </form> <!-- /form -->

@stop