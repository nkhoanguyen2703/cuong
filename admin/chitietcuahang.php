<?php  
	if(isset($_GET['ch'])){
		$ch = $_GET['ch'];
		$sql = "select * from cuahang where ch_ma='$ch'";
		$do = mysqli_query($db,$sql);
		$c = mysqli_fetch_array($do);

		$tencuahang = $c['ch_ten'];
		$diachi = $c['ch_diachi'];
		$sdt = $c['ch_sdt'];

	}
?>

<div class="row">

  <div class="col-md-3">
  	<div class="well">
  	<h2>Thông tin cửa hàng</h2>
  	<h4>Tên: <?=$tencuahang?></h4>
  	<h5>Địa chỉ: <?=$diachi?></h5>
  	<h5>SDT: <?=$sdt?></h5>
  	</div>

  	<div class="well">
  	<h3>Tạo tài khoản nhân viên</h3>
  		<form method="POST">
		  <div class="form-group">
		    <label>ID:</label>
		    <input type="text" class="form-control" name="id">
		  </div>
		  <div class="form-group">
		    <label>Pass:</label>
		    <input type="text" class="form-control" name="pass">
		  </div>
		  <div class="form-group">
		    <label>Tên NV:</label>
		    <input type="text" class="form-control" name="ten">
		  </div>
		  <div class="form-group">
		    <label>Ngày sinh:</label>
		    <input type="date" class="form-control" name="ngaysinh">
		  </div>
		  <div class="form-group">
		    <label>Địa chỉ:</label>
		    <input type="text" class="form-control" name="dc">
		  </div>
		  <div class="form-group">
		    <label>SDT:</label>
		    <input type="number" class="form-control" name="sdt">
		  </div>
		  <div class="form-group">
		    <label>Trình độ:</label>
		    <input type="text" class="form-control" name="trinhdo">
		  </div>

		  <div class="form-group">
		  <label class="radio">
		      <input type="radio" name="chucvu" value="QUANLYCUAHANG">Quản lý cửa hàng 
		    </label>
		    <label class="radio">
		      <input type="radio" name="chucvu" value="QUAY" checked>NV đứng bán quầy thuốc 
		    </label>
		    </div>

		  <input type="hidden" name="cuahangid" value="<?=$ch?>">
		  <button type="submit" class="btn btn-default" name="themNHANVIEN">Thêm mới</button>
		</form>
  	</div>
  </div>

  <div class="col-md-9">
  	<h2>Danh sách nhân viên</h2>
  	<p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>STT </th>
        <th>Tên </th>
        <th>Ngày sinh </th>
        <th>Địa chỉ</th>
        <th>SDT</th>
        <th>Trình độ</th>
        <th>Quyền</th>
      </tr>
    </thead>
    <tbody>
    <?php  
    	$stt = 1;
    	$a = "select * from taikhoan where cuahang=$ch";
    	$a1 = mysqli_query($db,$a);
    	while($a2 = mysqli_fetch_array($a1)){
    ?>
      <tr>
        <td><?=$stt?></td>
        <td><?=$a2['ten']?></td>
        <td><?=$a2['ngaysinh']?></td>
        <td><?=$a2['diachi']?></td>
        <td><?=$a2['sdt']?></td>
        <td><?=$a2['trinhdo']?></td>
        <td><?=$a2['quyen']?></td>
      </tr>
      <?php 
      $stt += 1;
      } 
      ?>
    </tbody>
  </table>
  </div>
</div>


<?php  
	if(isset($_POST['themNHANVIEN'])){
		$id = $_POST['id'];
		$pass = $_POST['pass'];
		$pass = md5($pass);
		$ten = $_POST['ten'];
		$ngaysinh  = $_POST['ngaysinh'];
		$dc = $_POST['dc'];
		$sdt = $_POST['sdt'];
		$trinh = $_POST['trinhdo'];
		$cuahang = $_POST['cuahangid'];
		$chucvu = $_POST['chucvu'];
		// echo $id."<br>".$pass."<br>".$ten."<br>".$ngaysinh."<br>".$dc."<br>".$sdt."<br>".$trinh."<br>".$cuahang."<br>".$chucvu."<br>";

		$sql = "INSERT INTO taikhoan values('$id','$pass','$ten','$ngaysinh','$dc',$sdt,'$trinh','$chucvu',$cuahang)";
		$do = mysqli_query($db,$sql);
		if($do){
			echo "<script>alert('Đã thêm');location.reload();</script>";
		}

	}
?>