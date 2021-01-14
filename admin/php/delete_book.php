<?php 
include'../../login/php/connect.php';
$id= $_GET['id'];

	$sql="DELETE FROM tb_book  WHERE id = '$id'";	
	 if(mysqli_query($con,$sql))
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
			 echo "<script>alert('ลบข้อมูลเรียบร้อย');window.location.href = '../index.php?page=show_data';</script>";
		 }
	
?>