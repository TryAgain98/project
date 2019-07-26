<?php
 include "connected.php";
	 $name=$_POST['name'];
	  $pass=$_POST['pass'];
	   $email=$_POST['email'];
	   	$phone=$_POST['phone'];
		$address=$_POST['address'];

	$sql = "INSERT INTO khachhang (name, pass, email,phone,address)
    VALUES ('$name', '$pass', '$email','$phone','$address')";
	if ( mysqli_query($conn, $sql)) {
	header('Location: http://localhost/BaiTapLonWep/TrangChu.php?fixSanPham=thongbao');
    } else {
       header('Location: http://localhost/BaiTapLonWep/TrangChu.php?header=dangky&id=1');
 
    }
		
?>