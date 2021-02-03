<?php


// echo "<script>alert('new member join club')</script>";



session_start();
$host = "localhost";
$user = "root";
$passwordHost = "";
$database = "club";


$conn = mysqli_connect($host, $user, $passwordHost, $database);
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}


 
$sql = "insert into members (member_id , account_id , club_id , category_id , period ) values ( (select MAX(m.member_id)+1 from members m) , ".$_SESSION['account_id']." , ".$_GET['id']." , ".$_SESSION['category']." , ".$_SESSION['period']." )" ;
    $result = mysqli_query($conn, $sql)
        or die("failed to data base".mysqli_error($conn));
 
    


    $row = mysqli_fetch_array($result);


    echo "<script>location.href='clubProfile.php?id={$_GET['id']}'</script>";


?>