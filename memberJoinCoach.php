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
         echo "<script>location.href='newMemberJoinCoach.php?id={$_GET['id']}'</script>"; 
         }





$UPDATE="update members set coach_id = ".$_GET['id']." where account_id=".$_SESSION['account_id'];

$result = mysqli_query($conn, $UPDATE)
        or die("failed to data base".mysqli_error($conn));
 
    $row = mysqli_fetch_array($result);


    echo "<script>location.href='coachProfile.php?id={$_GET['id']}'</script>";
?>