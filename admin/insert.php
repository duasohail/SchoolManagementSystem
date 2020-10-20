<?
session_start();
include('conn.php');

/*if(isset($_SESSION['uname'])){
	echo"";
	}else{
		header('location:admin_login.php');

		}*/	
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <title>insert data</title>
<style>


#img_con{
	background-image:url(../images/12.jpg);
	background-repeat:no-repeat;
	background-size:100% 100%;
	
	}
.head1{
	font-family:forte;
	font-weight:bold;
	font-size:40px;
	text-shadow:2px 2px 2px #000000;}
.txt1{
	font-weight:bold;
	font-size:15px;}
.txt{
	font-weight:bold;
	text-shadow:2px 2px 2px #00CC00;}
#user{
	position:absolute;
	top:5px;
	left:18px;
	}
</style>
  </head>
  <body>
    <div class="container-fluid  " id="img_con" >
    
    <div class="row bg-dark">
        <div class="col-sm-2  mt-2 mb-2"><img src="../images/SMS-Logo.png"  class="img-fluid"></div>
        <div class="col-sm-8"><h1 class="text-light mt-3 mb-2 text-center txt"><b>School Managment System</b></h1></div>
        <div class="col-sm-2"><a href="../logout.php" class="btn btn-success mt-4 float-right"><b>logout</b></a></div>
    </div>
    <!--header end-->
    <div class="container mt-5 w-50 ">
    
    <div class="row">
    <div class="col-sm-12 bg-light head1 text-success"><h1 class="text-center mt-2"> Insert Student Record</h1></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light"><hr></div>
    </div>
    <form method="post" action="#" name="frm" enctype="multipart/form-data">
    <div class="row">
    <div class="col-sm-12 bg-light"><input type="text" name="rn" class="form-control w-100  mb-3" placeholder="roll no"></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light"><i class="fas fa-user-circle" style='font-size:30px;color:green' id="user"></i>
    <input type="text" name="nm" class="form-control w-100  mb-3 pl-5" placeholder="Name"></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light"><input type="text" name="city" class="form-control w-100  mb-3" placeholder="city"></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light">
    <input type="text" name="cn" class="form-control w-100  mb-3" placeholder="mobile number"></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light"><select name="course" class="form-control w-100  mb-3">
    <option >select course</option>
    <option value="web designing">web designing</option>
    <option value="web developing">web developing</option>
    <option value="graphic designing">graphic designing</option>
    </select></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light text-dark"><label> choose image</label></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light"><input type="file" name="img" class="  mb-3 "  ></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light card-footer">
    <input type="submit" value="submit" name="sub" class="btn-block btn-outline-success mt-2 p-2 mb-2 "></div>
    </div>
    </form>
    
<?php
if(isset($_POST['sub'])){
	$rollno=$_POST['rn'];
	$name=$_POST['nm'];
	$cty=$_POST['city'];
	$mobno=$_POST['cn'];
	$crs=$_POST['course'];
	$image=$_FILES['img']['name'];
	$tmp_image=$_FILES['img']['tmp_name'];

	move_uploaded_file($tmp_image,"profile/$image");
	
	$insertdata="insert into std_record(std_rollno,std_name,std_city,std_contact,std_course,std_profile)values('$rollno','$name','$cty','$mobno','$crs','$image')";
	 $query=mysqli_query($conn,$insertdata);
	if($query){
		?>
        <script>
		window.open('dashbord.php','_self')
		</script>
	<?php
    }else{
		header('location:insert.php');
		
		}
	
}
?>    
    </div>  
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.3.1.slim.min.js" ></script>
    <script src="../js/popper.min.js" ></script>
    <script src="../js/bootstrap.min.js"></script>
 
 
  </body>
</html>