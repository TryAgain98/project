<?php
session_start();
 include "connected.php";
if(isset($_POST['giohang'])){
$idKH=(int) $_SESSION['idKH'];
$idSP=(int)$_POST['idSP'];

$soluong=(int)$_POST['soluong'];
$gia=(float)($_POST['gia']*$soluong);


	$sql="insert into thongke(idKH,idSP,gia,soluong) values ($idKH,$idSP,$gia,$soluong)";
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
<?php
 include "connected.php";
if(isset($_POST['giohang'])){

$sqlSP="select * from sanpham where id=$idSP";
$soluongNew=0;
$result = mysqli_query($conn, $sqlSP);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
           $soluongNew=$row['soluong']- $soluong;   
    }
}

$sqlUpdate="UPDATE sanpham SET soluong=$soluongNew WHERE id=$idSP ";
mysqli_query($conn, $sqlUpdate);
}
?>