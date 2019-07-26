<?php
  include "connected.php";
?>
<?php
 if(isset($_GET['fixSanPham'])){
	$id=$_GET['fixSanPham'];
	$id=(int) $id;
	}
$sql = "DELETE FROM sanpham WHERE id = $id";
if ( mysqli_query($conn, $sql)) {
	header('Location: http://localhost/BaiTapLonWep/php/quanly.php');
    } else {
        echo "thất bại";
    }
	
?>
<?php
if(isset($_GET['deleteSanPhamKH'])){

	$id=$_GET['deleteSanPhamKH'];
	$id=(int) $id;
	
$sqll = "DELETE FROM thongke WHERE idGH =$id";
if (mysqli_query($conn, $sqll)) {
	
    echo "Record deleted successfully";
	
	header('Location: http://localhost/BaiTapLonWep/TrangChu.php?header=gioHang&id=1');
	echo "<script>alert('xoa thanh cong');</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
	
	}
?>