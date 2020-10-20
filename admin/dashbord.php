<?php
session_start();
include('conn.php');
if(isset($_SESSION['uname'])){
	echo"";
	}else{
		echo "<script> window.open('admin_login.php'); </script>";
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

    <title>dashboard</title>
<style>


#img_con{
	background-image:url(../images/updated.jpg);
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

</style>
  </head>
  <body>
     <div class="container-fluid " id="img_con" >
    
    <div class="row bg-dark">
        <div class="col-sm-2  mt-2 mb-2"><img src="../images/SMS-Logo.png"  class="img-fluid"></div>
        <div class="col-sm-8"><h1 class="text-light mt-3 mb-2 text-center txt"><b>School Managment System</b></h1></div>
        <div class="col-sm-2"><a href="logout.php" class="btn btn-success mt-4 float-right "><b>logout</b></a></div>
    </div>
    <!--header end-->
    
    <div class="container w-75 ">
    <div class="row">
    <div class="col-12  bg-transparent mt-2 mb-2"></div>
    </div>
    <div class="row bg-light">
    <div class="col-sm-9">
    <h1 class="head1  text-success mt-3 mb-2">Student Record</h1></div>
    <div class="col-sm-3"><a href="insert.php" class="btn btn-outline-success mt-3 float-right">Add new student</a></div>
    </div>
    <div class="row bg-light">
    <table class="table table-responsive-sm table-responsive-lg" >
      <tr class="tab-content bg-dark text-light ">
        <th class="text-center">s/no</th>
        <th class="text-center">roll no</th>
        <th class="text-center">Name</th>
        <th class="text-center">City</th>
        <th class="text-center">contact number</th>
        <th class="text-center">course</th>
        <th class="text-center">profile</th>
        <th class="text-center">edit</th>
        <th class="text-center">delete</th>
      </tr>
 <?php
 
 $sel_query="select * from std_record";
 
 $run=mysqli_query($conn,$sel_query);
 $i=1; //for change series
 
 while($row=mysqli_fetch_array($run)){
	 
	 $serial=$row['std_id'];
	 $roll=$row['std_rollno'];
	 $name=$row['std_name'];
	 $city=$row['std_city'];
	 $mobno=$row['std_contact'];
	 $course=$row['std_course'];
	 $prof=$row['std_profile'];
 
 ?>
      <tr>
      <td class="text-center"><?php echo $i; $i++?></td>
      <td class="text-center"><?php echo $roll?></td>
      <td class="text-center"><?php echo $name?></td>
      <td class="text-center"><?php echo $city?></td>
      <td class="text-center"><?php echo $mobno?></td>
      <td class="text-center"><?php echo $course?></td>
      <td class="text-center"><?php echo "<img src='profile/$prof' width='50' height='80' class='img-fluid'>";?></td>
      <td class="text-center">
      <a href="edit.php?edit=<?php echo $serial;?>" class="btn btn-outline-success "> Edit </a></td>
      <td class="text-center">
      <a href="delete.php?delete=<?php echo $serial;?>" class="btn btn-outline-dark "> delete</a></td>
      </tr>
      <?php } ?>
  </table>
    </div>
    
    </div>  
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.3.1.slim.min.js" ></script>
    <script src="../js/popper.min.js" ></script>
    <script src="../js/bootstrap.min.js"></script>
 
 
  </body>
</html>