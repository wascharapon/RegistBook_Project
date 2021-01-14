<?php 
include'../../login/php/connect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$id=$_POST['id'];
$sql ="UPDATE admin_system
SET username = '$username',password = '$password',name = '$name',email = '$email',
phone = '$phone'
WHERE id = '$id'";

if($rs = @mysqli_query($con, $sql))
{
	echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');window.location.href = '../add_member.php?page=add_member';</script>";
}
else
{
	echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');</script>".mysqli_errno($con);
}
?>