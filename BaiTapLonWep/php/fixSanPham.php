<?php
  include "connected.php";
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
    <link rel="stylesheet" href="../css/fixSanPham.css" />
      <link rel="stylesheet" href="../css/cssSanPham.css" />
<style>
#table{
border:1px solid black;	
	
}
</style>
</head>
<body>
<div class="container-fluid" >
<div id=hearderSP>

  <form class="form-inline" id="form"  method="post" action="quanly.php">
    <div class="form-group">
    <span style="margin-right:100px;" id="ThongBao"></span>
      <input type="text" class="form-control" placeholder="Tên , loại sản phẩm" name="nameSP"  style="width:250px"/>
    </div>
  
    <button type="submit" class="btn btn-default" name="searchSP" id='search'><span style="font-size:20px;color:white;" class="glyphicon glyphicon-search"></button>
    <button style='float:right;' type="submit" class="btn btn-default" name="Add" id='add'>Thêm</button>
  </form>
  
  </div>
  
  <div id=contentSP>
  
<?php
if(isset($_POST['searchSP'])){
	$search=$_POST['nameSP'];

$sql = "select * from sanpham where ten like '%$search%' or loai like '%$search%'";
$result = mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
$count1=0;
if (mysqli_num_rows($result) > 0) {
print" <table id='table' onclick=table() style='width:100%'> "
."<tr> <th> Ảnh </th> <th> Tên </th><th>Giá</th><th>Loại</th><th>Số lượng</th><th>Xóa</th><th>Sửa</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
                print "<tr><td>" . "<img id='imgTable' src=../imgs/" . $row["link"]. " alt='anh'>" . "</td>"
                . "<td >" . $row["ten"] . "</td>"
                . "<td >"  . $row["gia"]. "₫" . "</td>"
				."<td >" . $row["loai"] . "</td>"
				."<td >" . $row["soluong"] . "</td>"
				."<td > <a href='http://localhost/BaiTapLonWep/php/quanly.php?deleteSanPham=".$row["id"]."' id='delete'>Delete</a></td>"
				."<td ><a href='quanly.php?editSanPham=".$row["id"]."' id='edit'>Edit</a></td></tr>" ;
				$count1++;
				if($count1==$count){
					print "</table>";
				}
    }
}
}
else if(isset($_GET['deleteSanPham'])){
	$id=$_GET['deleteSanPham'];
	$id=(int) $id;
	
$sql = "DELETE FROM sanpham WHERE id =$id";
if (mysqli_query($conn, $sql)) {
	header("location: http://localhost/BaiTapLonWep/php/quanLy.php?thongbao=delete");
  ?>
<script>
document.getElementById("ThongBao").innerHTML="Thành công";
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
else{
	  $sql = "select * from sanpham ";
$result = mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
$count1=0;
if (mysqli_num_rows($result) > 0) {
print" <table  id='table' onclick=table() style='width:100%'> "
."<tr> <th> Ảnh </th> <th> Tên </th><th>Giá</th><th>Loại</th><th>Số lượng</th><th>Xóa</th><th>Sửa</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
                print "<tr><td>" . "<img id='imgTable' src=../imgs/" . $row["link"]. " alt='anh'>" . "</td>"
                . "<td >" . $row["ten"] . "</td>"
                . "<td >"  . $row["gia"] . "₫". "</td>"
				."<td >" . $row["loai"] . "</td>"
				."<td >" . $row["soluong"] . "</td>"
				."<td > <a href='quanly.php?deleteSanPham=".$row["id"]."'& id='delete'>Delete</a></td>"
				."<td ><a href='quanly.php?editSanPham=".$row["id"]."' id='edit'>Edit</a></td></tr>" ;
				$count1++;
				if($count1==$count){
					print "</table>";
				}
    }
}
}

?>

</div>
</div>
</body>
</html>