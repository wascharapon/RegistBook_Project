<?php 
include'../../login/php/connect.php';
session_start();
$get_book=$_POST['get_book'];
$form=$_POST['form'];
$from_to=$_POST['from_to'];
$titel=$_POST['titel'];
$another=$_POST['another'];
$time=date("Y-d-m",time());
$time_this=$_POST['date'];
$recipient=$_SESSION['name'];
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
	 $sql ="INSERT INTO tb_book (get_book,date,form,from_to,titel,another,file_pdf,recipient) 
	 VALUES ('$get_book','$time_this','$form','$from_to','$titel','$another','$new_image_name','$recipient');";
	  
}
else 
{
	$sql ="INSERT INTO tb_book (get_book,date,form,from_to,titel,another,recipient) 
	VALUES ('$get_book','$time_this','$form','$from_to','$titel','$another','$recipient');";
}

if($rs = @mysqli_query($con, $sql))
{	
	$sql_delete ="DELETE FROM balance";
	$rs_delete = @mysqli_query($con,$sql_delete);
	$sql_loop ="SELECT COUNT(date) AS count_date,date
	FROM tb_book
	GROUP BY date ";
	$rs_loop = @mysqli_query($con, $sql_loop);
	while ($row_count = mysqli_fetch_array($rs_loop))
	{	
		$day_time=$row_count['date'];
		$count_date=$row_count['count_date'];
	$sql_chacking_a ="SELECT * FROM balance WHERE date = '$day_time'";
	$rs_chacking_a = @mysqli_query($con, $sql_chacking_a);
	$row_day=mysqli_num_rows($rs_chacking_a); 
		if($row_day==0)
		{	
			$sql_b ="INSERT INTO balance (date,total_list) 
			VALUES ('$day_time','$count_date');";
			$rs_chacking_b = @mysqli_query($con, $sql_b);
		}
	else if($row_day==1)
		{ 
			
			$sql_total ="SELECT * FROM tb_book  where date = '$day_time'"; 			
 			 $rs_total = @mysqli_query($con,$sql_total);
			 $total = mysqli_num_rows($rs_total); 
			 
			$sql_b ="UPDATE balance
			SET total_list = '$total' WHERE date = '$day_time'";
			$rs_chacking_b = @mysqli_query($con, $sql_b);
		}
	}
		echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location.href = '../index.php?page=show_data';</script>";
}
else
{
	echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');window.location.href = '../index.php?page=show_data;</script>".mysqli_errno($con);
}
?>
