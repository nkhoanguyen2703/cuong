<div class="row">

  <div class="col-md-2">
  		<div class="panel panel-default">
		  <div class="panel-body">
		  <h4>Đơn vị tính</h4>

		  <form method="POST">
			  <div class="input-group">
			    <input type="text" class="form-control" name="DVT" required placeholder="Thêm">
			    <div class="input-group-btn">
			      <button class="btn btn-default" type="submit" name="btn_themDVT">
			        <i class="glyphicon glyphicon-upload"></i>
			      </button>
			    </div>
			  </div>
		</form>
		<?php  
			$sql = "select * from donvitinh";
			$do = mysqli_query($db,$sql);
			while($dvt = mysqli_fetch_array($do)){
				echo "<li>".$dvt['dvt_ten']."</li>";
			}
		?>

		  </div>
		</div>
  </div>



  <div class="col-md-3">
  		<div class="panel panel-default">
		  <div class="panel-body">
		  <h4>Nhà sản xuất</h4>
		  <form method="POST">
			  <div class="form-group">
			    <label>Tên NSX:</label>
			    <input type="text" name="ten" class="form-control" required>
			  </div>
			  <div class="form-group">
			    <label>Địa chỉ:</label>
			    <input type="text" name="dc" class="form-control" required>
			  </div>
			  <div class="form-group">
			    <label>Sdt:</label>
			    <input type="number" name="sdt" class="form-control" required>
			  </div>
			  <div class="form-group">
			    <label>Website:</label>
			    <input type="text" name="web" class="form-control" >
			  </div>
			  <button type="submit" class="btn btn-default" name="btn_themNSX">Thêm</button>
		</form>
		<?php  
			$sql = "select * from nhasanxuat";
			$do = mysqli_query($db,$sql);
			while($dvt = mysqli_fetch_array($do)){
				echo "<li>".$dvt['nsx_ten']."</li>";
			}
		?>
		  </div>
		</div>
  </div>

  <div class="col-md-3">
  		<div class="panel panel-default">
		  <div class="panel-body">
		  <h4>Nhà cung cấp</h4>
		  <form method="POST">
			  <div class="form-group">
			    <label>Tên:</label>
			    <input type="text" name="ten" class="form-control" required>
			  </div>
			  <div class="form-group">
			    <label>Địa chỉ:</label>
			    <input type="text" name="dc" class="form-control" required>
			  </div>
			  <div class="form-group">
			    <label>Sdt:</label>
			    <input type="number" name="sdt" class="form-control" required>
			  </div>
			  <div class="form-group">
			    <label>Stk:</label>
			    <input type="numer" name="stk" class="form-control" >
			  </div>
			  <button type="submit" class="btn btn-default" name="btn_themNCC">Thêm</button>
		</form>
		<?php  
			$sql = "select * from nhacungcap";
			$do = mysqli_query($db,$sql);
			while($dvt = mysqli_fetch_array($do)){
				echo "<li>".$dvt['ncc_ten']."</li>";
			}
		?>
		  </div>
		</div>
  </div>

  <div class="col-md-2">
  		<div class="panel panel-default">
		  <div class="panel-body">
		  <h4>Cách bảo quản</h4>

		   <form method="POST">
			  <div class="input-group">
			    <input type="text" class="form-control" name="ten" placeholder="Thêm" required>
			    <div class="input-group-btn">
			      <button class="btn btn-default" type="submit" name="btn_themCBQ">
			        <i class="glyphicon glyphicon-upload"></i>
			      </button>
			    </div>
			  </div>
		</form>
		<?php  
			$sql = "select * from cachbaoquan";
			$do = mysqli_query($db,$sql);
			while($dvt = mysqli_fetch_array($do)){
				echo "<li>".$dvt['cbq_ten']."</li>";
			}
		?>
		  </div>
		</div>
  </div>

  <div class="col-md-2">
  		<div class="panel panel-default">
		  <div class="panel-body">
		  <h4>Dạng thuốc</h4>

		   <form method="POST">
			  <div class="input-group">
			    <input type="text" class="form-control" name="ten" placeholder="Thêm" required>
			    <div class="input-group-btn">
			      <button class="btn btn-default" type="submit" name="btn_themDANG">
			        <i class="glyphicon glyphicon-upload"></i>
			      </button>
			    </div>
			  </div>
		</form>
		<?php  
			$sql = "select * from dangthuoc";
			$do = mysqli_query($db,$sql);
			while($dvt = mysqli_fetch_array($do)){
				echo "<li>".$dvt['dt_ten']."</li>";
			}
		?>
		  </div>
		</div>
  </div>

  <div class="col-md-2">
  		<div class="panel panel-default">
		  <div class="panel-body">
		  <h4>Nhóm thuốc</h4>

		  <form method="POST">
			  <div class="input-group">
			    <input type="text" class="form-control" name="nhom" required placeholder="Thêm">
			    <div class="input-group-btn">
			      <button class="btn btn-default" type="submit" name="btn_themNHOM">
			        <i class="glyphicon glyphicon-upload"></i>
			      </button>
			    </div>
			  </div>
		</form>
		<?php  
			$sql = "select * from nhomthuoc";
			$do = mysqli_query($db,$sql);
			while($n = mysqli_fetch_array($do)){
				echo "<li>".$n['nt_ten']."</li>";
			}
		?>

		  </div>
		</div>
  </div>

  <div class="col-md-2">
  		<div class="panel panel-default">
		  <div class="panel-body">
		  <h4>Gốc thuốc</h4>

		  <form method="POST">
			  <div class="input-group">
			    <input type="text" class="form-control" name="goc" required placeholder="Thêm">
			    <div class="input-group-btn">
			      <button class="btn btn-default" type="submit" name="btn_themGOC">
			        <i class="glyphicon glyphicon-upload"></i>
			      </button>
			    </div>
			  </div>
		</form>
		<?php  
			$sql = "select * from gocthuoc";
			$do = mysqli_query($db,$sql);
			while($n = mysqli_fetch_array($do)){
				echo "<li>".$n['gt_ten']."</li>";
			}
		?>

		  </div>
		</div>
  </div>



