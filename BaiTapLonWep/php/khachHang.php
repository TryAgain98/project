
<div class="container" id="cont" style="margin-top:100px;margin-bottom:200px; " ><!--content-->
<div class="row">
    <div class="col-lg-3" >
     <h4 style="font-weight:bold;text-align:center">Xin chào <?php print $_SESSION['name'] ?> </h4>
  <div class="list-group" style="text-align:center">
    <a href="http://localhost/BaiTapLonWep/TrangChu.php?header=taiKhoan&id=1" class="list-group-item">Tài khoản</a>
    <a href="http://localhost/BaiTapLonWep/TrangChu.php?header=gioHang&id=1" class="list-group-item">Giỏ hàng</a>
   
  </div>
    </div>
    
    
    <div class="col-lg-9" >
    <?php
	
	if(isset($_GET['header'])){
		$tam=$_GET['header'];
		if($tam=='taiKhoan'){
			include "taiKhoanKH.php";
		}
		else if($tam=='gioHang'){
			include "gioHang.php";
		}
		
		
	}
	
	else{
			include "taiKhoanKH.php";
		}
	?>
    </div>
    
    </div>
        </div>