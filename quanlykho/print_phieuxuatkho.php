<!DOCTYPE html>
<!--
 * HTML-Sheets-of-Paper (https://github.com/delight-im/HTML-Sheets-of-Paper)
 * Copyright (c) delight.im (https://www.delight.im/)
 * Licensed under the MIT License (https://opensource.org/licenses/MIT)
-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Emulating real sheets of paper in web documents (using HTML and CSS)">
		<title>Sheets of Paper</title>
		<link rel="stylesheet" type="text/css" href="css/sheets-of-paper.css">
	</head>

	<style>
	*{
		color: green;
	}


	@media print {
	  body * {
	    visibility: hidden;
	  }
	  #section-to-print, #section-to-print, .document * {
	    visibility: visible;
	  }
	  #section-to-print .document {
	    position: absolute;
	    left: 0;
	    top: 0;
	  }
	}

	</style>

	<?php  
	session_start();
	include "../database.php";
	include "../function.php";
	if(isset($_POST['btn_xuatkho'])){
		$slconlai = $_POST['slconlai'];
		$solo = $_POST['solo'];
		$cuahang_id = $_POST['cuahang'];
		$slxuat = $_POST['slxuat'];
		$today = date("Y-m-d H:i:s");
		$nhanvien = $_SESSION['quanlykho'];
		

		$sqlcuahang = "select * from cuahang where ch_ma=$cuahang_id";
		$do2 = mysqli_query($db,$sqlcuahang);
		$ch= mysqli_fetch_array($do2);
		// echo "<script>alert('ABCD');window.history.go(-2);</script>";

		$sql="insert into phieuxuat values('',$cuahang_id,$solo,$slxuat,'$today','$nhanvien')";
		$do = mysqli_query($db,$sql);
		if(!$do){
			echo "<script>alert('Lỗi khi thực hiện lưu dữ liệu xuất kho');<script>";
		}
		
		// echo '
		// <script type="text/javascript">
		// location.reload();
		// </script>';
		
		// exit();
		
	}
	?>

	
	<body>
	<button onclick="window.print()">In trang này </button>
	<div class="document">
	
		<div class="page" contenteditable="true">

			<CENTER>
				<h2>PHIẾU XUẤT KHO</h2>
				<h4>Đến: Cửa hàng <?=$ch['ch_ten']?></h4>
				<p>Địa chỉ: <?=$ch['ch_diachi']?><br>
				Số điện thoại:	0<?=$ch['ch_sdt']?>	
				</p>
				
			</CENTER>




			<table style="border: 1px solid green; width:100%;">
			<thead>
				<td>Mã thuốc</td>
				<td>Tên thuốc</td>
				<td>Số lô </td>
				<td>Số lượng</td>
				<td>Thành tiền</td>
				<td>VAT (%)</td>
			</thead>
			<tbody>
			<tr>
				<?php  
				$a1 = "select * from lothuoc l join thuoc t on l.lt_mathuoc=t.t_ma 
				where l.lt_solo=$solo";
				$a2 = mysqli_query($db,$a1);
				while($a3 = mysqli_fetch_array($a2)){
				?>

				<td><?=$a3['t_ma']?></td>
				<td><?=$a3['t_ten']?></td>
				<td><?=$a3['lt_solo']?></td>
				<td><?=$slxuat?></td>
				<td><?php echo $slxuat*$a3['lt_dongianhap'] ?></td>
				<td><?=$a3['lt_vat']?></td>

				<?php  
				}
				?>
			</tr>
			
			</tbody>
			</table>
			
			

			<hr>

			<?=$today?><br>
			NHÂN VIÊN QUẢN LÝ KHO
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<?php  
			$tennhanvien =getTenByID($nhanvien,$db);
			echo $tennhanvien;
			?>
		</div>
		<!-- <div class="page" contenteditable="true">
			<p>Second <code>.page</code> element</p>
			ent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
		</div> -->

		</div>
	</body>
</html>
