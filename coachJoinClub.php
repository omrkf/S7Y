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

$UPDATE="update coaches set club_id = ".$_GET['id']." where coach_id=".$_SESSION['coach_id'];

$result = mysqli_query($conn, $UPDATE)
        or die("failed to data base".mysqli_error($conn));
 
    $row = mysqli_fetch_array($result);


    echo "<script>location.href='clubProfile.php?id={$_GET['id']}'</script>";

?>


