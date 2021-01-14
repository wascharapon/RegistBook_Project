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
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>เพิ่มข้อมูล</h3>
									</div>
									<div class="panel-body">
									<form action="php/add_book.php" method="POST"role="form" class="lead"runat="server"  enctype="multipart/form-data">
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
												<label>เลขที่หนังสือ</label>
													<input type="text" name="get_book" class="form-control input-md"required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
												<label>ถึง</label>
													<input type="text" name="from_to" class="form-control input-md"required>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>ลงวันที่</label>
													<input type="date" name="date" class="form-control input-md"required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>จาก</label>
													<input type="text" name="form"  class="form-control input-md"required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
												<label style="color:red">หมายเหตุ</label>
													<input type="text" name="another" class="form-control input-md"required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>เรื่อง</label>
													<input type="text" name="titel" class="form-control input-md"required>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
												<label>แนบไฟล์</label>
													<input type="file" name="file_pdf" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													
												</div>
											</div>
										</div>
										</div>
										
										<button type="submit"class="btn btn-skin btn-block btn-lg"><span class="fa fa-save">&nbsp;</span>บันทึก</button>
										
									
									
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