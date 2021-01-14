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
									<h3 class="panel-title"><span class="fa fa-user"></span>เพิ่มสมาชิก</small></h3>
									</div>
									<div class="panel-body">
							    <form action="php/add_member.php" method="POST"role="form" class="lead">
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>ชื่อผู้ใช้งาน</label>
													<input type="text" name="username"  class="form-control input-md"required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>รหัสผ่าน</label>
													<input type="text" name="password" class="form-control input-md"required>
												</div>
											</div>
										</div>

									
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>ชื่อ-สกุล</label>
													<input type="text" name="name" class="form-control input-md"required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>อีเมลล์</label>
													<input type="email" name="email" class="form-control input-md"required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label >เบอร์โทร</label>
													<input type="text" name="phone" class="form-control input-md"required>
												</div>
											</div>
										</div>
										<button type="submit"class="btn btn-skin btn-block btn-lg"><span class="fa fa-save">&nbsp;</span>บันทึก</button>
										
									
									
									</form>
								</div>
							</div>				
						
						</div>
					<div class="col-lg-12">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						
							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-table"></span>ตารางข้อมูลสมาชิก<small></small></h3>
									</div>
									<div class="panel-body">
									<table id="customers">
  					<tr>
	 <th><center>ลำดับ</center></th>
    <th><center>ชื่อ-นามสกุล</center></th>
	<th><center >ชื่อผู้ใช้งาน</center></th>
	<th><center>รหัสผ่าน</center></th>
    <th ><center>อีเมล์</center></th>
	<th ><center>เบอร์ติดต่อ</center></th>
	<th><center>ปรับแต่ง</center></th>
	
  </tr>
	<?php 
	$i=1;
	$sql ="SELECT * FROM admin_system where  id != '1' ORDER BY id ASC"; 
   
        $rs = @mysqli_query($con, $sql);
			while ($row = mysqli_fetch_array($rs))
	         {	 ?>
  <tr>
	<td><center><?php echo $i++;?></center></td>
	<td><center><?php echo $row['name'];?></center></td>
	<td><center><?php echo $row['username']?></center></td>
	<td><center><?php echo $row['password'];?></center></td>
	<td><center><?php echo $row['email'];?></center></td>
	<td><center><?php echo $row['phone'];?></center></td>
	<td><a href="edit_member.php?id=<?php echo $row['id'];?>"><button type="submit"  class="btn btn-skin btn-block btn-lg"><span class="fa fa-wrench">&nbsp;</span>แก้ไข</button></a></td>
  </tr>
			 <?php } ?>
  <tr> </table>
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