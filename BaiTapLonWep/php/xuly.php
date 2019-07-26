  <h5 style="font-weight:bold;">CÁC SẢN PHẨM TÌM THẤY</h5>
<?php
if(isset($_POST['search'])){
	$search=$_POST['name'];

$sql = "select * from sanpham where ten like '%$search%' or loai like '%$search%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        
        print"<a href='http://localhost/BaiTapLonWep/TrangChu.php?chitiet=".$row["id"]."' id='asp'> <table id='tableSP' onclick=table()>"
                . "<tr><td>" . "<img id='imgTable'  src=imgs/" . $row["link"] . " alt='anh'" . "</td></tr>"
                . "<tr id='tdTen'><td >" . $row["ten"] . "</td></tr>"
                . "<tr id='tdGia'><td >" . $row["gia"] .  "₫" ."</td></tr>"  ."</table></a>";
    }
}}
?>
<?php
 if(isset($_GET['sanpham'])){
 $loai=$_GET['sanpham'];
$sql = "select * from sanpham where loai = '$loai'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        
          print"<a href='http://localhost/BaiTapLonWep/TrangChu.php?chitiet=".$row["id"]."' id='asp'> <table id='tableSP' onclick=table()>"
                . "<tr><td>" . "<img id='imgTable'  src=imgs/" . $row["link"] . " alt='anh'" . "</td></tr>"
                . "<tr id='tdTen'><td >" . $row["ten"] . "</td></tr>"
                . "<tr id='tdGia'><td >"  . $row["gia"] .  "₫" ."</td></tr>" . "</table></a>";
    }
}
}
?>