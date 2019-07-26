<style>
#quayLai:hover ,#quayLai:active {
  text-decoration: none;
}
</style>

<?php
$id='';
 include "connected.php";
if(isset($_GET['editSanPham'])){
 $id=$_GET['editSanPham'];
  $id=(int) $id;
$sql="select * from sanpham where id=$id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result) ;}

}

if(isset($_POST['save'])){
$name=$_POST['ten'];
$loai=$_POST['loai'];
$anh=$_POST['anh'];
$gia=$_POST['gia'];	
$gia=(int) $gia;
$id=$_POST['id'];
$id=(int) $id;
$soluong=$_POST['soluong'];	
$soluong=(int)$soluong;
$sqll="";
if($anh!=null){
	$sqll="UPDATE sanpham SET ten='$name ', loai='$loai',link='$anh',gia=$gia,soluong=$soluong WHERE id=$id ";}
	else{
		$sqll="UPDATE sanpham SET ten='$name ', loai='$loai',gia=$gia,soluong=$soluong WHERE id=$id ";}
	
if ( mysqli_query($conn, $sqll)) {
	header("location: http://localhost/BaiTapLonWep/php/quanLy.php?thongbao=edit");
?>
<script>
alert("save sản phẩm thành công");
</script>
<?php
}
else{
?>
<script>
alert("save Thất thất bại");
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
  <div class="container-fluid" id="containe" style="background-color: #e6e6e6">
  
  <h2 style="width:200px;height:50px;background:#bfbfbf; text-align:center;padding-top:5px;">Edit </h2>
  <form class="form-horizontal" action="editSP.php"  id="formAddSP" method="POST">
    <input type="hidden" name="id" value= "<?php  print $row["id"] ?>" >
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Tên:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="ten" value="<?php  print $row["ten"] ?>" placeholder="Nhập tên sản phẩm" name="ten">
    </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Loại:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="loai" value="<?php  print $row["loai"]?>" placeholder="loại sản phẩm" name="loai">
    </div></div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Số lượng:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="loai" value="<?php  print $row["soluong"]?>" placeholder="Số lượng" name="soluong">
    </div></div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Ảnh:</label>
      <div class="col-sm-6">
      <input type="file" name="anh" value="fileupload"  value="<?php print $row["link"] ?>">
       
    </div></div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Giá:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="gia" value="<?php print $row["gia"] ?>"  name="gia">
    </div></div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-6">
        <button type="submit" name="save" class="btn btn-default" style="background-color: #66ff66">save</button>
      </div>
    </div>
    
  </form>
  <a id="quayLai" href="http://localhost/BaiTapLonWep/php/quanly.php" style="color: #80b3ff;float: right;font-size:20px" >Quay lại</a>
  
  
  </div>
</body>
</html>