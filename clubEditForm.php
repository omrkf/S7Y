<?php

require 'headHtml.php';

?>

    <section>
        <div class="bkgrnd">
            <form action="#" method="POST" enctype="multipart/form-data">
                <hr class="hhr">
                <div id="maaainAaarea">

                    <div id="inputArea">

                        <label for="userName">
                            <div id=arText>
                                <p dir="rtl" ; align="right">اسم النادي</p>
                            </div>
                        </label>
                        <div class="nname inpuut">
                            <input class="inpuut" type="text" name="UserName" dir="rtl" value="<?php echo $_SESSION['username'] ?>">
                        </div>
                    </div>
                    <hr>
                    <div id="inputArea">

                        <label for="userName">
                            <div id=arText>
                                <p dir="rtl" ; align="right">البريد الالكتروني</p>
                            </div>
                        </label>
                        <div class="eemail inpuut">
                            <input class="inpuut" type="text" name="email" dir="rtl" value="<?php echo $_SESSION['email'] ?>" dir="rtl">
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
                                            <label class="form-check-label"  >
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
                                            <label class="form-check-label"  >
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
                    <hr>
                    <div id="inputArea">
                        <label for="email">
                            <div id=arText>
                                <p dir="rtl" ; align="right">نبذة عن النادي</p>
                            </div>
                        </label>
                        <div class="form-group green-border-focus">
                            <textarea class="inpuuut form-control" name="desc" id="exampleFormControlTextarea5" rows="3" cols="4" > <?php echo $_SESSION['desc'] ?> </textarea>
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
                                <input class="inpuut" type="time" class="form-control">
                            </div>
                        </label>
                        <label for="fullName">
                            <p class="ppp">إلى: </p>
                            <div class="fromt">
                                <input class="inpuut" type="time" class="form-control">
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
                        <button class="button" type="submit">تحديث</button>
                    </div>
                </div>
            </form>
            <?php require 'clubUpdate.php'; ?>
            <hr class="hhr">
    </section>
    


<?php   require 'footer.php'; ?>