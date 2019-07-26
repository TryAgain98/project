<style>
#cuon{
	padding: 4px 11px;
	text-align:center;
font-size:20px;
margin:5px;
background-color:#e6e6e6; 
box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
	  text-align: center;
  text-decoration: none;
  display: inline-block;
  color:black;

}

#cuon:hover ,#cuon:active {
	 text-decoration: none;
	 border:1px solid #cccccc;
	 padding: 3px 10px;
	 
}
</style>
  <h5 style="font-weight:bold;">DÀNH RIÊNG CHO BẠN </h5>
<?php
if(isset($_GET['trang'])){
$get_trang=$_GET['trang'];	
}
else{
	$get_trang='';
}
if($get_trang==''||$get_trang==1){
$trang1=0;	
}
else{
	$trang1=($get_trang*8)-8;
}
$sql = "select * from sanpham limit $trang1,8 ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        print"<a href='http://localhost/BaiTapLonWep/TrangChu.php?chitiet=".$row["id"]."' id='asp'> <table id='tableSP' onclick=table()>"
                . "<tr><td>" . "<img id='imgTable'  src=imgs/" . $row["link"] . " alt='anh'" . "</td></tr>"
                . "<tr id='tdTen'><td >" . $row["ten"] . "</td></tr>"
                . "<tr id='tdGia'><td >" .  $row["gia"] .  "₫" ."</td></tr>" ."</table></a>";
    }
}
?>
<p></p>
<span style="font-size:15px;">Trang :<span>
<?php
$sql = "select * from sanpham";
$result = mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);
$a=ceil($count/8);
for($b=1;$b<=$a;$b++){
echo '<a id="cuon" href="?trang='.$b.'">'.' '.$b.' '.'</a>' ;	
}
?>