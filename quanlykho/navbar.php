<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">C-Pharmacy</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="?keyqlk=cuahang.php">Cửa hàng</a></li>
        <li><a href="?keyqlk=phieunhap.php">Lập phiếu nhập</a></li>
        <li><a href="?keyqlk=tonkho.php">Thống kê tồn kho</a></li>
        <li><a href="?keyqlk=quanlydanhmuc.php">Quản lý danh mục</a></li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Thuốc <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?keyqlk=themthuoc.php">Thêm mới</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>

       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span><?=$_SESSION['quanlykho']?></a></li>
        <li><a href="index.php?signout=1"><span class="glyphicon glyphicon-log-in"></span> Thoát</a></li>
      </ul>
    </div>
  </div>
</nav>