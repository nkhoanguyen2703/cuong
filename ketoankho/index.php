<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Kế toán kho</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--imported by me-->
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <style>
    *{
      margin: 0px; padding: 0px;
    }
  </style>
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">




<!--NAVBAR-->
<?php 
error_reporting(E_ERROR | E_PARSE); //hide Warning message
//  include "navbar.php"; 
include "../database.php"; 
include "../function.php"; //function chung
session_start(); 

?> 




<div class="container">


<?php
error_reporting(E_ERROR | E_PARSE); //hide Warning message
include "navbar.php";

if(isset($_SESSION['ketoankho'])){
    $file="homepage.php";
    if(isset($_GET['keyktk'])){
        $file=$_GET['keyktk'];
    }
    include $file;
    $ketoankho = $_SESSION['ketoankho']; //for easy to use
}else{
    echo "<script>window.location='../login.php';</script>";
}






if(isset($_GET['signout'])){
    unset($_SESSION['ketoankho']);
    echo "<script>window.location='index.php';</script>";
}

?>






</div><!--container-->

<div class="panel panel-default" style="background-color: green;color:white;margin:10px;">
  <div class="panel-body">Hệ thống nhà thuốc C-Pharmacy</div>
</div>

</body>
</html>
