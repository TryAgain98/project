
<?php
session_start();
 include "connected.php";
if(isset($_POST['dangNhap'])){
$name=$_POST['name'];
$pass=$_POST['pwd'];	
	$sql="select * from khachhang where name='$name' and pass='$pass'";
	$result = mysqli_query($conn, $sql);
	 while ($row = mysqli_fetch_assoc($result)) {
		 $_SESSION['idKH']=$row['id'];
		 
    }
if (mysqli_num_rows($result) > 0) {
	$_SESSION['name']=$_POST['name'];
	
	header("location: http://localhost/BaiTapLonWep/TrangChu.php");
	?>
<script>
alert("Đăng nhập thành công");
</script>
<?php
}
else{
?>
<script>
alert("Đăng nhập thất bại");
</script>
<?php	
}
}


?>
<div class="container"  style="margin-top:100px;width:50%;height:350px;text-align:center;">
  <h3 style="text-align:center;">Đăng nhập </h3>
  <form class="form-horizontal"  id="form-dk" method="post">
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Tên:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Nhập tên" name="name">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Mật khẩu:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Mật khẩu" name="pwd">
      </div>
    </div>
    <div class="form-group"  >        
      <div >
        <button type="submit" name ="dangNhap" class="btn btn-default">Đăng nhập</button>
      </div>
    </div>
  </form>
</div>