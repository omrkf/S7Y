<?php


require 'headHtml.php';


?>
<section>
    <div class="bkgrnd">
        <hr class="hhr">
        <form action="#" method="POST">

            <div id="maiinArea">

                <div id="inputArea">
                    
                    <div id="inputArea">

                        <label for="userName">
                            <div id=arText>
                                <p dir="rtl" ; align="right">الأسم الكامل</p>
                            </div>
                        </label>
                        <div class="nname inpuut">
                            <input class="inpuut" type="text" name="fullName" dir="rtl" value="<?php echo $_SESSION['fullname'] ?>">
                        </div>
                    </div>
                    <div id="inputArea">

                        <label for="userName">
                            <div id=arText>
                                <p dir="rtl" ; align="right">اسم المستخدم</p>
                            </div>
                        </label>

                        <div class="uuser inpuut">
                            <input class="inpuut" type="text" name="UserName" value="<?php echo $_SESSION['username'] ?>" />
                        </div>
                    </div>

                    <label for="userName">
                        <div id=arText>
                            <p dir="rtl" ; align="right">البريد الالكتروني</p>
                        </div>
                    </label>
                    <div class="eemail inpuut">
                        <input class="inpuut" type="text" name="email" value="<?php echo $_SESSION['email'] ?>" dir="rtl">
                    </div>
                </div>

                <hr>
                <div id="inputArea">

                    <label for="email">
                        <div id=arText>
                            <p dir="rtl" ; align="right">كلمة المرور (القديمة)</p>
                        </div>
                    </label>
                    <div>
                        <p id="DevCheckBox">
                            <div id="checkboxdiv">
                                <div class="ppassword inpuut">
                                    <input class="inpuut" name="oldPassword" type="password" placeholder="************" id="myInput">
                                </div>
                                <div class="locationn">
                                    <div class="checkbox-custom">
                                        <input class="form-check-input" type="checkbox" onclick="myFunction()">
                                        <label class="form-check-label" for="checkbox1">
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
                            <p dir="rtl" ; align="right">كلمة المرور (الجديدة)</p>
                        </div>
                    </label>
                    <div>
                        <p id="DevCheckBox">
                            <div id="checkboxdiv">
                                <div class="ppassword inpuut">
                                    <input class="inpuut" name="newPassword" type="password" placeholder="************" id="myInput1">
                                </div>
                                <div class="locationn">
                                    <div class="checkbox-custom">
                                        <input class="form-check-input" type="checkbox" onclick="myFunction1()">
                                        <label class="form-check-label" for="checkbox1">
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
                            <p dir="rtl" ; align="right"></p>تأكيد كلمة المرور (الجديدة)</p>
                        </div>
                    </label>
                    <div>
                        <p id="DevCheckBox">
                            <div id="checkboxdiv">
                                <div class="ppassword inpuut">
                                    <input class="inpuut" name="newPasswordconfirm" type="password" placeholder="************" id="myInput2">
                                </div>
                                <div class="locationn">
                                    <div class="checkbox-custom">
                                        <input class="form-check-input" type="checkbox" onclick="myFunction2()">
                                        <label class="form-check-label" for="checkbox1">
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
                    <input class="inpuut" type="date" value="<?php echo $_SESSION['dateBirth'] ?>" name="dateofbirth" id="dateofbirth">
                </div>
                <hr>
                <div id="inputArea">

                    <label for="userName">
                        <div id=arText>
                            <p dir="rtl" ; align="right">طرق التواصل</p>
                        </div>
                    </label>
                    <div class="instagram inpuut">
                        <input class="inpuut" type="text" name="insta" value="<?php echo $_SESSION['insta'] ?>" />
                    </div>
                    <div class="snapchat inpuut">
                        <input class="inpuut" type="text" name="snap" value="<?php echo $_SESSION['snap'] ?>" />
                    </div>
                    <div class="twittter inpuut">
                        <input class="inpuut" type="text" name="twt" value="<?php echo $_SESSION['twt'] ?>" />
                    </div>

                </div>
                <hr>
                <div>
                    <button class="button" type="submit" value="update">تحديث</button>
                </div>
                <hr>
                
            </div>
        </form>
    </div>
</section>
<?php
require 'memberUpdate.php';
?>
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
<script>
    function myFunction2() {
        var x = document.getElementById("myInput2");
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