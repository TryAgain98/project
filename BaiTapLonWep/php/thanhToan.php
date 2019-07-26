<?php
  include "connected.php";
?>
<div style="margin-top:200px">
<?php
$idKH=(int)$_GET['id'];
$sql = "select * from thongke where idkh=$idKH";
$result = mysqli_query($conn, $sql);
 $date = getdate();
 $day=(string)$date['mday'];
 $month=(string)$date['mon'];
 $year=(string)$date['year'];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
		$idkhtk=$row['idKH'];
		$idsp=$row['idSP'];
		$soluong=$row['soluong'];
		$gia=$row['gia'];
            $querry="insert into thongkechitiet(idKH,idSP,soluong,gia,time) values ($idkhtk,$idsp,$soluong,$gia,'$year-$month-$day')";
			 if(mysqli_query($conn, $querry)){
				echo"ok"; 
			 }
			 else echo "lol";
			 

}

}

$sqll = "DELETE FROM thongke WHERE idkh =$idKH";
if (mysqli_query($conn, $sqll)) {
	header("location: http://localhost/BaiTapLonWep/TrangChu.php?header=gioHang&id=1");
}
  ?>


</div>