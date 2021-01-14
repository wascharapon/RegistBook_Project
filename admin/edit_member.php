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
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>แก้ไขข้อมูล</h3>
									</div>
									<div class="panel-body">
									<form action="php/update_member.php" method="POST"role="form" class="lead">
									<?php
        $sql ="SELECT * FROM admin_system where id = '$_GET[id]'";
        $rs = @mysqli_query($con, $sql);
			if ($row = mysqli_fetch_array($rs))
	{	 ?>				<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<label>ชื่อผู้ใช้งาน</label>
				<input type="text" name="username" value="<?php echo $row['username'];?>" class="form-control input-md"required>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<label>รหัสผ่าน</label>
				<input type="text" name="password" value="<?php echo $row['password'];?>" class="form-control input-md"required>
			</div>
		</div>
	</div>
    <input type="hidden" value="<?php echo $row['id'];?>" name="id">
	
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<label>ชื่อ-สกุล</label>
				<input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control input-md"required>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<label>อีเมลล์</label>
				<input type="email" name="email" value="<?php echo $row['email'];?>" class="form-control input-md"required>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<label >เบอร์โทร</label>
				<input type="text" name="phone" value="<?php echo $row['phone'];?>" class="form-control input-md"required>
			</div>
		</div>
	</div>
										<button type="submit"class="btn btn-skin btn-block btn-lg"><span class="fa fa-save">&nbsp;</span>บันทึก</button>
										<br>	<br>
										<a href="php/delete_member.php?id=<?php echo $row['id'];?>"><button type="button"style="background:red;border-color:red" class="btn btn-skin btn-block btn-lg"><span class="fa fa-trash">&nbsp;</span>ลบข้อมูล</button></a>
										<br>	<br>

									
	<?php } ?>
									
									</form>
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