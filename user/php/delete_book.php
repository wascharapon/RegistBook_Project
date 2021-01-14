<?php 
include'../../login/php/connect.php';
$id= $_GET['id'];

	$sql="DELETE FROM tb_book  WHERE id = '$id'";	
	 if(mysqli_query($con,$sql))
		 {
			 echo "<script>alert('ลบข้อมูลเรียบร้อย');window.location.href = '../index.php?page=show_data';</script>";
		 }
	
?>