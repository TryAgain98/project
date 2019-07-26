
<style>
.error{
color:red;	
font-size:20px;
}
</style>

<script type="text/javascript">
function errorName(){
	var name=document.getElementById("name").value;
	if(name==''){
	document.getElementById("errorName").innerHTML="vui lòng nhập tên";
	}
	
	else{
		document.getElementById("errorName").innerHTML="";
	}
}
function errorPass(){
	var pass=document.getElementById("pass").value;
	if(pass==''){
	document.getElementById("errorPass").innerHTML="vui lòng nhập khẩu";
	}
	else if(/^[a-zA-Z0-9- ]*$/.test(pass) == false) { 
    document.getElementById("errorPass").innerHTML="mật khẩu không gồm ký tự đặc biệt";
}
	else{
		document.getElementById("errorPass").innerHTML="";
	}
}

function errorEmail(){
	var email=document.getElementById("email").value;
	if(email==''){
	document.getElementById("errorEmail").innerHTML="vui lòng nhập email";
	}
	else{
		document.getElementById("errorEmail").innerHTML="";
	}
}
function errorPhone(){
	var phone=document.getElementById("phone").value;
	 var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	if(phone==''){
	document.getElementById("errorPhone").innerHTML="vui lòng nhập số điện thoại";
	}
	else if (vnf_regex.test(phone) == false) {
		document.getElementById("errorPhone").innerHTML="Số điện thoại không đúng định dạng";
	}
	else{
		document.getElementById("errorPhone").innerHTML="";
	}
}

function errorAddress(){
	var address=document.getElementById("address").value;
	if(address==''){
	document.getElementById("errorAddress").innerHTML="vui lòng nhập địa chỉ";
	}
	else{
		document.getElementById("errorAddress").innerHTML="";
	}
}


function error(){
	var name=document.getElementById("name").value;
	var name=document.getElementById("name").value;
	if(name==''){
	document.getElementById("errorName").innerHTML="vui lòng nhập tên";
	return false;
	}
	
	else{
		document.getElementById("errorName").innerHTML="";
	}
	var pass=document.getElementById("pass").value;
	if(pass==''){
	document.getElementById("errorPass").innerHTML="vui lòng nhập khẩu";
	return false;
	}
	else if(/^[a-zA-Z0-9- ]*$/.test(pass) == false) { 
    document.getElementById("errorPass").innerHTML="mật khẩu không gồm ký tự đặc biệt";
	return false;
}
	else{
		document.getElementById("errorPass").innerHTML="";
	}
	
	var email=document.getElementById("email").value;
	if(email==''){
	document.getElementById("errorEmail").innerHTML="vui lòng nhập email";
	return false;
	}
	else{
		document.getElementById("errorEmail").innerHTML="";
	}
	var phone=document.getElementById("phone").value;
	 var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	if(phone==''){
	document.getElementById("errorPhone").innerHTML="vui lòng nhập số điện thoại";
	return false;
	}
	else if (vnf_regex.test(phone) == false) {
		document.getElementById("errorPhone").innerHTML="Số điện thoại không đúng định dạng";
		return false;
	}
	else{
		document.getElementById("errorPhone").innerHTML="";
	}
	
	var address=document.getElementById("address").value;
	if(address==''){
	document.getElementById("errorAddress").innerHTML="vui lòng nhập địa chỉ";
	return false;
	}
	else{
		document.getElementById("errorAddress").innerHTML="";
	}
}

</script>
 
<div class="container" style="margin-top:90px;width:100%;height:400px;">
 <h3 style="margin-left:400px;">Đăng ký </h3>
  <form class="form-horizontal" action="php/xulyDK.php" onsubmit="return error()"  id="form-dk" method="POST">
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Tên đăng nhập:</label>
      <div class="col-sm-5">
        <input  type="text" class="form-control" id="name" placeholder="Nhập tên" name="name" >
              </div>
              <div class="col-sm-5">
              <span id="errorName" class="error"></span>
              </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Mật khẩu:</label>
      <div class="col-sm-5">          
        <input onclick="errorName()" type="password" class="form-control" id="pass"  placeholder="Mật khẩu" name="pass" >
      </div>
      <div class="col-sm-5">
              <span id="errorPass" class="error"></span>
              </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-5">
        <input onclick="errorPass();errorName()" type="email" class="form-control" id="email" placeholder="Enter email" name="email" >

      </div>
        <div class="col-sm-5">
              <span id="errorEmail" class="error"></span>
              </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Số điện thoại:</label>
      <div class="col-sm-5">
        <input onclick="errorPass();errorName();errorEmail();" type="text" class="form-control" id="phone" placeholder="Số điện thoại" name="phone" >
      </div>
        <div class="col-sm-5">
              <span id="errorPhone" class="error"></span>
              </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Địa chỉ:</label>
      <div class="col-sm-5">
        <input  onclick="errorPass();errorName();errorEmail();errorPhone()"  type="text" class="form-control" id="address" placeholder="Địa chỉ" name="address" >
      </div>
        <div class="col-sm-5">
              <span id="errorAddress" class="error"></span>
              </div>
    </div>
    
    <div class="form-group">        
      <div >
        <button style="margin-left:415px;" type="submit"  name="dangKy" class="btn btn-default">Đăng ký</button>
      </div>
    </div>
    
  </form>
</div>

