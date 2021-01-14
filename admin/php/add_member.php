<?php 
include'../../login/php/connect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$sql ="INSERT INTO admin_system (username,password,name,phone,email,status) 
VALUES ('$username','$password','$name','$phone','$email','member');";

$query = mysqli_query($con,$sql);
	if($query) {
echo "<script>alert('เพื่มข้อมูลเรียบร้อย');window.location.href = '../add_member.php?page=add_member';</script>";
	}
	else
	{
		echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($con);
	}
?>