<?php

require 'headHtml.php';

?>
<section>
    <div class="bkgrnd">
        <form action="#" method="POST">
            <hr class="hhr">
            <div id="mainAaarea">


                
                <div id="inputArea">

                    <label for="userName">
                        <div id=arText>
                            <p dir="rtl" ; align="right">اسم النادي</p>
                        </div>
                    </label>
                    <div class="nname inpuut">
                        <input class="inpuut" type="text" name="fullName" dir="rtl" placeholder="صحي" required>
                    </div>
                </div>
                <div id="inputArea">

                    <label for="userName">
                        <div id=arText>
                            <p dir="rtl" ; align="right">اسم المستخدم</p>
                        </div>
                    </label>

                    <div class="uuser inpuut">
                        <input class="inpuut" type="text" name="clubName" required placeholder="userName@" />
                    </div>
                </div>
                <div class="aaaa">
                    <label class="eddit">نوع النادي:</label>
                    <label class="edditt">
                        <input type="radio" class="option-input radio" name="kind" value="صحي">
                        صحي
                    </label>
                    <label class="edditt">
                        <input type="radio" class="option-input radio" name="kind" value="رياضي" checked />
                        رياضي
                    </label>
                </div>
                <hr>
                <div id="inputArea">

                    <label for="userName">
                        <div id=arText>
                            <p dir="rtl" ; align="right">البريد الالكتروني</p>
                        </div>
                    </label>
                    <div class="eemail inpuut">
                        <input class="inpuut" type="text" name="email" dir="rtl" required placeholder="example@example.com">
                    </div>
                </div>
                <hr>
                <div id="inputArea">

                    <label for="email">
                        <div id=arText>
                            <p dir="rtl" ; align="right">كلمة المرور</p>
                        </div>
                    </label>
                    <div>
                        <p id="DevCheckBox">
                            <div id="checkboxdiv">
                                <div class="ppassword inpuut">
                                    <input class="inpuut" type="password" name="password" required placeholder="************" id="myInput">
                                </div>
                                <div class="locationn">
                                    <div class="checkbox-custom">
                                        <input class="form-check-input" type="checkbox" onclick="myFunction()">
                                        <label class="form-check-label">
                                            <div class="likkke">
                                                <p class="passs">إظهار كلمة المرور</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
                <div id="inputArea">

                    <label for="email">
                        <div id=arText>
                            <p dir="rtl" ; align="right">تأكيد كلمة المرور</p>
                        </div>
                    </label>
                    <div>
                        <p id="DevCheckBox">
                            <div id="checkboxdiv">
                                <div class="ppassword inpuut">
                                    <input class="inpuut" type="password" required placeholder="************" name="confirmPassword" id="myInput1">
                                </div>
                                <div class="locationn">
                                    <div class="checkbox-custom">
                                        <input class="form-check-input" type="checkbox" onclick="myFunction1()">
                                        <label class="form-check-label">
                                            <div class="likkke">
                                                <p class="passs">إظهار كلمة المرور</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
                <hr>
                <div id="inputArea">
                    <label for="email">
                        <div id=arText>
                            <p dir="rtl" ; align="right">نبذة عن النادي</p>
                        </div>
                    </label>
                    <div class="form-group green-border-focus">
                        <textarea class="inpuuut form-control" name="descript" id="exampleFormControlTextarea5" rows="3"></textarea>
                    </div>
                </div>
                <hr>
                <div id="inputArea">

                    <label for="fullName">
                        <div id=arText>
                            <p>صورة للنادي</p>
                        </div>
                    </label>
                    <br>
                    <div class="upload-btn-wrapper">
                        <button class="inpuut btn">ارفع ملف</button>
                        <input class="inpuut" type="file" name="picture" />
                    </div>
                </div>
                <hr>
                <div id="inputArea">

                    <label for="fullName">
                        <div id=arText>
                            <p>أوقات النادي</p>
                        </div>
                    </label>
                    <br>
                    <label for="fullName">
                        <p class="ppp">من: </p>
                        <div class="fromt">
                            <input class="inpuut" name="workStart" type="time" class="form-control" required>
                        </div>
                    </label>
                    <label for="fullName">
                        <p class="ppp">إلى: </p>
                        <div class="fromt">
                            <input class="inpuut" name="workEnd" type="time" class="form-control" required>
                        </div>

                    </label>
                </div>
                <hr>
                <div id="inputArea">

                    <label for="userName">
                        <div id=arText>
                            <p dir="rtl" ; align="right">طرق التواصل</p>
                        </div>
                    </label>
                    <div class="instagram inpuut">
                        <input class="inpuut" type="text" name="insta" placeholder="userName@" />
                    </div>
                    <div class="snapchat inpuut">
                        <input class="inpuut" type="text" name="snap" placeholder="userName@" />
                    </div>
                    <div class="twittter inpuut">
                        <input class="inpuut" type="tel" name="twt" placeholder="userName@" />
                    </div>

                </div>

                <hr>
                <div class="locationn">
                    <div class="checkbox-custom">
                        <input class="form-check-input" type="checkbox" id="checkbox1" onchange=" document.getElementById('submitchecked').disabled = !this.checked;">
                        <label class="form-check-label" for="checkbox1">
                            لقد قرأت كافة الشروط و <a href="#" class="aaa">القوانين </a>
                        </label>
                    </div>
                </div>
                <hr>
                <div>
                    <input id="submitchecked" class="bttn btn btn-dark" name="submit" type="submit" value="اشترك" disabled>
                </div>
            </div>
        </form>
        <?php require 'clubRegister.php'; ?>
        <hr class="hhr">

</section>
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<script>
    function myFunction1() {
        var x = document.getElementById("myInput1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<?php
require 'footer.php';
?>