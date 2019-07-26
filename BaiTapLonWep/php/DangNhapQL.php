<?php
 include "connected.php";
if(isset($_POST['dangNhap'])){
$name=$_POST['name'];
$pass=$_POST['pwd'];	
	$sql="select * from quanly where  pass='$pass' and nameuser='$name'";
	$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	
	header("location: php/quanLy.php");
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
<div class="container"  style="margin-top:100px;width:100%;height:414px;"height:454px">
  <h3 style="color:red;">Chỉ có quản lý mới được truy cập</h3>
  <form class="form-horizontal"  id="form-dk" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Tên:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="name"  placeholder="Nhập tên" name="name">
    </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Mật khẩu:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name ="dangNhap" class="btn btn-default">Đăng nhập</button>
      </div>
    </div>
  </form>
</div>