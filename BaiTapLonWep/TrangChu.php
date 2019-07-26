<?php
if(isset($_GET['fixSanPham'])){
	
	?>
<script>
alert("Đăng Ký thành công");
</script>
<?php
}
?>

<?php
  include "php/connected.php";
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
 
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/dangKy.css" />
   <link rel="stylesheet" href="css/cont.css" />
   <style>
   #imgTable{
	width:200px;
	height:200px;
	
    }
    #aDMSP{
	   padding:8px;  
	   font-size:13px;
	   text-align:center;
   }
    #asp:link, #asp:visited{
	  text-align: center;
  text-decoration: none;
  display: inline-block;
  color:black;
   margin:1px;
   border: 1px solid transparent;
  }
   #asp:hover ,#asp:active {
	   border:1px solid #cccccc;
	margin-bottom:2px;
  text-decoration: none;
  }
#imgTable{
    width: 200px;
    height: 200px;
}
   </style>
</head>
<body>

  <div class="container-fluid" id="containe">
  
  
<nav class="navbar navbar-inverse navbar-fixed-top" id="header"><!-- header-->
  <div class="container-fluid" style="">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a style="font-weight: bold;font-size: 14px;" class="navbar-brand" href="TrangChu.php"><span class="glyphicon glyphicon-home"></span>   TRANG CHỦ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
   
      <ul class="nav navbar-nav navbar-right">
      <?php
	  session_start();
	  if(isset($_SESSION['name'])){
		  $name=$_SESSION['name'];
		  
		  print "<ul class='nav navbar-nav'>"
        ."<li class='dropdown'>"
          ."<a class='dropdown-toggle' data-toggle='dropdown' href='#'><span class='glyphicon glyphicon-user'></span>".$name. "<span class='caret'></span></a>"
          ."<ul class='dropdown-menu'>"
            ."<li><a href='TrangChu.php?header=gioHang&id=1'>Giỏ hàng </a></li>"
            ."<li><a href='TrangChu.php?header=taiKhoan&id=1'>Tài khoản</a></li>"
            ."<li><a href='php/deleteCookie.php'>Đăng xuất</a></li>
          </ul>
        </li>
      </ul>";
	  
	  }
	  
	  
	  else{
        print "<li><a href='TrangChu.php?header=dangky&id=1'><span class='glyphicon glyphicon-registration-mark
'></span> Đăng ký</a></li>
        <li><a href='TrangChu.php?header=dangnhap&id=1'><span class='glyphicon glyphicon-log-in'></span> Đăng nhập</a></li>";
	  }
		?>
        <li><a href="http://localhost/BaiTapLonWep/TrangChu.php?header=quanLy&id=1"><span class="glyphicon glyphicon-cog"></span> Fix</a></li>
      </ul >
    </div>
    
  </div>
</nav>
<?php
 if (isset($_GET['chitiet'])){
	include "php/chiTietSP.php";  
	}
	else if(isset($_GET['header'])){
	$tam=$_GET['header'];
if($tam=='dangky'){
    include "php/dangKy.php";  
}
else if($tam=='dangnhap'){
    include "php/dangNhap.php";  
}
else if($tam=='quanLy'){
    include "php/DangNhapQL.php";  
}
else if($tam=='gioHang'||$tam=='taiKhoan'){
    include "php/khachHang.php";  
}
}
else {
?>
<div class="container" style="margin-top: 70px;">
<form class="form-inline" id="form"  method="post" action="TrangChu.php" style="text-align:center;">
    <div class="form-group">
    <a href="TrangChu.php" ><img src="imgs/logoo.jpg" style="width:auto;height:60px;"/></a>
      <input type="text" class="form-control" placeholder="Tên,loại sản phẩm" name="name"  style="width:300px;height:40px;"/>
    </div>
    <button style="width:50px;height:40px;background-color:#ff9900;" type="submit" class="btn btn-default" name="search"><span style="font-size:20px;color:white;" class="glyphicon glyphicon-search"></button>
  </form>
  </div>



<div class="container" style="margin-top: 20px;"><!-- banner-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
      <a href="http://localhost/BaiTapLonWep/TrangChu.php">
        <img src="imgs\banner1.jpg" alt="Los Angeles" style="width:100%;">
      </a>
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <a href="http://localhost/BaiTapLonWep/TrangChu.php">
          <img src="imgs\banner2.jpg" alt="Chicago" style="width:100%;">
        </a>
        <div class="carousel-caption">
        
        </div>
      </div>
    
      <div class="item">
        <a href="http://localhost/BaiTapLonWep/TrangChu.php">
          <img src="imgs\banner3.jpg" alt="New York" style="width:100%;">
        </a>
        <div class="carousel-caption">
          
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
   
  </div>
</div>
 <p style="border:0.05em ridge #e6e6e6; margin-top:10px;"></p>


 
<div class="container" id="cont" style="margin-top:50px; " ><!--content-->
<div class="row">
    <div class="col-lg-3"  >
    <h5 style="font-weight:bold;text-align:center">DANH MỤC SẢN PHẨM </h5>
  <div class="list-group">
     <?php
		  $sql="SELECT DISTINCT loai FROM sanpham";
		  $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
		if($row["loai"]!=null){
				print "<a id='aDMSP' class='list-group-item' href='TrangChu.php?sanpham=".$row["loai"]."&id=1'> ".$row["loai"]."</a>";}
    }
	
}
		  ?>
         </div> 
    </div>
 
    <div class="col-lg-9"  >


<?php 
if(isset($_GET['sanpham'])){
     include "php/xuly.php";  
}

else if (isset($_POST['search'])){
	include "php/xuly.php";  
	}

else{
  include "php/content.php";  
}}
?>



</div></div>
</div>
<div id="footer" >
<!-- chứa địa chỉ liên lạc-->
                    <?php
  include "php/footer.php";
?>
</div>
</div>

</body>
</html>