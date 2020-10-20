<?php
session_start();
include('conn.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--icons-->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    
    

    <title>admin login</title>
<style>
#img_con{
	background-image:url(../images/admin.jpg);
	background-repeat:no-repeat;
	background-size:100% 100%;
	
	}
.txt{
	font-weight:bold;
	text-shadow:2px 2px 2px #00CC00;}
.head1{
	font-family:forte;
	font-weight:bold;
	font-size:40px;
	text-shadow:2px 2px 2px #000000;}
.txt1{
	font-weight:bold;
	font-size:18px;}
#user{
	position:absolute;
	top:4px;
	left:18px;
	}
#pss{
	position:absolute;
	top:12px;
	left:18px;
	}

</style>
<!--
<script>
 function validate(){
 var name=document.frm.uname.value;
 var pass=document.frm.ps.value;
 if(name==''){
	 alert('username is required');
	 return false;
	 }else if(pass==''){
	 alert('passwords is required');
	 return false; 
	 }
 
 }
</script>
-->
  </head>
  <body >
  
  <div class="container-fluid " id="img_con" >
    
    <div class="row bg-dark">
        <div class="col-sm-2 mt-2 mb-2"><img src="../images/SMS-Logo.png"  class="img-fluid"></div>
        <div class="col-sm-10"><h1 class="text-light mt-3 mb-3 text-center txt"><b>School Managment System</b></h1></div>
       
    </div>
    <!--header end-->
    
    <div class="container w-50  ">
   
    <div class="row">
    <div class="col-sm-12 bg-transparent p-5"></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light text-light">j</div>
    </div>
    <div class="row bg-light">
    <div class="col-sm-12 text-center "><h2 class="text-success head1 mb-5 mt-4">Admin Login</h2></div>
    </div>
    
    <div class="row">
    <div class="col-sm-12 bg-light"><hr></div>
    </div>
    <form method="post" action="admin_login.php" name="frm" onSubmit="return validate()">
    <div class="row bg-light ">
    <div class="col-sm-12"><i class="fas fa-user-circle" style='font-size:30px;color:green' id="user"></i><input type="text" class="form-control w-100 pl-5" name="uname" placeholder="Username*"></div>
    </div>
    <div class="row bg-light ">
    <div class="col-sm-12"><i class="fas fa-lock"style='font-size:30px;color:green' id="pss"></i><input type="password"placeholder="password*"  name="ps" class="form-control w-100 mt-2 pl-5" ></div>
    </div>
    
    <div class="row">
    <div class="col-sm-12 bg-light"><hr></div>
    </div>
    
    <div class="row">
    <div class="col-sm-12 bg-light text-light">j</div>
    </div>
    
    <div class="row">
    <div class="col-sm-12 bg-light">
    <input type="submit" value="login" name="login" class="btn-block btn-outline-success mt-2 p-2 float-right mb-2 "></div>
    </div>
   </form>
    <div class="row">
    <div class="col-sm-12 bg-transparent p-5"></div>
    </div>
    
    </div>
 <?php


if(isset($_POST['login'])){
	$name=$_POST['uname'];
	$pass=$_POST['ps'];
	
	$log_query="SELECT *FROM admin WHERE username='$name' AND password='$pass'";
	$run=mysqli_query($conn,$log_query);
	
	if(mysqli_num_rows($run)){
		$_SESSION['uname']=$_POST['uname'];
		
       echo"<script> window.open('dashbord.php'); </script>";
		}
        else{
			echo"<script>
			 alert('invalid username or password'); 
			 </script>";
			}
	
	}

?>
   

    
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.3.1.slim.min.js" ></script>
    <script src="../js/popper.min.js" ></script>
    <script src="../js/bootstrap.min.js"></script>
 
 
  </body>
</html>


