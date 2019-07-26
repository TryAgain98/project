<?php
  include "connected.php";
?>
<div class="container-fluid" >
  <div class="row">
    <div class="col-lg-7"  >
    <h4 style="font-weight:bold;">Thông tin Sản phẩm</h4>
	<?php
	 if (isset($_GET['chitietTK'])){
	$id=$_GET['chitietTK'];
	$id=(int) $id;
      $sql = "SELECT sp.ten as tensp,sp.loai as loaisp,sp.link as link,tk.soluong as soluong,tk.gia as gia,time
FROM thongkechitiet as tk
INNER JOIN sanpham as sp ON tk.idsp=sp.id
where tk.idkh=$id";
$result = mysqli_query($conn, $sql);
$money=0;
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
		
$date = date_create($row["time"]);
$time= date_format($date, 'd-m-Y ');

		 print "<img style='width:250px;height:auto;' src='../imgs/" . $row["link"] . "'  alt='anh'><br>" ;
		  print "<h3 >".$row["tensp"] ."</h3>";
             	$money+=$row["gia"];
                
				 print  "<p style='font-size:15px;'>". "<b>Loại : </b>" . $row["loaisp"] ."<p>";
				  print  "<p style='font-size:15px;'>". "<b>Số lượng : </b>" . $row["soluong"] ."<p>";
				  print  "<p style='font-size:15px;'>". "<b>Giá : </b>" . $row["gia"]. "₫" ."<p>";
				  print  "<p style='font-size:15px;'>". "<b>Thời gian mua : </b>" . $time ."<p>";
        
    }
}
print "<h4 style='border-top:1px solid #e6e6e6;padding-top:10px;'>Tổng tiền : ".$money."₫</h4>";
}
	?>
    
    
</div>

<div class="col-lg-5"  >
<h4 style="font-weight:bold;">Thông tin khách hàng</h4>
     <?php
	 if (isset($_GET['chitietTK'])){
	$id=$_GET['chitietTK'];
	$id=(int) $id;
      $sql = "select * from khachhang where id=$id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
		echo "<p style='font-size:15px;'><b>Tên :</b> ".$row['name']."<p>";
		echo "<p style='font-size:15px;'><b>email :</b> ".$row['email']."<p>";
		echo "<p style='font-size:15px;'><b>Số điện thoại :</b> ".$row['phone']."<p>";
		echo "<p style='font-size:15px;'><b>Địa chỉ : </b>".$row['address']."<p>";
		
		}}}
?>
	
</div>
</div>
</div>