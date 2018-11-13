<?php  
	//Chọn ra thông tin thuốc và lô thuốc, mà còn trong kho, chưa xuất đi các cửa hàng
	//Chỉ xét tồn trong kho lớn, kho chung
	$a = "select * from thuoc t join lothuoc l on t.t_ma=l.lt_mathuoc 
	WHERE l.lt_soluongnhap > (select sum(px_soluong) as total FROM phieuxuat where px_solo=l.lt_solo)";

	$b = "select * from thuoc a join lothuoc b on a.t_ma=b.lt_mathuoc
	WHERE b.lt_solo NOT IN (SELECT DISTINCT px_solo FROM phieuxuat)";

	$sql = $a. " UNION DISTINCT ".$b;
	echo $sql;
	$do = mysqli_query($db,$sql);
	// echo $sql;
	
?>


<h2>Thống kê thuốc hiện có ( tồn kho )</h2>
  <p>Danh sách các loại thuốc hiện đang còn trong kho, chưa xuất đi các cửa hàng chi nhánh</p>            
  <table class="table table-striped">
    <thead>
      <tr>
      	<th>Lô</th>
        <th>Mã thuốc</th>
        <th>Tên thuốc</th>
        <th>Ngày SX</th>
        <th>Hạn dùng</th>
        <th>Tình trạng</th>
        <th>Số lượng</th>

      </tr>
    </thead>
    <tbody>
  		<?php  
  		$today = date("Y-m-d H:i:s"); 
  		while($a = mysqli_fetch_array($do)){
  			$handung = date_create($a['lt_hansudung']);
  			$status = '';
  			date_sub($handung,date_interval_create_from_date_string("180 days")); // trừ lại 6 tháng
  			$handung = date_format($handung,"Y-m-d");
  			if($today > $handung){
  				$status = "Sắp hết hạn";
  			}
  		?>
      <tr>
        <td><?=$a['lt_solo']?></td>
        <td><?=$a['t_ma']?></td>
        <td><?=$a['t_ten']?></td>
        <td><?=$a['lt_ngaysanxuat']?></td>
        <td><?=$a['lt_hansudung']?></td>
        <td style="color:red;"><?=$status?></td>
        <td>
        <?php 
        	$sl = getSoLuongConLaiCuaLoThuoc($a['lt_solo'],$db);
        	echo $sl;
         ?>
         </td>

      </tr>
      <?php  
  		}
      ?>
    </tbody>
  </table>
