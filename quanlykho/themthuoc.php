<div class="row">

  <div class="col-md-3">
  		
  </div>


  <div class="col-md-6">
  		<h2>Thêm thuốc mới vào hệ thống</h2>
  		<form method="POST">
		  <div class="form-group">
		    <label>Mã thuốc:</label>
		    <input type="text" class="form-control" name="mathuoc">
		  </div>

		   <div class="form-group">
		    <label>Tên thuốc:</label>
		    <input type="text" class="form-control" name="tenthuoc">
		  </div>

		  <div class="form-group">
		    <label>Giá bản lẻ:</label>
		    <input type="text" class="form-control" name="giabanle">
		  </div>

		  <div class="form-group">
			  <label for="sel1">Đơn vị tính nhỏ nhất ( dùng trong bán lẻ ):</label>
			  <select class="form-control" name="donvitinh">
			  	<?php  
			  	$a1 = "select * from donvitinh";
			  	$a2 = mysqli_query($db,$a1);
			  	while($dvt = mysqli_fetch_array($a2)){
			  	?>
			    <option value="<?=$dvt['dvt_ma']?>"><?=$dvt['dvt_ten']?></option>
			    <?php  
				}
			    ?>
			  </select>
			</div>

			<div class="form-group">
			  <label for="sel1">Nhóm thuốc:</label>
			  <select class="form-control" name="nhomthuoc">
			  	<?php  
			  	$b1 = "select * from nhomthuoc";
			  	$b2 = mysqli_query($db,$b1);
			  	while($nhom = mysqli_fetch_array($b2)){
			  	?>
			    	<option value="<?=$nhom['nt_ma']?>"><?=$nhom['nt_ten']?></option>
			    <?php  
				}
			    ?>
			  </select>
			</div>

			<div class="form-group">
			  <label>Nhà sản xuất:</label>
			  <select class="form-control" name="nsx">
			  	<?php  
			  	$c1 = "select * from nhasanxuat";
			  	$c2 = mysqli_query($db,$c1);
			  	while($nsx = mysqli_fetch_array($c2)){
			  	?>
			    	<option value="<?=$nsx['nsx_ma']?>"><?=$nsx['nsx_ten']?></option>
			    <?php  
				}
			    ?>
			  </select>
			</div>

			<div class="form-group">
			  <label>Cách bảo quản:</label>
			  <select class="form-control" name="cachbaoquan">
			  	<?php  
			  	$d1 = "select * from cachbaoquan";
			  	$d2 = mysqli_query($db,$d1);
			  	while($cbq = mysqli_fetch_array($d2)){
			  	?>
			    	<option value="<?=$cbq['cbq_ma']?>"><?=$cbq['cbq_ten']?></option>
			    <?php  
				}
			    ?>
			  </select>
			</div>

			<div class="form-group">
			  <label>Dạng thuốc:</label>
			  <select class="form-control" name="dangthuoc">
			  	<?php  
			  	$e1 = "select * from dangthuoc";
			  	$e2 = mysqli_query($db,$e1);
			  	while($d = mysqli_fetch_array($e2)){
			  	?>
			    	<option value="<?=$d['dt_ma']?>"><?=$d['dt_ten']?></option>
			    <?php  
				}
			    ?>
			  </select>
			</div>

			<div class="form-group">
			  <label>Gốc thuốc:</label>
			  <select class="form-control" name="gocthuoc">
			  	<?php  
			  	$f1 = "select * from gocthuoc";
			  	$f2 = mysqli_query($db,$f1);
			  	while($g = mysqli_fetch_array($f2)){
			  	?>
			    	<option value="<?=$g['gt_ma']?>"><?=$g['gt_ten']?></option>
			    <?php  
				}
			    ?>
			  </select>
			</div>

		 
		  <button type="submit" class="btn btn-default" name="themthuoc">Thêm thuốc mới</button>
		</form>
  </div>

  <div class="col-md-3">
  		
  </div>
  
</div>

<?php  
if(isset($_POST['themthuoc'])){
	$ma = $_POST['mathuoc'];
	$ten = $_POST['tenthuoc'];
	$gia = $_POST['giabanle'];
	$dvt = $_POST['donvitinh'];
	$nhom = $_POST['nhomthuoc'];
	$nsx = $_POST['nsx'];
	$cachbaoquan = $_POST['cachbaoquan'];
	$dangthuoc = $_POST['dangthuoc'];
	$gocthuoc = $_POST['gocthuoc'];

	

	$sql = "insert into thuoc values('$ma','$ten',$dvt,$nhom,$nsx,$cachbaoquan,$dangthuoc,$gocthuoc)";
	$do = mysqli_query($db,$sql);
	if($do){
		//insert gia' vao` bang dongia
		$today = date("Y-m-d H:i:s"); 
		$sql2 = "insert into dongia values('','$today',$gia,'$ma')";
		$do2 = mysqli_query($db,$sql2);
		if($do2){
			echo "<script>alert('Đã thêm');window.location='?keyqlk=themthuoc.php';</script>";
		}else{
			echo "<script>alert('Chưa thêm được do lỗi đơn giá');window.location='?keyqlk=themthuoc.php';</script>";
		}
	}
}
?>