<?php
if(isset($_GET['thongbao'])){
	$tam=$_GET['thongbao'];
	if($tam=='delete'){
	?>
<script>
alert("Xóa thành công");
</script>
<?php
}
else if($tam=='edit'){
?>
<script>
alert("Lưu thành công");
</script>
<?php
}}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<title>Wep Bán Hàng</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  
  #chucNang{
	  width:auto;
	  height:auto;
	  background-color:#e6e6e6;
  }
  </style>
</head>
<body>

  <?php
 if (isset($_POST['Add'])){
  include "addSP.php";  
  }
else{?>
  <div class="container-fluid" id="containe">

<nav class="navbar navbar-inverse navbar-fixed-top" id="header"><!-- header-->
  <div class="container-fluid" style="height: auto;">
    <div class="navbar-header">
      <a style="font-weight: bold;font-size: 14px;" class="navbar-brand" href="http://localhost/BaiTapLonWep/TrangChu.php"><span class="glyphicon glyphicon-home"></span>    TRANG CHỦ</a>

    </div>
    <h3 style="color: white; text-align: center;">Xin chào Admin !</h3>
    
  </div>
</nav>
</div>

<div class="container-fluid" style="margin-top:100px">
  
  <div class="row">
    <div class="col-lg-2" id="chucNang" >
      <h2>Chức năng</h2>
  <div class="list-group">
    <a href="http://localhost/BaiTapLonWep/php/quanly.php?xem=sanPham" class="list-group-item">Sản phẩm</a>
     <a href="http://localhost/BaiTapLonWep/php/quanly.php?xem=thongke" class="list-group-item">Thống kê</a>
    <a href="http://localhost/BaiTapLonWep/php/quanly.php?xem=taiKhoan" class="list-group-item">Tài khoản</a>
    
  </div>
    </div>
    
    
    <div class="col-lg-10" style=" margin-left:5px">
    <?php
	if (isset($_POST['searchSP'])){
	include "fixSanPham.php";  
	}
	
	
	else if(isset($_GET['deleteSanPham'])){

  include "connected.php";
include "fixSanPham.php";  
	
	}

else if(isset($_GET['editSanPham'])){
	include "editSP.php";	
}
    else if(isset($_GET['xem'])){
		$xem=$_GET['xem'];
		if($xem=='sanPham'){
        include "fixSanPham.php";}
		else if($xem=='taiKhoan'){
		include "taiKhoanQL.php";	
		}
		else if($xem=='thongke'){
		include "thongKeChiTiet.php";	
		}
  }
  else if(isset($_GET['chitietTK'])){
	include "chitietTK.php";	
}
	else {
        include "fixSanPham.php";  
	}
?>
    </div>
    
    
  </div>
</div>
<?php
}

?>

</body>
</html>