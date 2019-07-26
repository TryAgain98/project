<?php
$id='';
 include "connected.php";
$sql="select * from quanly ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result) ;}


if(isset($_POST['save'])){
$name=$_POST['ten'];
$pass=$_POST['pass'];
$address=$_POST['address'];
$email=$_POST['email'];	
$phone=$_POST['phone'];	
$id=$_POST['id'];
$id=(int) $id;
	$sqll="UPDATE quanly SET name='$name ', pass='$pass',address='$address',email='$email',phone='$phone' WHERE id=$id ";
if ( mysqli_query($conn, $sqll)) {
	header("location: http://localhost/BaiTapLonWep/php/quanly.php?xem=taiKhoan");
?>
<script>
alert("Lưu thành công ");
</script>
<?php
}
else{
?>
<script>
alert("Lưu thất bại");
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
  <div class="container-fluid" id="containe">
  
  <h2>Sửa thông tin </h2>
  <form class="form-horizontal" action="http://localhost/BaiTapLonWep/php/quanly.php?xem=taiKhoan"  id="formAddSP" method="POST">
    <input type="hidden" name="id" value= "<?php  print $row["id"] ?>" >
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Tên:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ten" value="<?php  print $row["name"] ?>" placeholder="Nhập tên " name="ten">
    </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Mật khẩu:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="loai" value="<?php  print $row["pass"]?>" placeholder="mật khẩu" name="pass">
    </div></div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Địa chỉ:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="anh" value="<?php print $row["address"] ?>" placeholder="Địa chỉ" name="address">
    </div></div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="gia" value="<?php print $row["email"] ?>" placeholder="Email" name="email">
    </div></div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="gia" value="<?php print $row["phone"] ?>" placeholder="Phone" name="phone">
    </div></div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="save" class="btn btn-default" style="background-color: #66ff66">save</button>
      </div>
    </div>
    
  </form>
  <a href="http://localhost/BaiTapLonWep/php/quanly.php" style="color: #80b3ff;float: right;" >Quay lại</a>
  
  
  </div>
</body>
</html>