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


<!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->






<section>
  <!-- gray bar of clubs -->
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
            $sql = "select club_id,club_name,DESCRIPTION,PICTURE,RATE from clubs  ";
          } else {
            $sql = "select club_id,club_name,DESCRIPTION,PICTURE,RATE from clubs order by {$sort} ";
          }

          $result = mysqli_query($conn, $sql)
            or die("failed to data base" . mysqli_error($conn));

          $count = 0;
          ?>



          <form action="sportgym.php" method="POST">
            <select name="sortBy" onchange="submit()">
              <option id="defualt" value="" <?php echo ($_SESSION['sort'] == "") ? " selected" : ""; ?>>ترتيب حسب :</option>
              <option id="orderName" value="club_name" <?php echo ($_SESSION['sort'] == "club_name") ? " selected" : ""; ?>>الاسم( أ - ي )</option>
              <option id="orderNameDesc" value="club_name desc" <?php echo ($_SESSION['sort'] == "club_name desc") ? " selected" : ""; ?>>الاسم( ي - أ)</option>
              <option id="orderRate" value="rate" <?php echo ($_SESSION['sort'] == "rate") ? " selected" : ""; ?>> التقييم(تصاعديا)</option>
              <option id="orderRateDesc" value="rate desc" <?php echo ($_SESSION['sort'] == "rate desc") ? " selected" : ""; ?>>التقييم(تنازليا)</option>
            </select>
            <!-- <button type="submit" value="">ترتيب </button> -->
          </form>
        </div>
      </header>

      <?php



      while ($row = mysqli_fetch_array($result)) {


        echo " 
    
      <div class=\"club-block\">
    
        <img  id=\"myImg" . $count . "\" class=\"club-pictures\" src=\"" . $row['PICTURE'] . "\" alt=\"Fitness Time\" style=\"width:100%;max-width:160px\">

     
        <div id=\"myModal{$count}\" class=\"modal\">
          <span class=\"close{$count}\">&times;</span>
          <img class=\"modal-content\" id=\"img01" . $count . "\">
          <div id=\"caption" . $count . "\"></div>
        </div>

        <div class=\"title\">
          <p><a class=\"link-decore\" target=\"_self\" href=\"clubProfile.php?id=" . $row['club_id'] . "\"> {$row['club_name']} </a></p>
        </div>

        <div>
        <p> التقييم :  {$row['RATE']} </p>
        </div> 

        <div class=\"description\">
          <p> " . substr($row['DESCRIPTION'], 0, 400) . "
            . . . <span class=\"see more\"><a target=\"_self\" href=\"clubProfile.php?id=" . $row['club_id'] . " \">المزيد</span></a></p>

        </div>
      </div>
    

<script>
  
  var modal = document.getElementById(\"myModal" . $count . "\");

 
  var img = document.getElementById(\"myImg" . $count . "\");
  var modalImg = document.getElementById(\"img01" . $count . "\");
  var captionText = document.getElementById(\"caption" . $count . "\");
  img.onclick = function() {
    modal.style.display = \"block\";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  var span = document.getElementsByClassName(\"close" . $count . "\")[0];

  span.onclick = function() {
    modal.style.display = \"none\";
  }
</script>


";
        $count++;
      }

      ?>


    </div>
  </div>
</section>




<?php
require 'footer.php';
?>
<script src='node_modules\jquery\dist\jquery.min.js'></script>
<script src='node_modules\propper\index.js'></script>
<script src='node_modules\bootstrap-v4-rtl\dist\js\bootstrap.min.js'></script>
<script src='js/placeholders.min.js'></script> <!-- polyfill for the HTML5 placeholder attribute -->
<script src='js/main.js'></script> <!-- Resource JavaScript -->













<hr class="hhr">
<!-- Site foooter -->