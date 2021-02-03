<?php

require 'headHtml.php';



$host = "localhost";
$user = "root";
$passwordHost = "";
$database = "club";




$conn = mysqli_connect($host, $user, $passwordHost, $database);
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}




//check joined in club
$checkJoin = "select c.club_id,ch.coach_id from  members m join accounts a on a.account_id = m.account_id join clubs c on c.club_id = m.club_id join coaches ch on ch.club_id=c.club_id  where m.account_id =" . $_GET['id'];
$result = mysqli_query($conn, $checkJoin)
    or die("failed to data base" . mysqli_error($conn));

$joinClubC = -1;
$joinClubCh = -1;
$count = 0;


$row = mysqli_fetch_array($result);

if ($_SESSION['club_id'] == $row['club_id']) {
    $joinClubC = 1;
}

$result = mysqli_query($conn, $checkJoin)
    or die("failed to data base" . mysqli_error($conn));
$row = mysqli_fetch_array($result);

if ($_SESSION['coach_id'] == $row['coach_id']) {
    $joinClubCh = 1;
}

$checkJoin = "select a.account_id from accounts a join members m on a.account_id = m.account_id ";
$result = mysqli_query($conn, $checkJoin)
    or die("failed to data base" . mysqli_error($conn));

$isMem = -1;
$count = 0;


while ($row = mysqli_fetch_array($result)) {

    if ($_SESSION['account_id'] == $row['account_id']) {
        $isMem = 1;
        break;
    }
}





?>
<section>
    <div class="bkgrnd">
        <hr class="hhr">
        <div class="contain">
            <hr class="hhr">
            <div class="row trainer-details">
                <div class="col-xs-12 col-sm-12 col-md-12 join">
                    <a class="join-btn" href="memberEdit.php">تعديل</a>
                </div>
                <?php




                if ($isMem == 1) {
                    $memDisplay = "select a.*,cat.category_name,cc.period,cc.price from  accounts a join members m on a.account_id=m.account_id join clubs c on c.club_id=m.club_id join categories cat on m.category_id=cat.category_id join club_category cc  on m.period=cc.period and m.category_id=cc.category_id and cc.club_id=m.club_id where a.account_id=" . $_GET['id'];
                } else {
                    $memDisplay = "select a.* from  accounts a  where account_id=" . $_GET['id'];
                }


                $result = mysqli_query($conn, $memDisplay)
                    or die("failed to data base" . mysqli_error($conn));

                $count = 0;
                $row = mysqli_fetch_array($result)




                ?>
                <div class="col-xs-12 col-sm-12 col-md-4" style="float:right">
                    <img class="trainer-img" src="img/image3.png" width="250" height="250">
                </div>
                <div style="float:left;" class="col-xs-12 col-sm-12 col-md-8">
                    <h2 class="label">الاسم : <span class="trainer-info"><?php echo "{$row['ACCOUNT_FULLNAME']}"; ?></span></h2>
                    <h2 class="label">اسم المستخدم : <span class="trainer-info"><?php echo "{$row['ACCOUNT_USERNAME']}"; ?></span></h2>
                    <h2 class="label">الجنس: <span class="trainer-info"><?php echo ($row['GENDER'] == "male") ? "ذكر" : "أنثى"; ?> </span></h2>
                    <h2 class="label">تاريخ الميلاد: <span class="trainer-info"><?php echo "{$row['Date_of_birth']}"; ?> </span></h2>
                    <?php
                    if ($isMem == 1) {
                    ?>
                        <h2 class="label">الفئة: <span class="trainer-info"><?php echo "{$row['category_name']}"; ?> </span></h2>
                        <h2 class="label">المدة: <span class="trainer-info"><?php echo "{$row['period']}"; ?> شهر / شهور </span></h2>
                        <h2 class="label">السعر: <span class="trainer-info"><?php echo "{$_SESSION['price']}"; ?> SAR </span></h2>



                    <?php
                    }
                    ?>
                    <h2 class="label"> طرق التواصل: <span class="trainer-info">
                            <br> <i class="fa fa-envelope"><?php echo "{$row['EMAIL']}"; ?></i>
                            <br><i class="fa fa-snapchat"><?php echo "{$row['ACCOUNT_SNAPCHAT']}"; ?></i>
                            <br><i class="fa fa-twitter"><?php echo "{$row['ACCOUNT_TWITTER']}"; ?></i>
                            <br> <i class="fa fa-instagram"><?php echo "{$row['ACCOUNT_INSTGRAM']}"; ?></i></span></h2>
                    </h2>
                </div>
            </div>
            <hr class="hhr">
            <div class="row trainer-details">
                <h1>المدرب</h1>
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


                        $coachDisplay = "select ch.*,a.* from coaches ch join members m on ch.coach_id=m.coach_id join accounts a on a.ACCOUNT_ID=ch.COACH_ID where m.account_id=" . $_GET['id'];


                        $result = mysqli_query($conn, $coachDisplay)
                            or die("failed to data base" . mysqli_error($conn));

                        $count = 1;
                        while ($row = mysqli_fetch_array($result)) {


                            echo "
<tr>
    <th scope=\"row\">{$count}</th>
    <td> <a href=\"coachProfile.php?id={$row['COACH_ID']}\" class=\"displaycoachinf\">{$row['ACCOUNT_USERNAME']}</a></td>
    <td> " . (($row['GENDER'] == "male") ? "ذكر" : "أنثى") . "</td>
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
            <div class="row trainer-details">
                <h1>النادي</h1>

                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">اسم النادي</th>
                            <th scope="col">الوصف</th>
                            <th scope="col"> التقييم</th>
                            <th scope="col">أوقات العمل </th>
                            <th scope="col">الموقع</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        
                        $clubDisplay = "select c.*,a.* from clubs c join members m on m.club_id=c.club_id join accounts a on a.account_id=c.club_id where m.account_id=" . $_GET['id'];


                        $result = mysqli_query($conn, $clubDisplay)
                            or die("failed to data base" . mysqli_error($conn));

                        $count = 1;
                        $row = mysqli_fetch_array($result);
                        if (mysqli_num_rows($result) != 0){

                        echo "
                                <tr>
                                <th scope=\"row\">{$count}</th>
                                <td> <a class=\"link-decore\" target=\"_self\" href=\"clubProfile.php?id=" . $row['CLUB_ID'] . "\"> {$row['CLUB_NAME']} </a></td>
                                <td> " . substr($row['DESCRIPTION'], 0, 65) . " . . . <span class=\"see more\"><a target=\"_self\" href=\"clubProfile.php?id=" . $row['CLUB_ID'] . " \">المزيد</span></a></td>
                                <td> " . $row['RATE'] . "</td>
                                <td> " . $row['WORK_TIME'] . "</td>
                                <td> " . $row['LOCATION'] . "</td>
                                </tr>

                                ";
                        }


                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</section>
<hr class="hhr">
<?php
require 'footer.php';
?>