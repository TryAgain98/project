
<style>
#table tr td{
border: 1px solid black;
text-align: center;
padding: 5px;
}

#table tr th{
border: 1px solid black;
text-align: center;
padding: 10px;
}
#thanhtoan:hover ,#thanhtoan:active{
border:1px solid #e6e6e6;
background-color:red;	
}

#delete{
text-decoration: none;
	color: black;
	padding: 10px 20px;
	background-color: #66ff66;
	border: 1px solid #d9d9d9;
}
#delete:hover, #delete:active {
  border: 1px solid #b3b3b3;
}

</style>
  <h5 style="font-weight:bold;">CÁC SẢN PHẨM ĐÃ MUA </h5>
 <?php
  $idKH=(int)$_SESSION['idKH'];
  $sql = "select sp.link as link ,tk.gia as gia, tk.soluong as soluong,sp.ten as ten,tk.idGH as idGH from thongke as tk JOIN sanpham sp on tk.idSP=sp.id where idKH=$idKH ";
$result = mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
$count1=0;
$money=0;
if (mysqli_num_rows($result) > 0) {
print" <table  id='table'  style='width:100%'> "
."<tr> <th> Ảnh </th> <th> Tên </th><th>Số lượng</th><th>Giá</th><th>Xóa</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
		$money+=$row["gia"];
                print "<tr><td>" . "<img  src=imgs/" . $row["link"]. " alt='anh'>" . "</td>"
                . "<td >" . $row["ten"] . "</td>"
                
				."<td >" . $row["soluong"] . "</td>"
				. "<td >"  . $row["gia"]. "₫" . "</td>"
				."<td > <a href='php/deleteSPKH.php?deleteSanPhamKH=".$row["idGH"]."' id='delete'>Delete</a></td>";
				$count1++;
				if($count1==$count){
					print "</table>";
				}
    }
	print "<h4>Tổng tiền : ".$money."₫</h4>";
}

?>
 <a id="delete" style="width:200px;height:auto;text-align:center;color:black;" href="php/thanhToan.php?id=<?php print $_SESSION['idKH']; ?>" class="list-group-item">Thanh toán</a>