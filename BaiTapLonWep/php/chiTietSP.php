<script type="text/javascript">
function checkSL(){
var soluong=document.getElementById("soluong").value;
var soluongSP=document.getElementById("soluongSP").value;
if(soluongSP==0){
alert("Hết hàng!");	
}

}
</script>
<?php

 include "connected.php";
if(isset($_POST['giohang'])){
	
	if(isset($_SESSION['idKH'])){
		
$idKH=(int) $_SESSION['idKH'];
$idSP=(int)$_POST['idSP'];

$soluong=(int)$_POST['soluong'];
$gia=(float)($_POST['gia']*$soluong);
if($soluong>0 && $soluong<= $_POST['soluongSP']){
	$querry="select * from thongke where idSP=$idSP and idKH=$idKH";
$result1 = mysqli_query($conn, $querry);
if (mysqli_num_rows($result1) > 0) {
    while ($row = mysqli_fetch_assoc($result1)) {
		$slNew=$soluong+$row['soluong'];
		$giaNew=$gia+$row['gia'];
        $sqlUpdate="UPDATE thongke SET soluong=$slNew ,gia=$giaNew WHERE idSP=$idSP  and idKH=$idKH";
if(mysqli_query($conn, $sqlUpdate))
{
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
}
else{
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
}}
else{
header("location: http://localhost/BaiTapLonWep/TrangChu.php?header=dangnhap&id=1");	
}

}
?>


<div class="container" style="margin-top:100px;margin-bottom:170px;" >
<div class="row">
    <div class="col-lg-4" id="chucNang" >
    <?php
     if (isset($_GET['chitiet'])){
	$id=$_GET['chitiet'];
	$id=(int) $id;
      $sql = "select * from sanpham where id=$id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        print "<img style='width:250px;height:auto;' src=imgs/" . $row["link"] . " alt='anh'>" ;
    }
}}
?>
    
    </div>
    <div class="col-lg-8" id="chucNang" >
 
    <?php
	 if (isset($_GET['chitiet'])){
	$id=$_GET['chitiet'];
	$id=(int) $id;
      $sql = "select * from sanpham where id=$id";
$result = mysqli_query($conn, $sql);
$gia=0;
$soluongSP=0;
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
		$gia=$row['gia'];
		$soluongSP=$row['soluong'];
        print "<h3 >".$row["ten"] ."</h3>";
             print  "<p style='font-size:15px;'>". "Giá : " . $row["gia"]. "₫" ."<p>";
                
				 print  "<p style='font-size:15px;'>". "Loại : " . $row["loai"] ."<p>";
			  if($row['soluong']>0){
				echo"Tình trạng : Còn hàng (".$row['soluong'].")<br>";  
			  }
			  else echo"Tình trạng : Hết hàng<br>";  
    }
}}
?>


  <form  method="post" >
   <div class="form-group" >
   <input type="hidden" name="soluongSP" id="soluongSP" value= "<?php  print $soluongSP; ?>" >
     <input type="hidden" name="idSP" value= "<?php  print $id ?>" >
     <input type="hidden" name="gia" value= "<?php  print $gia ?>" >
     
        Số lượng  <input style="width:10%;" type="number" class="form-control" id="soluong" min="1" max="<?php  print $soluongSP ?>" value="1"   name="soluong" />
       
        <i style="color:red; id="checkSL"></i>
        
    
    <br><button type="submit" name="giohang" onClick="checkSL()" class="btn btn-default">Thêm vào giỏ hàng</button>
</form>
</div>
</div>

 </div>
