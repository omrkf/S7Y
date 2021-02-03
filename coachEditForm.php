<?php

require 'headHtml.php';

echo  $_SESSION['picture'] ;
?>

    <section>
        <div class="bkgrnd">
            <hr class="hhr">
            <form action="#" method="POST" enctype="multipart/form-data">

                <div id="maiiinAarea">
                    <div id="inputArea">

                        <label for="userName">
                            <div id=arText>
                                <p dir="rtl" ; align="right">الأسم الكامل</p>
                            </div>
                        </label>
                        <div class="nname inpuut">
                            <input class="inpuut" type="text" name="fullName" dir="rtl" value="<?php echo $_SESSION['fullname'] ?>"  >
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
                    <div id="inputArea">

                        <label for="userName">
                            <div id=arText>
                                <p dir="rtl" ; align="right">البريد الالكتروني</p>
                            </div>
                        </label>
                        <div class="eemail inpuut">
                            <input class="inpuut" type="text" name="email" dir="rtl" value="<?php echo $_SESSION['email'] ?>" >
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
                                        <input class="inpuut" type="password" name="newPassword" placeholder="************" id="myInput1">
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
                                        <input class="inpuut" type="password" name="newPasswordconfirm" placeholder="************" id="myInput2">
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
                    <div id="inputArea">

                        <label for="fullName">
                            <div id=arText>
                                <p>الصورة الشخصية</p>
                            </div>
                        </label>
                        <br>
                        <div class="upload-btn-wrapper">
                            <button class="inpuut btn">ارفع ملف</button>
                            <input class="inpuut" type="file" name="picture"  title="<?php echo $_SESSION['picture'] ?>" value="<?php echo $_SESSION['picture'] ?>" />
                        </div>
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
                            <input class="inpuut" type="file" name="myfile" />
                        </div>
                    </div>
                    <hr>



                    <div>
                        <button class="button" type="submit">تحديث</button>
                    </div>
                </div>
            </form>
            <?php require 'coachUpdate.php'; ?>
        </div>
        <hr class="hhr">
    </section>
<?php
require 'footer.php';
?>