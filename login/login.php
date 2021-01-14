<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Login</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body style="background-image:url(images/photo_bg_white.jpg)" > 
	<div class="container" style="opacity:0.9">
		<div class="top"style="background-image:url(images/photo_bg_white.jpg)">
			<h1 id="title" class="hidden"><span id="logo"></h1>
		</div>
		<div class="login-box animated fadeInUp" style="margin-top:-250px">
			<div class="box-header" style="background:green;">
				<h2>สำนักงานจังหวัดขอนแก่น</h2>
                		<form class="form" action="php/check_login.php" method="post">
			</div>
			<img src="images/logosum.png" alt="Norway" style="width:100%;">
			<label for="username">ไอดี</label>
			<br/>
			<input type="text" id="username" name="username">
			<br/>
			<label for="password">รหัสผ่าน</label>
			<br/>
			<input type="password" id="password" name="password">
			<br/>
			<button style="width:120px;height:40px;font-size:15px;background:green;" type="submit">เข้าสู่ระบบ</button>&nbsp;&nbsp;
            <button type="button" style="width:120px;height:40px;font-size:15px;background:green;" onClick="window.location.href='../../User/index.php'" >ยกเลิก</button>
            </form>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>