<?php 
include'../../login/php/connect.php';
$id= $_GET['id'];

	$sql="DELETE FROM admin_system  WHERE id = '$id'";	
	 if(mysqli_query($con,$sql))
		 {
			 echo "<script>alert('ลบข้อมูลเรียบร้อย');window.location.href = '../add_member.php?page=add_member';</script>";
		 }
	
?>