<?php
include('conn.php');

$del=$_GET['delete'];
$del_query="delete from std_record where std_id='$del'";

$del_run=mysqli_query($conn,$del_query);

if($del_run){
	header('location:dashbord.php');
	
	}else{
		echo"try again";
		}


?>