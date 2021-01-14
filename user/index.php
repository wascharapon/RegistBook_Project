<?php include'header.php'?>

	<!-- Section: intro -->
    <section id="intro" class="intro" >
		<div class="intro-content">
			<div class="container">
			<div class="row">
				<div class="col-lg-12">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-search"></span>ค้นหาข้อมูล</small></h3>
									</div>
									<div class="panel-body">
									<form role="form" class="lead" action="index.php" method="GET" >
										<div class="row">
										<input type="hidden" name="page" value="index">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>เลขที่รับ</label>
													<input type="text" name="no" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>หนังสือรับเลขที่หนังสือ</label>
													<input type="text" name="no_book"  class="form-control input-md">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>จาก</label>
													<input type="text" name="form"  class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>วันที่</label>
													<input type="date" name="date"  class="form-control input-md">
												</div>
											</div>
										</div>
										
										<button type="submit"class="btn btn-skin btn-block btn-lg"><span class="fa fa-search">&nbsp;</span>ค้นหา</button>
									</form>
								</div>
							</div>				
						
						</div>


				<div class="row">
				<div class="col-lg-12">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-search"></span>ตารางข้อมูล</small></h3>
									</div>
									<div class="panel-body">
						
									<form role="form" class="lead" action="index.php" method="GET" >
										<div class="row">
										<input type="hidden" name="page" value="show_data">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>ส่ง-ถึง</label>
													<select class="form-control input-md" name="from_to">
  												<option value="total">ทั้งหมด</option>
													<?php 
													$sql ="SELECT DISTINCT  from_to FROM tb_book ORDER BY id ASC"; 
   
	 										$rs = @mysqli_query($con, $sql);
 														while ($row = mysqli_fetch_array($rs))
															{	 ?>
  												<option value="<?php echo $row['from_to'];?>"><?php echo $row['from_to'];?></option>
												<?php }?>
													</select>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>&nbsp;</label>
											<a href="edit_data.php?id=<?php echo $row['id'];?>"><button type="submit"  class="btn btn-skin btn-block btn-lg"><span class="fa fa-check">&nbsp;</span></button></a>
												</div>
											</div>
										</div>
										</form>
									<div class="panel-body" style="overflow-y:auto;height:1000px">
									<table id="customers">
  					<tr>
	 <th><center>เลขที่รับ</center></th>
    <th><center>หนังสือรับเลขที่หนังสือ</center></th>
	<th><center style="width:80px">วันที่</center></th>
	<th><center>จาก</center></th>
    <th style="width:100px"><center>ถึง</center></th>
	<th style="width:300px"><center>เรื่อง</center></th>
	<th style="width:150px"><center>ไฟล์แนบ</center></th>
	<th style="width:150px"><center>หมายเหตุ</center></th>
	<th style="width:150px"><center>ผู้รับหนังสือ</center></th>
	<th><center>ปรับแต่ง</center></th>
	
  </tr>
	<?php 
	if(isset($_GET['no']))
	{
	 if($_GET['no']!=''&&$_GET['no_book']==''&&$_GET['form']==''&&$_GET['date']=='')
	 {
		 $sql ="SELECT * FROM tb_book where get_no LIKE '%$_GET[no]%'  order by id  asc";	
	 }
	 elseif($_GET['no']!=''&&$_GET['no_book']!=''&&$_GET['form']==''&&$_GET['date']=='')
	 {
		 $sql ="SELECT * FROM tb_book where get_no LIKE '%$_GET[no]%' AND get_book LIKE '%$_GET[no_book]%'  order by id  asc";	
	 }
	 elseif($_GET['no']!=''&&$_GET['no_book']!=''&&$_GET['form']!=''&&$_GET['date']=='')
	 {
		 $sql ="SELECT * FROM tb_book where get_no LIKE '%$_GET[no]%' AND get_book LIKE '%$_GET[no_book]%' AND form LIKE '%$_GET[form]%'  order by id  asc";	
	 }
	 elseif($_GET['no']!=''&&$_GET['no_book']!=''&&$_GET['form']!=''&&$_GET['date']!='')
	 {
		 $sql ="SELECT * FROM tb_book where get_no LIKE '%$_GET[no]%' AND get_book LIKE '%$_GET[no_book]%' AND form LIKE '%$_GET[form]%' AND date='$_GET[date]'  order by id  asc";	
	 }
	 elseif($_GET['no']!=''&&$_GET['no_book']==''&&$_GET['form']!=''&&$_GET['date']!='')
	 {
		 $sql ="SELECT * FROM tb_book where get_no LIKE '%$_GET[no]%' AND  form LIKE '%$_GET[form]%' AND date='$_GET[date]'  order by id  asc";	
	 }
	 elseif($_GET['no']!=''&&$_GET['no_book']==''&&$_GET['form']==''&&$_GET['date']!='')
	 {
		 $sql ="SELECT * FROM tb_book where get_no LIKE '%$_GET[no]%' AND date='$_GET[date]'  order by id  asc";	
	 }
	 elseif($_GET['no']==''&&$_GET['no_book']!=''&&$_GET['form']!=''&&$_GET['date']=='')
	 {
		 $sql ="SELECT * FROM tb_book where no_book LIKE '%$_GET[no_book]%' AND form LIKE '%$_GET[form]%' order by id  asc";	
	 }
	 elseif($_GET['no']==''&&$_GET['no_book']!=''&&$_GET['form']!=''&&$_GET['date']!='')
	 {
		 $sql ="SELECT * FROM tb_book where no_book LIKE '%$_GET[no_book]%' AND form LIKE '%$_GET[form]%'AND date='$_GET[date]' order by id  asc";	
	 }
	 elseif($_GET['no']==''&&$_GET['no_book']!=''&&$_GET['form']==''&&$_GET['date']!='')
	 {
		 $sql ="SELECT * FROM tb_book where no_book LIKE '%$_GET[no_book]%' AND date='$_GET[date]' order by id  asc";	
	 }	
	 elseif($_GET['no']==''&&$_GET['no_book']==''&&$_GET['form']!=''&&$_GET['date']=='')
	 {
		 $sql ="SELECT * FROM tb_book where form LIKE '%$_GET[form]%'  order by id  asc";	
	 }	
	 elseif($_GET['no']==''&&$_GET['no_book']==''&&$_GET['form']!=''&&$_GET['date']!='')
	 {
		 $sql ="SELECT * FROM tb_book where form LIKE '%$_GET[form]%' AND date='$_GET[date]'  order by id  asc";	
	 }	
	 elseif($_GET['no']==''&&$_GET['no_book']==''&&$_GET['form']==''&&$_GET['date']!='')
	 {
		 $sql ="SELECT * FROM tb_book where date='$_GET[date]' order by id  asc";	
	 }
	 elseif($_GET['no']==''&&$_GET['no_book']!=''&&$_GET['form']==''&&$_GET['date']=='')
	 {
		 $sql ="SELECT * FROM tb_book where get_book LIKE '%$_GET[no_book]%'order by id  asc";	
	 }
	 else{
		 $sql ="SELECT * FROM tb_book ORDER BY id ASC"; 
		 }
	}
	else
	{
		if(isset($_GET['from_to'])==true)
		{
			if($_GET['from_to']=='total')
			{ 
				$sql ="SELECT * FROM tb_book ORDER BY id ASC"; 
			}
			else{
			$sql ="SELECT * FROM tb_book where from_to = '$_GET[from_to]'ORDER BY id ASC"; 
			}
		}
else
{				
$sql ="SELECT * FROM tb_book ORDER BY id DESC"; 
}
	}

        $rs = @mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($rs))
	         {	 ?>
  <tr>
	<?php $day=	date("d-m-Y",strtotime($row['date'])); ?>
	<td><center><?php echo $row['id'];?></center></td>
	<td><center><?php echo $row['get_book'];?></center></td>
	<td><center><?php echo $day;?></center></td>
	<td><center><?php echo $row['form'];?></center></td>
	<td><center><?php echo $row['from_to'];?></center></td>
	<td><center><?php echo $row['titel'];?></center></td>
	<td><center><a href="pdf_file/<?php echo $row['file_pdf'];?>"><?php echo $row['file_pdf'];?></a></center></td>
	<td><center><?php echo $row['another'];?></center></td>
	<td><center><?php echo $row['recipient'];?></center></td>
	<td><a href="edit_data.php?id=<?php echo $row['id'];?>"><button type="button"  class="btn btn-skin btn-block btn-lg"><span class="fa fa-wrench">&nbsp;</span></button></a></td>
  </tr>
			 <?php } ?>
  <tr> </table>
								</div>
							</div>
						</div>
			
						
					</div>					
				</div>		
			
    </section>
	
	<!-- /Section: intro -->
		
	
	<?php include'footer.php'?>