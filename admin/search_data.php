<?php include'header.php'?>

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
				
					<div class="col-lg-12">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-money" aria-hidden="true"></span>ตารางข้อมูลยอดหนังสือ</small></h3>
									</div>
									<div class="panel-body">
									<form role="form" class="lead" action="show_data.php" method="GET" >
										<div class="row">
									
										<table id="customers">
  					<tr>
						<th><center>ลำดับ</center></th>
    <th><center>วัน/เดือน/ปี</center></th>
	<th><center>จำนวนหนังสือ</center></th>
  </tr>
  <tr>
  <?php 
	$count=0;
	$array_temp = array();
	$page=$_GET['page_s'];
	$data_total=$page*6;
	$i_order=($page-1)*7;
	
  	   $sql ="SELECT * FROM balance order by date desc"; 
				$rs = @mysqli_query($con, $sql);
						while ($row_total = mysqli_fetch_array($rs))
	         {	 
						 $day=	date("d-m-Y",strtotime($row_total['date']));
						$array_temp[$count] = array("order"=>"$count","day"=>"$day","total_list"=>"$row_total[total_list]");
						$count++;
					}
					$count-1;
					while(($i_order <= $data_total)&&($i_order!=$count)) {
					?>  
						  <tr>
	<td><center><?php echo $array_temp[$i_order]['order']+1;?></center></td>
	<td><center><?php echo $array_temp[$i_order]['day'];?></center></td>
	<td><center><?php echo $array_temp[$i_order]['total_list'];?></center></td>
  </tr>
					<?php $i_order++; }
	?>
	
	</tr>
  <tr> </table>
				
										</div>
								
									</form>
									<center>
									<?php 
									for($page_count=1;$page_count<=($count%7);$page_count++){ if($page_count!=$_GET['page_s']){?>
									<a  href="search_data.php?page=search_data&&page_s=<?php echo $page_count;?>"><button style="width:45px;height:40px;" type="button"  class="btn btn-skin btn-block btn-lg"><span ><?php echo $page_count;?>&nbsp;</span></button></a>
									<?php }else{
										?>
									<a  href="search_data.php?page=search_data&&page_s=<?php echo $page_count;?>"><button style="width:45px;height:40px;color:#fff;background-color:#444;border-color:#444;" type="button"  class="btn btn-skin btn-block btn-lg"><span ><?php echo $page_count;?>&nbsp;</span></button></a>
									<?php 
									} }?>
									<center>
								</div>
							</div>				
							<div class="panel panel-skin">
						<div class="panel-heading">
								<h3 class="panel-title"><span class="fa fa-book"></span>ยอดหนังสือ <small></small></h3>
								</div>
								<div class="panel-body">
								<?php
				$time=date("Y-m-d",time());
				$sql ="SELECT * FROM tb_book  where date = '$time'"; 			
				$rs = @mysqli_query($con, $sql);
				 $row_day = mysqli_num_rows($rs); 
			
				 $time=date("m",time());
				 $sql ="SELECT * FROM tb_book  where Month(date) = '$time'"; 			
				 $rs = @mysqli_query($con, $sql);
					$row_month = mysqli_num_rows($rs); 

					$time=date("Y",time());
					$sql ="SELECT * FROM tb_book  where Year(date) = '$time'"; 			
					$rs = @mysqli_query($con, $sql);
					 $row_year = mysqli_num_rows($rs); 

					 $sql ="SELECT * FROM tb_book "; 			
					 $rs = @mysqli_query($con, $sql);
						$row_total = mysqli_num_rows($rs); 
				 ?>

		
			 <div class="counter">
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="employees">
				<p class="counter-count"><?php echo $row_day;?></p>
				<p class="employee-p">รายวัน</p>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="customer">
				<p class="counter-count"><?php echo $row_month;?></p>
				<p class="customer-p">รายเดือน</p>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="design">
				<p class="counter-count"><?php echo $row_year;?></p>
				<p class="design-p">รายปี</p>
			</div>
		</div>

		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<div class="order">
				<p class="counter-count"><?php echo $row_total;?></p>
				<p class="order-p">ยอดรวม</p>
			</div>
		</div>
	</div>
</div>
</div>
							</div>
						</div>			
								</div>
							</div>				
						
						</div>
						</div>
						
					</div>					
				</div>		
			
				</div>					
			</div>	
			</div>
		</div>		
    </section>
	
	<!-- /Section: intro -->
		
	
	<?php include'footer.php'?>