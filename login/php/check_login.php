<?php 
session_start();
include'connect.php';
if($_POST['username']!=''&&$_POST['password']!='')
{
	$username = $_POST['username'];
$password = $_POST['password'];
 $sql = "SELECT * FROM admin_system WHERE username='$username' && password='$password'";
$rs = mysqli_query($con,$sql);
$num = mysqli_num_rows($rs);

if($num==1)
{
  if($bn=mysqli_fetch_array($rs))
  {	  
  $_SESSION['id']=$bn['id'];
	    $_SESSION['status']=$bn['status'];
			$_SESSION['name']=$bn['name'];
		if($_SESSION['status']=='admin')
		{
		
		echo "<script>window.location.href = '../../admin/index.php?page=show_data';</script>";
		}
		else if ($_SESSION['status']=='member')
		{
			
			echo "<script>window.location.href = '../../user/index.php?page=show_data';</script>";
		}
  }
}
else
{
	echo "<script>alert('ไอดีหรือรหัสผ่านไม่ถูกต้อง');window.location.href = '../login.php';</script>";
}
}
else
{
	echo "<script>alert('กรุณากรอกข้อมูลให้เรียบร้อบ');window.location.href = '../login.php';</script>";
}

?>