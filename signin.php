<?php




require 'headHtml.php';
//require 'navBarUnsigned.php';
?>

<section>
    <div class="bkgrnd">
        <hr class="hhr">
        <?php
        if (empty($_SESSION['username'])) {
        ?>
            <form action="#" method="POST">

                <div id="mainAarea">
                    <div class="loocation112">
                        <div id="inputArea">

                            <label for="userName">
                                <div id=arText>
                                    <p>اسم المستخدم أو البريد الالكتروني</p>
                                </div>
                            </label>
                            <div class="eemail inpuut">
                                <input class="inpuut" type="text" name="UserName" placeholder="example@example.com" required>
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
                                            <input class="inpuut" name="password" type="password" placeholder="************" id="myInput" required>
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
                        <hr>
                        <div>
                            <button class="button" name="submit" type="submit">تسجيل الدخول</button>
                        </div>


                    <?php
                }
                require 'signInImpl.php';

                    ?>
                    </div>
                </div>
            </form>
    </div>
    <hr class="hhr">
</section>
<?php

require 'footer.php';
?>