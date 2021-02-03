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
$checkJoin = "select a.account_id from accounts a join members m on a.account_id = m.account_id join coaches ch on ch.coach_id = m.coach_id  where ch.coach_id =" . $_GET['id'];
$result = mysqli_query($conn, $checkJoin)
    or die("failed to data base" . mysqli_error($conn));

$joinClubMem = -1;
$count = 0;


while ($row = mysqli_fetch_array($result)) {

    if (isset($_SESSION['account_id']))
    if ($_SESSION['account_id'] == $row['account_id']) {
        $joinClubMem = 1;
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
                    <form action="" method="POST">
                        <?php

                        if(!isset($_SESSION['whoseSign'])) { $_SESSION['whoseSign']="v";}
                        switch ($_SESSION['whoseSign']) {
                            case "v":
                        ?>
                                <input type="submit" class="join-btn" value=" الانضمام كمتدرب" formaction="signin.php">
                                <?php
                                break;
                            case "a":
                                if ($joinClubMem == 1) {
                                ?>
                                    <input type="submit" class="join-btnn" value="إلغاء الاشتراك" formaction="memberCancelCoach.php?id=<?php echo $_GET['id'] ?>">
                                <?php
                                } else {
                                ?>
                                    <input type="submit" class="join-btn" value=" الانضمام كمتدرب" formaction="memberJoinCoach.php?id=<?php echo $_GET['id'] ?>">
                        <?php
                                }
                                break;
                                
                            case "ch" :
                                if( $_GET['id']==$_SESSION['coach_id']){ 
                        ?>
                               <a class="join-btn" href="coachEditForm.php">تعديل</a>
                        <?php 
                                }
                                break;
                        }
                        ?>
                    </form>
                </div>

                <?php


                $coachDisplay = "select ch.*,a.* from coaches ch join accounts a on a.account_id=ch.coach_id where ch.coach_id=" . $_GET['id'];


                $result = mysqli_query($conn, $coachDisplay)
                    or die("failed to data base" . mysqli_error($conn));

                $count = 0;
                $row = mysqli_fetch_array($result)


                ?>
                <div class="col-xs-12 col-sm-12 col-md-4" style="float:right">
                    <img class="trainer-img" src="<?php echo ( ($row['PICTURE']=="" )?( ($row['GENDER']=="male")?"user.png":"female_user.png" ):$row['PICTURE']  ) ; ?>" width="250" height="250">
                </div>
                <div style="float:left;" class="col-xs-12 col-sm-12 col-md-8">
                    <h2 class="label">اسم المدرب: <span id="nameCoach" class="trainer-info"><?php echo "{$row['ACCOUNT_USERNAME']}"; ?></span></h2>
                    <h2 class="label"> تاريخ الميلاد: <span id="ageCoach" class="trainer-info"><?php echo "{$row['Date_of_birth']}"; ?></span></h2>
                    <h2 class="label"> الجنس: <span id="ageCoach" class="trainer-info"><?php echo ($row['GENDER']=="male")? "ذكر":"أنثى"; ?></span></h2>
                    <h2 class="label"> التقييم: <span id="rateCoach" class="trainer-info"><?php echo "{$row['RATE']}"; ?></span></h2>
                    <h2 class="label"> طرق التواصل: <span class="trainer-info">
                            <br> <i class="fa fa-envelope"><?php echo "{$row['EMAIL']}"; ?></i>
                            <br><i class="fa fa-snapchat"><?php echo "{$row['ACCOUNT_SNAPCHAT']}"; ?></i>
                            <br><i class="fa fa-twitter"><?php echo "{$row['ACCOUNT_TWITTER']}"; ?></i>
                            <br> <i class="fa fa-instagram"><?php echo "{$row['ACCOUNT_INSTGRAM']}"; ?></i></span></h2>
                </div>
            </div>
            <hr class="hhr">
            <div class="row trainer-details">
                <h1>النادي المشترك به</h1>
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


                    $clubDisplay = "select c.*,a.* from clubs c join coaches ch on ch.club_id=c.club_id join accounts a on a.account_id=c.club_id where ch.coach_id=" . $_GET['id'];


                        $result = mysqli_query($conn, $clubDisplay)
                            or die("failed to data base" . mysqli_error($conn));

                        $count = 1;
                        while ($row = mysqli_fetch_array($result)) {


                            echo "
                                <tr>
                                <th scope=\"row\">{$count}</th>
                                <td> <a class=\"link-decore\" target=\"_self\" href=\"clubProfile.php?id=".$row['CLUB_ID']."\"> {$row['CLUB_NAME']} </a></td>
                                <td> ".substr($row['DESCRIPTION'],0,65)." . . . <span class=\"see more\"><a target=\"_self\" href=\"clubProfile.php?id=".$row['CLUB_ID']." \">المزيد</span></a></td>
                                <td> " . $row['RATE'] . "</td>
                                <td> " . $row['WORK_TIME'] . "</td>
                                <td> " . $row['LOCATION'] . "</td>
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
            if ($_SESSION['whoseSign'] == "ch") {
                if ($_SESSION['coach_id'] == $_GET['id']) {
            ?>

            <div class="row trainer-details">
                <h1>الأعضاء المسجلين لدى المدرب </h1>

                <table class="table">
                    <thead class="thead-light">
                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">الجنس</th>
                                    <th scope="col">تاريخ الميلاد</th>
                                    <th scope="col">اسم النادي</th>
                                    
                            </thead>
                            <tbody>

                                <?php



                                $memberDisplay = "select a.account_username,a.gender,a.Date_of_birth,c.club_name from accounts a join members m on a.account_id=m.account_id  join coaches ch on ch.coach_id=m.coach_id join  clubs c  on  c.club_id=m.club_id where ch.coach_id =" . $_GET['id'];


                                $result = mysqli_query($conn, $memberDisplay)
                                    or die("failed to data base" . mysqli_error($conn));

                                $count = 1;
                                while ($row = mysqli_fetch_array($result)) {


                                    echo "
                                <tr>
                                   <th scope=\"row\">{$count}</th>
                                   <td> " . $row['account_username'] . "</td>
                                   <td> " . ( ($row['gender']=="male")? "ذكر":"أنثى" ) . "</td>
                                   <td> " . $row['Date_of_birth'] . "</td>
                                   <td> " . $row['club_name'] . "</td>
                                   
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

<?php

require 'footer.php';

?>