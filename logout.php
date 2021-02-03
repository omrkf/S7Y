<?php

session_start();
$_SESSION['username']=""; 
$_SESSION['whoseSign']="v";
$_SESSION['club_id']=0;
$_SESSION['coach_id']=0;
session_destroy();


echo "<script>location.href='HOME.php'</script>";
?>