<?php


session_start();
$host = "localhost";
$user = "root";
$passwordHost = "";
$database = "club";


$conn = mysqli_connect($host, $user, $passwordHost, $database);
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}


 
$sql = "select m.account_id from members m join accounts a on m.account_id=a.account_id where a.account_id =".$_SESSION['account_id'];
    $result = mysqli_query($conn, $sql)
        or die("failed to data base".mysqli_error($conn));
 
    


    if (mysqli_num_rows($result) == 0){
         echo "<script>location.href='newMemberJoinClub.php?id={$_GET['id']}'</script>"; 
         }





$UPDATE="update members set club_id = ".$_GET['id']." , category_id=".$_SESSION['category'].", period=".$_SESSION['period']."   where account_id=".$_SESSION['account_id'];

$result = mysqli_query($conn, $UPDATE)
        or die("failed to data base".mysqli_error($conn));
 
    $row = mysqli_fetch_array($result);


    echo "<script>location.href='clubProfile.php?id={$_GET['id']}'</script>";
?>