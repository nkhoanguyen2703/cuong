<div class="row">

  <div class="col-md-3">
  		<h2>Tra cứu mã thuốc</h2>
  		<form action="" method="POST">
	  <div class="form-group">
	    <label>Tên thuốc cần tra:</label>
	    <input type="text" class="form-control" name="tratenthuoc">
	  </div>
	  <button type="submit" class="btn btn-default" name="btnTra">Tra Cứu</button>
	</form>
	<?php  
		if(isset($_POST['btnTra'])){
			$ten = $_POST['tratenthuoc'];
			$sql = "select * from thuoc where t_ten LIKE '%$ten%'";
			$do = mysqli_query($db,$sql);
			while($thuoc = mysqli_fetch_array($do)){
				echo $thuoc['t_ten']."--".$thuoc['t_ma']."<br>";
			}
		}
	?>
  </div>


  <div class="col-md-4">
  <h2>Nhập lô thuốc mới</h2>
	<form action="" method="POST">
	  <div class="form-group">
	    
	    <input type="text" class="form-control" name="mathuoc">
	  </div>
	  <div class="form-group">
	  	<label>Mã thuốc cần nhập:</label>
	  	<input list="thuoc" name="mathuoc" class="form-control">
		  <datalist id="thuoc">
		  	<?php  
		  	$listthuoc = "select * from thuoc";
		  	$x = mysqli_query($db,$listthuoc);
		  	while($t = mysqli_fetch_array($x)){
		  	?>
		    	<option value="<?=$t['t_ma']?>"><?=$t['t_ten']?>
		    <?php  
			}
		    ?>
		  </datalist>
	  </div>
	  <div class="form-group">
	    <label>Ngày sản xuất:</label>
	    <input type="date" class="form-control" name="ngaysanxuat">
	  </div>
	  <div class="form-group">
	    <label>Hạn dùng:</label>
	    <input type="date" class="form-control" name="hansudung">
	  </div>
	  <div class="form-group">
	    <label>Số lượng:</label>
	    <input type="number" class="form-control" name="soluong">
	  </div>
	  <div class="form-group">
	    <label>Đơn giá nhập ( giá /1 đơn vị):</label>
	    <input type="number" class="form-control" name="dongia">
	  </div>
	  <div class="form-group">
	    <label>VAT (%):</label>
	    <input type="number" class="form-control" name="vat">
	  </div>

	  	<div class="form-group">
			  <label for="sel1">Nhà cung cấp:</label>
			  <select class="form-control" name="ncc">
			  	<?php  
			  	$b1 = "select * from nhacungcap";
			  	$b2 = mysqli_query($db,$b1);
			  	while($ncc = mysqli_fetch_array($b2)){
			  	?>
			    	<option value="<?=$ncc['ncc_ma']?>"><?=$ncc['ncc_ten']?></option>
			    <?php  
				}
			    ?>
			  </select>
		</div>

	  <button type="submit" class="btn btn-default" name="btn_themlo">Thêm lô</button>
	</form>

	</div>




	<div class="col-md-5">
  		<h2>Lịch sử nhập</h2>
  		<p>Lịch sử 20 lần nhập gần nhất</p>          
  		<table class="table table-striped">
	    <thead>
	      <tr>
	        <th>Ngày</th>
	        <th>Mã</th>
	        <th>SL</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php  
	    $sql = "select * from lothuoc order by lt_ngaynhap DESC limit 0,20";
	    $do = mysqli_query($db,$sql);
	    while($lo = mysqli_fetch_array($do)){
	    ?>
	      <tr>
	        <td><?=$lo['lt_ngaynhap']?></td>
	        <td><?=$lo['lt_mathuoc']?></td>
	        <td><?=$lo['lt_soluongnhap']?></td>
	      </tr>
	    <?php  
		}
	    ?>  
	    </tbody>
	  </table>
  </div>




</div>

<?php  
	if(isset($_POST['btn_themlo'])){
		$ma = 			$_POST['mathuoc'];
		$ngaysanxuat = $_POST['ngaysanxuat'];
		$handung = 		$_POST['hansudung'];
		$sl = 			$_POST['soluong'];
		$dongia = 		$_POST['dongia'];
		$vat = 			$_POST['vat'];
		$ncc = 			$_POST['ncc'];
		$trangthai = 0;
		$today = date("Y-m-d H:i:s"); 
		$nhanvien = $_SESSION['quanlykho'];
		
		$sql = "insert into lothuoc values('','$ngaysanxuat','$handung',$sl,$dongia,$vat,$trangthai,'$ma','$today',$ncc,'$nhanvien')";
		// echo $sql;
		$do = mysqli_query($db,$sql);
		if($do){
			echo "<script>alert('Đã thêm');window.location='?keyqlk=phieunhap.php';</script>";
		}else{
			echo "<script>alert('Sai mã thuốc');window.location='?keyqlk=phieunhap.php';</script>";
		}
	}
?>