</div><!--row-->

<?php  
	if(isset($_POST['btn_themGOC'])){
		$dvt = $_POST['goc'];
		$sql = "insert into gocthuoc values('','$dvt')";
		$do = mysqli_query($db,$sql);
		if($do){
			echo "<script>alert('Đã thêm');window.location='?keyqlk=quanlydanhmuc.php';</script>";
		}
	}

	if(isset($_POST['btn_themNHOM'])){
		$dvt = $_POST['nhom'];
		$sql = "insert into nhomthuoc values('','$dvt')";
		$do = mysqli_query($db,$sql);
		if($do){
			echo "<script>alert('Đã thêm');window.location='?keyqlk=quanlydanhmuc.php';</script>";
		}
	}

	if(isset($_POST['btn_themDVT'])){
		$dvt = $_POST['DVT'];
		$sql = "insert into donvitinh values('','$dvt')";
		$do = mysqli_query($db,$sql);
		if($do){
			echo "<script>alert('Đã thêm');window.location='?keyqlk=quanlydanhmuc.php';</script>";
		}
	}

	if(isset($_POST['btn_themCBQ'])){
		$ten = $_POST['ten'];
		$sql = "insert into cachbaoquan values('','$ten')";
		$do = mysqli_query($db,$sql);
		if($do){
			echo "<script>alert('Đã thêm');window.location='?keyqlk=quanlydanhmuc.php';</script>";
		}
	}

	if(isset($_POST['btn_themDANG'])){
		$ten = $_POST['ten'];
		$sql = "insert into dangthuoc values('','$ten')";
		$do = mysqli_query($db,$sql);
		if($do){
			echo "<script>alert('Đã thêm');window.location='?keyqlk=quanlydanhmuc.php';</script>";
		}
	}

	if(isset($_POST['btn_themNSX'])){
		$ten = $_POST['ten'];
		$dc = $_POST['dc'];
		$sdt = $_POST['sdt'];
		$web = $_POST['web'];

		$sql = "insert into nhasanxuat values('','$ten',$sdt,'$dc','$web')";
		$do = mysqli_query($db,$sql);
		if($do){
			echo "<script>alert('Đã thêm');window.location='?keyqlk=quanlydanhmuc.php';</script>";
		}
	}

	if(isset($_POST['btn_themNCC'])){
		$ten = $_POST['ten'];
		$dc = $_POST['dc'];
		$sdt = $_POST['sdt'];
		$stk = $_POST['stk'];

		$sql = "insert into nhacungcap values('','$ten',$sdt,'$dc',$stk)";
		$do = mysqli_query($db,$sql);
		if($do){
			echo "<script>alert('Đã thêm');window.location='?keyqlk=quanlydanhmuc.php';</script>";
		}
	}
?>