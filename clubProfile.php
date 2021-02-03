<?php


$host = "localhost";
$user = "root";
$passwordHost = "";
$database = "club";




$conn = mysqli_connect($host, $user, $passwordHost, $database);
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}

require 'headHtml.php';


//check joined in club
$checkJoin = "select a.account_id from accounts a join members m on a.account_id = m.account_id join clubs c on c.club_id = m.club_id   where c.club_id =" . $_GET['id'];
$result = mysqli_query($conn, $checkJoin)
    or die("failed to data base" . mysqli_error($conn));
$joinClubMem = -1;
$joinClubCh = -1;
$count = 0;


while ($row = mysqli_fetch_array($result)) {


    if (!empty($_SESSION['account_id']))
        if ($_SESSION['account_id'] == $row['account_id']) {
            $joinClubMem = 1;
            break;
        }
}
$checkJoin = "select ch.coach_id from accounts a  join clubs c on c.club_id = a.account_id join coaches ch on ch.club_id=c.club_id  where c.club_id =" . $_GET['id'];
$result = mysqli_query($conn, $checkJoin)
    or die("failed to data base" . mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {

    if (isset($_SESSION['coach_id']))
        if ($_SESSION['coach_id'] == $row['coach_id']) {
            $joinClubCh = 1;
            break;
        }
}





?>

</div>
<section>
    <div class="bkgrnd">
        <hr class="hhr">
        <div class="contain">
            <hr class="hhr">
            <div class="row trainer-details">
                <div class="col-xs-12 col-sm-12 col-md-12 join">
                    <form action="#" method="POST">
                        <?php

                        if (!isset($_SESSION['whoseSign'])) {
                            $_SESSION['whoseSign'] = "v";
                        }

                        switch ($_SESSION['whoseSign']) {
                            case "v":
                        ?>
                                <input type="submit" class="join-btn" value=" الانضمام كمتدرب" formaction="signin.php">
                                <input type="submit" class="join-btn" value="الانضمام كمدرب" formaction="signin.php">
                                <?php
                                break;
                            case "a":
                                if ($joinClubMem == 1) {
                                ?>
                                    <input type="submit" class="join-btnn" value="إلغاء الاشتراك" formaction="memberCancelClub.php?id=<?php echo $_GET['id'] ?>" >
                                <?php
                                } else {
                                ?>
                                    <input type="button" class="join-btn" id="myBttn" value="الانضمام كمتدرب"  >
                                    <div id="mymodaaal" class="modaaal">
                                        <div class="modaaal-content">
                                            <span class="cloose">&times;</span>
                                            <p class="ppppp">الانضمام كمتدرب</p>
                                            <br>
                                            <?php




                                            if (isset($_POST['category'])) {
                                                $checkJoin = "select  price , category_id , period   from club_category   where category_id={$_POST['category']} and period = {$_POST['period']} and club_id =" . $_GET['id'];
                                                $result = mysqli_query($conn, $checkJoin)
                                                    or die("failed to data base" . mysqli_error($conn));

                                                $count = 0;
                                                $row = mysqli_fetch_array($result);
                                                $_SESSION['category']=$row['category_id'];
                                                $_SESSION['period']=$row['period'];
                                            }






                                            ?>


                                            <form id="getPrice" action="#" method="POST">
                                                <div class="cntre">
                                                    <p class="tittle">مدة الاشتراك</p>
                                                    <br>
                                                    <?php 
                                                    if (empty($_POST['period']))
                                                        $_POST['period'] = 1;
                                                    ?>
                                                    <select class="slct" name="period" id="period" onchange='submit();'>
                                                        <option value="1" <?php echo ($_POST['period'] == 1) ? "selected" : ""; ?>>شهر</option>
                                                        <option value="3" <?php echo ($_POST['period'] == 3) ? "selected" : ""; ?>>ثلاث شهور</option>
                                                        <option value="6" <?php echo ($_POST['period'] == 6) ? "selected" : ""; ?>>ست شهور</option>
                                                        <option value="12" <?php echo ($_POST['period'] == 12) ? "selected" : ""; ?>>سنة</option>
                                                    </select>
                                                    <br>
                                                    <br>
                                                    <p class="tittle">فئة الاشتراك</p>
                                                    <br>
                                                    <?php if (empty($_POST['category']))
                                                        $_POST['category'] = 1;
                                                    ?>
                                                    <select class="slct" name="category" id="category" onchange='submit();'>
                                                        <option value="1" <?php echo ($_POST['category'] == 1) ? "selected" : ""; ?>>ستاندر</option>
                                                        <option value="2" <?php echo ($_POST['category'] == 2) ? "selected" : ""; ?>>ليدي</option>
                                                        <option value="3" <?php echo ($_POST['category'] == 3) ? "selected" : ""; ?>>برو</option>
                                                    </select>
                                                    <br>
                                                    <br>
                                                    <p class="tittle">كود الخصم</p>
                                                    <br>
                                                    <form action="#" method="POST">
                                                        <input class="coppon" id="code" type="text" name="code">
                                                        <br>
                                                        <button id="discount" type="submit" class="button">انقر هنا لتطبيق كودالخصم</button>
                                                        <br>
                                                    </form>
                                                    <br>
                                                    <p class="tittle">سعر الاشتراك</p>
                                                    <br>
                                                    <p class="pricce">قبل: <span id="priceBefore"> <?php echo "{$row['price']}" ?> </span> SAR</p>
                                                    <br>
                                                    <?php
                                                    $newprice="";
                                                    if(empty($_POST['code'])) { $_POST['code']="";}
                                                    if ($_POST['code'] == 'hhh' || $_POST['code'] == 's7y' || $_POST['code'] == 'sms' ||$_POST['code'] == 'khan' ) {

                                                        $newprice = ((int) $row['price']);
                                                        $newprice = $newprice * 0.75;
                                                        $_SESSION['price']=$newprice;
                                                    }else{
                                                        $newprice = ((int) $row['price']);
                                                        $_SESSION['price']=$newprice;
                                                    }
                                                    ?>

                                                    <p class="pricce">بعد: <span id="priceAfter"> <?php echo $newprice ?> </span> SAR</p>
                                                    <button class="buttton" type="submit" formaction="memberJoinClub.php?id=<?php echo $_GET['id'] ?>" >انضم</button>
                                                </div>
                                            </form>


                                        </div>
                                    </div>
                                <?php
                                }
                                break;
                            case "ch":
                                if ($joinClubCh == 1) {
                                ?>
                                    <input type="submit" class="join-btnn" value="إلغاء الاشتراك" formaction="coachCancel.php?id=<?php echo $_GET['id'] ?>">
                                <?php
                                } else {
                                ?>
                                    
                                    <input type="submit" class="join-btn" value="الانضمام كمدرب" formaction="coachJoinClub.php?id=<?php echo $_GET['id'] ?>">
                                <?php
                                }
                                break;
                            case "c":
                                if ($_GET['id'] == $_SESSION['club_id']) {
                                ?>
                                    <a class="join-btn" href="clubEditForm.php">تعديل</a>
                        <?php
                                }
                        }
                        ?>
                    </form>
                </div>

                <?php

                if (!empty($row['price'])) {

                ?>
                    <script>
                        var x = document.getElementById("mymodaaal");
                        x.style.display = "block";
                    </script>
                <?php
                }



                $clubDisplay = "select c.*,a.* from clubs c join accounts a on a.account_id=c.club_id where c.club_id=" . $_GET['id'];


                $result = mysqli_query($conn, $clubDisplay)
                    or die("failed to data base" . mysqli_error($conn));

                $count = 0;
                $row = mysqli_fetch_array($result)




                ?>


                <div class="col-xs-12 col-sm-12 col-md-4" style="float:right">
                    <img class="trainer-img" src="<?php echo "{$row['PICTURE']}"; ?>" width="250" height="250">
                </div>

                <div style="float:left;" class="col-xs-12 col-sm-12 col-md-8">
                    <h2 class="label">اسم النادي: <span class="trainer-info"><?php echo "{$row['CLUB_NAME']}"; ?> </span></h2>
                    <h2 class="label"> نبذة عن النادي: <span class="trainer-info"><?php echo "{$row['DESCRIPTION']}"; ?> </span></h2>
                    <h2 class="label"> التقييم: <span class="trainer-info"><?php echo "{$row['RATE']}"; ?></span></h2>
                    <h2 class="label"> أوقات العمل: <span class="trainer-info"><?php echo "{$row['WORK_TIME']}"; ?></span></h2>
                    <h2 class="label"> طرق التواصل: <span class="trainer-info">
                            <br> <i class="fa fa-envelope"><?php echo "{$row['EMAIL']}"; ?></i>
                            <br><i class="fa fa-snapchat"><?php echo "{$row['ACCOUNT_SNAPCHAT']}"; ?></i>
                            <br><i class="fa fa-twitter"><?php echo "{$row['ACCOUNT_TWITTER']}"; ?></i>
                            <br> <i class="fa fa-instagram"><?php echo "{$row['ACCOUNT_INSTGRAM']}"; ?></i></span></h2>
                </div>
            </div>
            <hr class="hhr">
            <div class="row trainer-details">
                <h1>المدربون فالنادي</h1>

                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">اسم المدرب</th>
                            <th scope="col">الجنس</th>
                            <th scope="col">تاريخ الميلاد</th>
                            <th scope="col"> التقييم</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php


                        $coachDisplay = "select ch.*,a.* from coaches ch join clubs c on ch.club_id=c.club_id join accounts a on a.ACCOUNT_ID=ch.COACH_ID where c.club_id=" . $_GET['id'];


                        $result = mysqli_query($conn, $coachDisplay)
                            or die("failed to data base" . mysqli_error($conn));

                        $count = 1;
                        while ($row = mysqli_fetch_array($result)) {


                            echo "
                        <tr>
                            <th scope=\"row\">{$count}</th>
                            <td> <a href=\"coachProfile.php?id={$row['COACH_ID']}\" class=\"displaycoachinf\">{$row['ACCOUNT_USERNAME']}</a></td>
                            <td> " . $row['GENDER'] . "</td>
                            <td> " . $row['Date_of_birth'] . "</td>
                            <td> " . $row['RATE'] . "</td>
                        </tr>

                        ";

                            $count++;
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            <hr>
            <?php
            if ($_SESSION['whoseSign'] == "c") {
                if ($_SESSION['club_id'] == $_GET['id']) {
            ?>
                    <div class="row trainer-details">
                        <h1>الأعضاء المسجلين لدى النادي </h1>

                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">الجنس</th>
                                    <th scope="col">تاريخ الميلاد</th>
                                    <th scope="col">المدة (بالشهر)</th>
                                    <th scope="col">الفئة</th>
                                    <th scope="col">السعر</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php



                                $memberDisplay = "select a.account_username,a.gender,a.Date_of_birth,cat.category_name,cc.period,cc.price from accounts a join members m on a.account_id=m.account_id  join clubs c on c.club_id=m.club_id join categories cat on m.category_id=cat.category_id join club_category cc  on m.period=cc.period and m.category_id=cc.category_id and cc.club_id=m.club_id where c.club_id =" . $_GET['id'];


                                $result = mysqli_query($conn, $memberDisplay)
                                    or die("failed to data base" . mysqli_error($conn));

                                $count = 1;
                                while ($row = mysqli_fetch_array($result)) {


                                    echo "
                                <tr>
                                   <th scope=\"row\">{$count}</th>
                                   <td> " . $row['account_username'] . "</td>
                                   <td> " . $row['gender'] . "</td>
                                   <td> " . $row['Date_of_birth'] . "</td>
                                   <td> " . $row['period'] . "</td>
                                   <td> " . $row['category_name'] . "</td>
                                   <td> " . $_SESSION['price'] . "</td>
                                </tr>

                            ";

                                    $count++;
                                }
                                ?>



                            </tbody>
                        </table>
                    </div>
            <?php
                } //check same club
            } //check club acces
            ?>

        </div>

    </div>
</section>
<script>
    // Get the modaaal
    var modaaal = document.getElementById("mymodaaal");

    // Get the button that opens the modaaal
    var btn = document.getElementById("myBttn");

    // Get the <span> element that closes the modaaal
    var span = document.getElementsByClassName("cloose")[0];

    // When the user clicks on the button, open the modaaal
    btn.onclick = function() {
        modaaal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modaaal
    span.onclick = function() {
        modaaal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modaaal, close it
    window.onclick = function(event) {
        if (event.target == modaaal) {
            modaaal.style.display = "none";
        }
    }
</script>
<script>
    // var per=document.getElementById('period');
    // var vPer=per.options[per.selectedIndex].value;

    // var cate=document.getElementById('category');
    // var vCate=cate.options[cate.selectedIndex].value;

    // per.onchange = function(){

    //     for($i=0;$i<12;$i++){

    //         if(   echo $matrix[$i]['category']  == vCate     )

    //     }

    // }
</script>

<hr class="hhr">
<?php

require 'footer.php';

?>