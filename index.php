<?php
$conn=mysqli_connect('localhost','root','','sms');

if(isset($_POST['s_rollno'])){
		$roll = $_POST['s_rollno'];
	  $std_course = $_POST['crs'];


	  $query_search="select * from std_record where std_rollno='$roll' AND std_course='$std_course'";

	  $records=mysqli_query($conn,$query_search);

	  if(mysqli_num_rows($records)){
	    $students = $records->fetch_assoc();

			$stdns = $students;
	  }
	} else {
		$stdns = array();
	}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>sms</title>
<style>

#img_con{
	background-image:url(images/23.jpg);
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
        <div class="col-sm-2  mt-2 mb-2"><img src="images/SMS-Logo.png"  class="img-fluid"></div>
        <div class="col-sm-8"><h1 class="text-light mt-3 mb-2 text-center txt"><b>School Managment System</b></h1></div>
        <div class="col-sm-2"><a href="admin/admin_login.php" class="btn btn-success mt-4"><b>admin login</b></a></div>
    </div>
    <!--header end-->
    
    <div class="container w-50 mr-5 ">
    
    <div class="row">
    <div class="col-sm-12 bg-transparent p-5"></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-light pt-4 "></div>
    </div>
    <div class="row bg-light">
    <div class="col-sm-12 text-center "><h2 class="text-success head1 mb-5 mt-4">Find Student Record</h2></div>
    </div>
    
    <div class="row">
    <div class="col-sm-12 bg-light"><hr></div>
    </div>
    <form method="post" action="index.php">
    <div class="row bg-light ">
    <div class="col-sm-2 text-center"><label class="text-dark txt1"> roll no:</label></div>
    <div class="col-sm-4"><input type="text" class="form-control w-100" name="s_rollno" ></div>
    <div class="col-sm-2 text-center"><label class="text-dark txt1"> course:</label></div>
    <div class="col-sm-4"><select class="form-control w-100" name="crs" >
    <option >select course</option>
    <option value="web designing">web designing</option>
    <option value="web developing">web developing</option>
    <option value="graphic designing">graphic designing</option>
    </select></div>
    </div>
    
    <div class="row">
    <div class="col-sm-12 bg-light"><hr></div>
    </div>
    
    <div class="row">
    <div class="col-sm-12 bg-light pt-3"></div>
    </div>
    
    <div class="row">
    <div class="col-sm-12 bg-light">
    <input type="submit" value="search" name="search" class="btn btn-outline-success mt-3 float-right mb-3 " ></div>
    </div>
    </form>
    <div class="row">
    <div class="col-sm-12 bg-transparent p-4"></div>
    </div>
    <div class="row">
    <div class="col-sm-12 bg-transparent p-5"></div>
    </div>
    </div>
    </div>
     <div class="container-fluid bg-light">
     <div class="container w-75 bg-light">
     <div class="row">
     <?php if(!empty($stdns)) { ?>
     <h1  class="text-center text-success bg-light w-100 head1 p-5">RECORDS</h1>
           <table class="table table-responsive-lg table-responsive-sm table-hover ">
           <tr>
           <td colspan="2" class="text-center p-4">
           <img src="<?php $image =$stdns['std_profile']; ?>"; >
           <img src="<?=$image?>" width="150px" height="200px" class=" img-fluid"></div>
           </td>
           </tr>
           <tr>
           <th><span class="text-dark pt-4">Student name</span></th>
           <td><?=$stdns['std_name']?></td>
           </tr>
           <tr>
            <th><span class="text-dark pt-4">Roll no</span></th>
            <td><?=$stdns['std_rollno']?></td>
           </tr>
           <tr>
            <th><span class="text-dark pt-4">city</span></th>
            <td><?=$stdns['std_city']?></td>
            </tr>
            <tr>
            <th><span class="text-dark pt-4">contact Number</span></th>
            <td><?=$stdns['std_contact']?></td>
            </tr>
            <tr>
            <th><span class="text-dark pt-4">Course</span></th>
            <td><?=$stdns['std_course']?></td>
          </tr>
           </table>
           <?php } ?>
     </div>
     </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
 
  </body>
</html>