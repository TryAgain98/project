<style>
#quayLai:hover ,#quayLai:active {
  text-decoration: none;
}
</style>
<?php
 include "connected.php";
if(isset($_POST['add'])){
$name=$_POST['ten'];
$loai=$_POST['loai'];
$anh=$_POST['anh'];
$gia=$_POST['gia'];	
$gia=(int) $gia;
$soluong=$_POST['soluong'];	
$soluong=(int)$soluong;
	$sql="insert into sanpham(ten,loai,link,gia,soluong) values ('$name','$loai','$anh',$gia,$soluong)";
if ( mysqli_query($conn, $sql)) {
?>
<script>
alert("Thêm sản phẩm thành công");
</script>
<?php
}
else{
?>
<script>
alert("Thêm Thất thất bại");
</script>
<?php	
}
}
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
</head>
<body>
  <div class="container" id="containe" style="background-color: #e6e6e6">
  
  <h2 style="width:250px;height:50px;background:#bfbfbf; text-align:center;padding-top:5px;">Thêm sản phẩm</h2>
  <form class="form-horizontal" action="addSP.php"  id="formAddSP" method="POST">
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Tên:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="ten" placeholder="Nhập tên sản phẩm" name="ten">
    </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Loại:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="loai" placeholder="loại sản phẩm" name="loai">
    </div></div>
       <div class="form-group">
      <label class="control-label col-sm-2" for="name">Số lượng:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="loai" placeholder="số lượng" name="soluong">
    </div></div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Ảnh:</label>
      <div class="col-sm-6">
        <input type="file" name="anh">
    </div></div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Giá:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="gia" placeholder="giá sản phẩm" name="gia">
    </div></div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-6">
        
        <button type="submit" name="add" class="btn btn-default" style="background-color: #66ff66">Add</button>
      </div>
    </div>
    
  </form>
    <a id="quayLai" href="http://localhost/BaiTapLonWep/php/quanly.php" style="color: #80b3ff;float: right;font-size:20px" >Quay lại</a>
  
  </div>
</body>
</html>