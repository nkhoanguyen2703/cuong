
<?php  
	include "../database.php";
	$id="ketoankho";
	$pass = "123456";
	$pass = md5($pass);
	$sdt = "0939457928";
	$dc = "23 Nguyễn Trãi , Ninh Kiều, Cần Thơ";
	$trinh = "Thạc Sĩ";
	$sql = "insert into taikhoan values('$id','$pass','Trần Văn Đông','2018-11-27 00:00:00','$dc',$sdt,'$trinh','KETOANKHO',null)";
	echo $sql;
	$do= mysqli_query($db,$sql);
	if($do) echo "OKAY";
?>