<div class="row">

	
	<div class="col-md-12">
		<h2>Danh sách cửa hàng</h2>
		<table class="table table-striped">
	    <thead>
	      <tr>
	        <th>Tên</th>
	        <th>Địa chỉ</th>
	        <th>SDT</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php  
	    	$a = "select * from cuahang ORDER BY ch_ten DESC";
	    	$a1 = mysqli_query($db,$a);
	    	while( $a2 = mysqli_fetch_array($a1)){
	    		$id = $a2['ch_ma'];
	    	?>
			      <tr>
			        <td><?=$a2['ch_ten']?></td>
			        <td><?=$a2['ch_diachi']?></td>
			        <td><?=$a2['ch_sdt']?></td>
			        <td><a href='?keyqlk=phieuxuat.php&ch=<?=$id?>'>Xuất thuốc</a></td>
			      </tr>
	      <?php  
	  		}
	      ?>
	      
	    </tbody>
	  </table>
  </div>

</div>


<?php  
	if(isset($_POST['themCH'])){
		$ten = $_POST['ten'];
		$sdt = $_POST['sdt'];
		$dc = $_POST['dc'];
		$sql = "insert into cuahang values('','$ten',$sdt,'$dc')";
		$do = mysqli_query($db,$sql);
		if($do){
			echo "<script>alert('Đã thêm');window.location='?keyad=cuahang.php';</script>";
		}
	}
?>