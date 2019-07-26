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
border:1px solid #f2f2f2;	
	
}
#table tr td{
height:50px;	
}
</style>
</head>
<?php	

	  $sql = "select idkh,name,time,COUNT(idkh) as demsp from ((thongkechitiet as tk

INNER JOIN khachhang as kh ON kh.id=tk.idkh)
INNER JOIN sanpham as sp ON sp.id=tk.idsp)
GROUP by(idkh) ";
$result = mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
$count1=0;
if (mysqli_num_rows($result) > 0) {
print" <table  id='table' onclick=table() style='width:100%'> "
."<tr> <th> Tên khách hàng </th> <th> Số lượng sản phẩm đã mua </th><th>Chi tiết</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
              
                print "<td >" . $row["name"] . "</td>"
                . "<td >"  . $row["demsp"] . "</td>"
				."<td > <a href='http://localhost/BaiTapLonWep/php/quanly.php?chitietTK=".$row["idkh"]."' id='delete'>Chi tiết</a></td></tr>" ;
				$count1++;
				if($count1==$count){
					print "</table>";
				}
    }
}


?>