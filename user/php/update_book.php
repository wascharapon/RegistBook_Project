<?php 
include'../../login/php/connect.php';
$get_book=$_POST['get_book'];
$form=$_POST['form'];
$from_to=$_POST['from_to'];
$titel=$_POST['titel'];
$another=$_POST['another'];
$time=date("Y-m-d",time());
$time_this=$_POST['date'];
$id= $_POST['id'];
//upload image
$file_pdf = pathinfo(basename($_FILES['file_pdf']['name']),PATHINFO_EXTENSION);
if(pathinfo(basename($_FILES['file_pdf']['name']),PATHINFO_EXTENSION)!='')
{
	$new_image_name =time().".".$file_pdf;
	$image_path ="../pdf_file/";
	$upload_path = $image_path.$new_image_name;
	$succes=move_uploaded_file($_FILES['file_pdf']['tmp_name'],$upload_path);
	 if($succes == false)
	 {
		 echo "ไม่สามารถ upload รูปภาพได้ ";
		 echo mysqli_errno($con);
		 exit();
	 }
	$sql ="UPDATE tb_book
SET file_pdf ='$new_image_name',date='$time_this',get_book= '$get_book',form='$form',from_to= '$from_to'
,titel='$titel',another='$another'
WHERE id = '$id'";
}
else 
{
	$sql ="UPDATE tb_book
SET date='$time_this',get_book= '$get_book',form='$form',from_to= '$from_to',titel='$titel',another='$another'
WHERE id = '$id'";
}

if($rs = @mysqli_query($con, $sql))
{
	echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location.href = '../index.php?page=show_data';</script>";
}
else
{
	echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');window.location.href = '../index.php?page=show_data;</script>".mysqli_errno($con);
}
?>
