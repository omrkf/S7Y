<?php

require 'headHtml.php';

?>
<section>
    <div class="bkgrnd">
        <hr class="hhr">
        <form action="#" method="POST" enctype="multipart/form-data">

            <div id="maiiinArea">
                <div id="inputArea">

                    <label for="userName">
                        <div id=arText>
                            <p dir="rtl" ; align="right">الأسم الكامل</p>
                        </div>
                    </label>
                    <div class="nname inpuut">
                        <input class="inpuut" type="text" name="fullName" required dir="rtl" placeholder="أحمد العلي">
                    </div>
                </div>

                <div id="inputArea">

                    <label for="userName">
                        <div id=arText>
                            <p dir="rtl" ; align="right">اسم المستخدم</p>
                        </div>
                    </label>

                    <div class="uuser inpuut">
                        <input class="inpuut" type="text" name="coachName" required placeholder="userName@" />
                    </div>
                </div>
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
                <div class="aaaa">
                    <label class="eddit">الجنس:</label>
                    <label class="edditt">
                        <input type="radio" class="option-input radio" name="gender" value="male" checked>
                        ذكر
                    </label>
                    <label class="edditt">
                        <input type="radio" class="option-input radio" name="gender" value="female" />
                        أنثى
                    </label>
                </div>

                <hr>
                <div id="inputArea">

                    <label for="fullName">
                        <div id=arText>
                            <p>الصورة الشخصية</p>
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
                                        <label class="form-check-label" >
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
                                    <input class="inpuut" type="Password" name="confirmPassword" required placeholder="************" id="myInput1">
                                </div>
                                <div class="locationn">
                                    <div class="checkbox-custom">
                                        <input class="form-check-input" type="checkbox" onclick="myFunction1()">
                                        <label class="form-check-label" >
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

                    <label for="fullName">
                        <div id=arText>
                            <p>تاريخ الميلاد</p>
                        </div>
                    </label>
                    <input class="inpuut" type="date" required name="dateofbirth" id="dateofbirth">
                </div>
                <hr>
                <div id="inputArea">

                    <label for="fullName">
                        <div id=arText>
                            <p>صورة من شهادة التدريب</p>
                        </div>
                    </label>
                    <br>
                    <div class="upload-btn-wrapper">
                        <button class="inpuut btn">ارفع ملف</button>
                        <input class="inpuut" type="file" name="certifcation" />
                    </div>
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
        <?php require 'coachRegister.php'; ?>
    </div>
    <hr class="hhr">
</section>

<?php
require 'footer.php';
?>