<div class="row">

	
	<div class="col-md-3">
		<h2>Thông tin cửa hàng</h2>
		<?php  
		if(isset($_GET['ch'])){
			$ch = $_GET['ch'];
			$sql = "select * from cuahang where ch_ma='$ch'";
			$do = mysqli_query($db,$sql);
			$cuahang = mysqli_fetch_array($do);
			?>
			<div class="well">
				<h4><?=$cuahang['ch_ten']?></h4>
				<h5><?=$cuahang['ch_sdt']?></h5>
				<h5><?=$cuahang['ch_diachi']?></h5>
			</div>
			<?php
		}

		?>
	</div>

	<div class="col-md-9">
		<h2>Xuất thuốc</h2>

		<form action="" method="POST">
		  <div class="form-group">
		    <label>Nhập mã thuốc </label>
		    <input type="text" class="form-control" name="mathuoc">
		  </div>
		  <button type="submit" class="btn btn-default" name="showLoThuoc">Hiển thị lô</button>
		</form>



		<table class="table table-striped">
	    <thead>
	      <tr>
	        <th>Số lô</th>
	        <th>Còn lại</th>
	        <th>NSX</th>
	        <th>HSD</th>
	        <th>Số lượng cần xuất</th>
	      </tr>
	    </thead>
	    <tbody>

		<?php  
		if(isset($_POST['showLoThuoc'])){
			$ma = $_POST['mathuoc'];
			$sql = "select * from lothuoc where lt_mathuoc='$ma'";
			$do = mysqli_query($db,$sql);
			while($lo = mysqli_fetch_array($do)){
				$solo = $lo['lt_solo'];
				$slconlai = getSoLuongConLaiCuaLoThuoc($solo,$db);
				?>

				<tr>
		        <td><?=$solo?></td>
		        <td><?=$slconlai?></td>
		        <td><?=$lo['lt_ngaysanxuat']?></td>
		        <td><?=$lo['lt_hansudung']?></td>
		        <td>
		        	<form action="print_phieuxuatkho.php" target="_blank" method="POST" onsubmit="return checkSL();">
					  <div class="input-group">
					  	<input type="hidden" id="slconlai" name="slconlai" value="<?=$slconlai?>">
					  	<input type="hidden" name="solo" value="<?=$solo?>">
					  	<input type="hidden" name="cuahang" value="<?=$ch?>">
					  	<input type="hidden" name="nhanvienkho" value="<?=$quanlykho?>">
					    <input type="text" id="slxuat" class="form-control" placeholder="Nhập số lượng cần xuất" name="slxuat">
					    <div class="input-group-btn">
					      <button class="btn btn-default" type="submit" name="btn_xuatkho">
					        <i class="glyphicon glyphicon-upload"></i>
					      </button>
					    </div>
					  </div>
					</form>
		        </td>
		      	</tr>

		      	<script type="text/javascript">
		      	function checkSL(){
		      		var a = document.getElementById('slconlai').value;
		      		var b = document.getElementById('slxuat').value;
		      		if(parseInt(b,10)>parseInt(a,10)){
		      			alert("Không xuất được, Lô không còn đủ số lượng mong muốn !");
		      			return false; //không submit Form
		      		}
		      		alert("Đã xuất kho, đang chuyển sang trang in phiếu xuất kho !");
		      		return false; //submit form
		      	}
		      	</script>


				<?php
			}
		}
		?>
		</tbody>
	  	</table>
	</div>

	

</div>