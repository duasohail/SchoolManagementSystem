<?php
include('conn.php');

$edit_id=$_GET['edit'];
$sel_query="select * from std_record where std_id='$edit_id'";
$run=mysqli_query($conn,$sel_query);
while($row=mysqli_fetch_array($run)){
	$serial=$row['std_id'];
	 $roll=$row['std_rollno'];
	 $name=$row['std_name'];
	 $city=$row['std_city'];
	 $mobno=$row['std_contact'];
	 $course=$row['std_course'];
	 $prof=$row['std_profile'];
	}

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

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>edit</title>
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
#no{
	position:absolute;
	top:10px;
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
    <div class="col-sm-12 bg-light head1 text-success"><h1 class="text-center mt-2"> Edit Student Record</h1></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light"><hr></div>
    </div>
    <form method="post" action="edit.php?editid=<?php echo $serial;?>" enctype="multipart/form-data">
    <div class="row">
    <div class="col-sm-12 bg-light"><i class="material-icons" id="no">format_list_numbered</i>
    <input type="text" name="roll" value="<?php echo $roll; ?>" class="form-control w-100  mb-3 pl-5" placeholder="roll no"></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light"><i class="fas fa-user-circle" style='font-size:30px;color:green' id="user"></i>
    <input type="text" name="nme" value="<?php echo $name; ?>" class="form-control w-100  mb-3 pl-5" placeholder="Name"></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light"><input type="text" value="<?php echo $city; ?>" name="cty" class="form-control w-100  mb-3" placeholder="city"></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light">
    <input type="text"  name="mob" value="<?php echo $mobno; ?>" class="form-control w-100  mb-3" placeholder="mobile number"></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light"><select  name="crs" class="form-control w-100  mb-3">
    <option value="<?php echo $course; ?>"><?php echo $course; ?></option>
    <option value="web designing">web designing</option>
    <option value="web developing">web developing</option>
    <option value="graphic designing">graphic designing</option>
    </select></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light text-dark"><label> choose image</label></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light"><input type="file" name="image" class="  mb-3 "  ></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light card-footer">
    <input type="submit" value="update"  name="update" class="btn-block btn-outline-success mt-2 p-2 mb-2 "></div>
    </div>
    
    </form>
    
    </div>  
    </div>
    <?php
    if(isset($_POST['update'])){
		
	$edit=$_GET['editid'];
	
	$rollno=$_POST['roll'];
	$nam=$_POST['nme'];
	$ct=$_POST['cty'];
	$cntct=$_POST['mob'];
	$cors=$_POST['crs'];
	$img=$_FILES['image']['name'];
	$tmp_img=$_FILES['image']['tmp_name'];

	move_uploaded_file($tmp_img,"profile/$img");
	$update="UPDATE std_record SET std_rollno='$rollno',std_name='$nam',std_city='$ct',std_contact='$cntct',std_course='$cors',std_profile='$img' WHERE std_id='$edit'";
	
	$update_run=mysqli_query($conn,$update);
	
	if($update_run){
		echo"
		<script>
		window.open('dashbord.php?update=data updated!','_self');
		</script>
		";
		}else{
			echo"<script> alert('try again'); </script>";
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