
<?php

$db = mysqli_connect("localhost", "root", "", "lvcuong");
mysqli_query($db,"SET NAMES 'UTF8'");
if(!$db)
{
    echo "Connect Failed!". mysqli_connect_error($db);
}


function getALL($table,$db){
	$sql = "select * from $table";
	$do = mysqli_query($db,$sql);
	if($do){
		$kq = mysqli_fetch_array($do);
		return $kq;
	}else{
		return false;
	}
}

function getTenByID($nhanvien,$db){
	$sql = "select ten from taikhoan where id='$nhanvien'";
	$do = mysqli_query($db,$sql);
	$x = mysqli_fetch_array($do);
	return $x[0];
}

function getSoLuongConLaiCuaLoThuoc($solo,$db){
	$sql = "select lt_soluongnhap from lothuoc where lt_solo=$solo";
	$do = mysqli_query($db,$sql);
	$tmp = mysqli_fetch_array($do);
	$sl = $tmp[0];

	$sql2 = "select sum(px_soluong) as total FROM phieuxuat where px_solo=$solo";
	$do2 = mysqli_query($db,$sql2);
	$tmp2 = mysqli_fetch_array($do2);
	$sl_daxuatdi = $tmp2[0]; //tổng số lượng đã xuất đi 

	$slconlai = $sl - $sl_daxuatdi;
	return $slconlai;
}

?>
