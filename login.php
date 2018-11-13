<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Chuỗi nhà thuốc</title>
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


<body>

<div class="container">


<form action="" method="POST">
  <div class="container">
    <h1>Đăng nhập</h1>
    <p>Hệ thống quản lý chuỗi nhà thuốc</p>
    <hr>

    <label><b>Tài khoản</b></label>
    <input type="text" placeholder="Enter account" name="acc" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

   
    

    <button type="submit" name="btnlogin" >Đăng nhập</button>
  </div>
</form>

<?php  
include "database.php";
session_start();
error_reporting(E_ERROR | E_PARSE); //hide Warning message

if(isset($_POST['btnlogin'])){

    $id=$_POST['acc'];

    $pass=md5($_POST['pass']);
    echo $id."---".$pass."<br>";
    $sql="select count(*) from taikhoan where id='$id' and pass='$pass'";
    $do = mysqli_query($db,$sql);
    $a = mysqli_fetch_array($do);
    $count = $a[0];

    if($count > 0){
        // session_destroy();
        echo "COUNT>0";
        $sql2="select * from taikhoan a join quyentruycap b on a.quyen=b.quyen_ma
        where id='$id' and pass='$pass'";
        $do = mysqli_query($db,$sql2);
    	$quyen = mysqli_fetch_array($do);
    	$quyen = $quyen['quyen_ma'];
        echo $quyen;
        $loc = "admin";
    	switch ($quyen) {
		    case 'ADMIN':
		        $_SESSION['admin'] = $id;
                $loc = "admin";
		        break;
		    case 'KETOANKHO':
		        $_SESSION['ketoankho'] = $id;
            $loc = "ketoankho";
		        break;
		    case 'QUANLYCUAHANG':
		        $_SESSION['quanlycuahang'] = $id;
		        break;
		    case 'QUANLYKHO':
		        $_SESSION['quanlykho'] = $id;
              $loc = "quanlykho";
		        break;
		    default:
		        $_SESSION['quay'] = $id;
		}

        echo "<script>window.location='$loc';</script>";
    }else{
        echo "<br>Tài khoản không tồn tại xx";
    }
}

?>

</div><!--container-->



</body>
</html> 