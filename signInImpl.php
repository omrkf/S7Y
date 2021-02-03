<?php

if(!isset($_SESSION))
session_start();

$host = "localhost";
$user = "root";
$passwordHost = "";
$database = "club";


$conn = mysqli_connect($host, $user, $passwordHost, $database);
if (!$conn) {
  die("connection failed" . mysqli_connect_error());
}

if(isset($_POST['UserName']) || !empty($_SESSION['username'])){
    
if(empty($_SESSION['username'])){
    $userName = $_POST['UserName']; 
} else{
    $userName=$_SESSION['username'];
}   

$_SESSION['email'] = "";
if(empty($_SESSION['password'])){
    $password = $_POST['password'];
}else{
    $password=$_SESSION['password'] ;
}
$_SESSION['dateBirth'] = "";
$_SESSION['gender'] = "";
 $_SESSION['whoseSign']="v";
 $_SESSION['twt'] = "";
    $_SESSION['insta'] ="";
    $_SESSION['snap'] = "";

 $_SESSION['club_id']=0;
$_SESSION['coach_id']=0;



}

if (!empty($userName)) {
    $sql = "select * from accounts where (account_username='$userName' and password=$password) Or (email='$userName' and password=$password) ;";
    $result = mysqli_query($conn, $sql)
        or die("failed to data base".mysqli_error($conn));
 
    $row = mysqli_fetch_array($result);


    

    $_SESSION['account_id'] = $row['ACCOUNT_ID'];
    $_SESSION['fullname'] = $row['ACCOUNT_FULLNAME'];
    $_SESSION['username'] = $row['ACCOUNT_USERNAME'];
    $_SESSION['email'] = $row['EMAIL'];
    $_SESSION['password'] = $row['PASSWORD'];
    $_SESSION['dateBirth'] = $row['Date_of_birth'];
    $_SESSION['gender'] = $row['GENDER'];
    $_SESSION['twt'] = $row['ACCOUNT_TWITTER'];
    $_SESSION['insta'] = $row['ACCOUNT_INSTGRAM'];
    $_SESSION['snap'] = $row['ACCOUNT_SNAPCHAT'];
    $_SESSION['whoseSign'] = "a";


    //club check
    $clubCheck="select club_id,DESCRIPTION from clubs ";
    $resultClub = mysqli_query($conn, $clubCheck)
        or die("failed to data base".mysqli_error($conn));
 
    while($rowClub = mysqli_fetch_array($resultClub)){
        if($rowClub['club_id']==$_SESSION['account_id']){
            $_SESSION['club_id']=$_SESSION['account_id'];
            $_SESSION['desc']=$rowClub['DESCRIPTION'];
            
            

            $_SESSION['whoseSign']="c";
            //if need any information of coach

        break;
        }
    }
    
    //chech coach
    $coachCheck="select coach_id,picture from coaches ";
    $resultCoach = mysqli_query($conn, $coachCheck)
        or die("failed to data base".mysqli_error($conn));
 
    while($rowCoach = mysqli_fetch_array($resultCoach)){
        if($rowCoach['coach_id']==$row['ACCOUNT_ID']){
            $_SESSION['coach_id']=$row['ACCOUNT_ID'];
            $_SESSION['picture']=$row['PICTURE'];
            $_SESSION['whoseSign']="ch";
            // echo "<script>alert('{$_SESSION['coach_id']}')</script>";

            //if need any information of coach

        break;
        }
    }

    // echo "<script>alert('{$_SESSION['whoseSign'] }clubid{$_SESSION['club_id']}  coachid{$_SESSION['coach_id']}  ')</script>";


    if (mysqli_num_rows($result) == 1) {
        if($_SESSION['whoseSign']=="c"){
            echo " <script>alert('welcome   {$_SESSION['username']} club ')</script>";
        }
      
        else if($_SESSION['whoseSign']=="ch"){
             echo " <script>alert('welcome  Coach {$_SESSION['username']}  ')</script>";
            }
      
        else{
            echo " <script>alert('welcome  {$_SESSION['username']}  ')</script>";
        }
        echo "<script>location.href='HOME.php'</script>";
    } else {
        echo "<script>alert('invalid username or password')</script>";

        echo "<script>location.href='#'</script>";
    }
}
