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
	</style>
	
	<body class="document">
	<button onclick="window.print()">In trang này </button>
		<div class="page" contenteditable="true">

			<CENTER>
				<h2>PHIẾU XUẤT KHO</h2>
				<h4>Đến: Cửa hàng thuốc 123</h4>
				<p>Địa chỉ: 32 Nguyễn Văn Cừ, TP. Cần Thơ </p>
				
			</CENTER>




			<table style="border: 1px solid green; width:100%;">
			<thead>
				<td>STT</td>
				<td>Mã thuốc</td>
				<td>Tên thuốc</td>
				<td>Số lô </td>
				<td>Số lượng</td>
				<td>Thành tiền</td>
				<td>VAT</td>
			</thead>
			<tbody>
			<tr>
				<td>1</td>
				<td>A123</td>
				<td>Panadol</td>
				<td>LA012</td>
				<td>1200</td>
				<td>Viên</td>
				<td>10%</td>
			</tr>
			
			</tbody>
			</table>
			
			

			<hr>

			Ngày 31/10/2018<br>
			NHÂN VIÊN QUẢN LÝ KHO
		</div>
		<!-- <div class="page" contenteditable="true">
			<p>Second <code>.page</code> element</p>
			ent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
		</div> -->


	</body>
</html>
