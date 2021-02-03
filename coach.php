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

if (!empty($_GET['id']))
    if ($_GET['id'] == 1)
        $_SESSION['sort'] = "";


?>
<section>
    <div class="bkgrnd">
        <hr class="hhr">
        <div class="contain">
            <header>
                <div class="filter">

                    <?php

                    if (!empty($_POST['sortBy'])) {
                        $sort = $_POST['sortBy'];
                    } else {
                        $sort = "";
                    }
                    $_SESSION['sort'] = $sort;
                    if ($sort == "") {
                        $sql = "select ch.coach_id,a.account_username,a.gender,ch.PICTURE,ch.RATE from coaches ch join accounts a on ch.coach_id=a.account_id  ";
                    } else {
                        $sql = "select ch.coach_id,a.account_username,a.gender,ch.PICTURE,ch.RATE from coaches ch join accounts a on ch.coach_id=a.account_id order by {$sort} ";
                    }

                    $result = mysqli_query($conn, $sql)
                        or die("failed to data base" . mysqli_error($conn));

                    $count = 0;
                    ?>

                    <form action="coach.php" method="POST">
                        <select name="sortBy" onchange="submit()">
                            <option id="defualt" value="" <?php echo ($_SESSION['sort'] == "") ? " selected" : ""; ?>>ترتيب حسب :</option>
                            <option id="orderName" value="a.account_username" <?php echo ($_SESSION['sort'] == "a.account_username") ? " selected" : ""; ?>>الاسم(تصاعديا)</option>
                            <option id="orderNameDesc" value="a.account_username desc" <?php echo ($_SESSION['sort'] == "a.account_username desc") ? " selected" : ""; ?>>الاسم(تنازليا)</option>
                            <option id="orderRate" value="rate" <?php echo ($_SESSION['sort'] == "rate") ? " selected" : ""; ?>> التقييم(تصاعديا)</option>
                            <option id="orderRateDesc" value="rate desc" <?php echo ($_SESSION['sort'] == "rate desc") ? " selected" : ""; ?>>التقييم(تنازليا)</option>
                        </select>
                        <!-- <button type="submit" value="">ترتيب </button> -->
                    </form>
                </div>
            </header>

            <div class="list">
                <?php


                while ($row = mysqli_fetch_array($result)) {

                    echo "
                
                    



                        <article class=\"list--item\">
                            <figure>
                                <a href=\"coachProfile.php?id={$row['coach_id']}\"><img id=\"myyImg" . $count . "\" src=\"" . (($row['PICTURE'] == "") ? (($row['gender'] == "male") ? "user.png" : "female_user.png") : $row['PICTURE']) . "\" alt=\"\"></a>
                                <header>
                                    <div class=\"floater\">
                                        <a href=\"HOME.php\"><img src=\"img/s7y-logo-light50px.png\" alt=\"\"></a>
                                    </div>
                                    <a href=\"coachProfile.php?id={$row['coach_id']}\" class=\"displaycoachinf\">{$row['account_username']}</a>
                                </header>
                                <figcaption>
                                    تقييم المدرب: <span>{$row['RATE']}</span>
                                </figcaption>
                            </figure>
                        </article>
                   
              ";
                }
                ?>
            </div>
        </div>
    </div>


</section>

<?php

require 'footer.php';
?>