<?php
 include "connected.php";
if(isset($_POST['add'])){
$name=$_POST['ten'];
$loai=$_POST['loai'];
$anh=$_POST['anh'];
$gia=$_POST['gia'];	
$gia=(int) $gia;
	$sql="insert into sanpham(ten,loai,link,gia) values ('$name','$loai','$anh',$gia)";
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