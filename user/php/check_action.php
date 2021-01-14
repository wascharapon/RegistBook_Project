<?php 
session_start();
error_reporting(0);
if($_SESSION['status']!='member')
{
		echo "<script>window.location.href = '../index.php';</script>";
}
?> 