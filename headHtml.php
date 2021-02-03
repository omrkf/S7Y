 
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="S7Y">
  <meta name="author" content="S7Y">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Tajawal:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="node_modules\bootstrap-v4-rtl\dist\css\bootstrap-rtl.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/jquery-3.3.1.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js">
  <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
  <link rel="stylesheet" href="css/styleSign.css"> <!-- Resource style -->
  <link rel="stylesheet" href="css/demo.css"> <!-- Demo style -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>S7Y</title>
     
</head>

<?php
session_start();
if (empty($_SESSION['username'])) {
    require 'navBarUnsigned.php';
  } else {
    require 'navBarHasSigned.php';
  }
?>
