<?php
 include "connected.php";
 $idKH=(int)$_SESSION['idKH'];
 
$sql="select * from khachhang where id=$idKH ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result) ;}


if(isset($_POST['save'])){
$name=$_POST['name'];
$pass=$_POST['pass'];
$address=$_POST['address'];
$email=$_POST['email'];	
$phone=$_POST['phone'];	
	$sqll="UPDATE khachhang SET name='$name ', pass='$pass',address='$address',email='$email',phone='$phone' WHERE id=$idKH ";
if ( mysqli_query($conn, $sqll)) {
	
?>
<script>
alert("save thành công");
</script>
<?php
header("location: http://localhost/BaiTapLonWep/TrangChu.php?header=taiKhoan&id=1");
}
else{
?>
<script>
alert("save thất bại");
</script>
<?php	
}
}
?>

<div class="container"  style="width:100%;height:auto;">
   <h5 style="font-weight:bold;">SỬA THÔNG TIN </h5>
  <form class="form-horizontal" action="http://localhost/BaiTapLonWep/TrangChu.php?header=taiKhoan&id=1"  id="form-dk" method="POST">
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Tên:</label>
      <div class="col-sm-5">
        <input  type="text" class="form-control" id="name" value="<?php print $row['name']; ?>" placeholder="Nhập tên" name="name">
              </div>
             
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Mật khẩu:</label>
      <div class="col-sm-5">          
        <input onclick="errorName()" type="password" class="form-control" id="pass" value="<?php print $row['pass']; ?>"  placeholder="Mật khẩu" name="pass">
      </div>
      
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-5">
        <input onclick="errorPass()" type="email" class="form-control" id="email" value="<?php print $row['email']; ?>" placeholder="Enter email" name="email">

      </div>
       
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Số điện thoại:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="phone" value="<?php print $row['phone']; ?>" placeholder="Số điện thoại" name="phone">
      </div>
        
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Địa chỉ:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="address" value="<?php print $row['address']; ?>" placeholder="Địa chỉ" name="address">
      </div>
       
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="save" class="btn btn-default">Lưu</button>
      </div>
    </div>
    
  </form>
</div>