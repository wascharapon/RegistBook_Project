<?php include'../login/php/connect.php';
include'php/check_action.php';?>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3fbbc0;
  color: white;
}
.counter
{
    background-color: #eaecf0;
    text-align: center;
}
.employees,.customer,.design,.order
{
    margin-top: 70px;
    margin-bottom: 70px;
    margin-left: -70px;
}
.counter-count
{
    font-size: 18px;
    background-color: #00b3e7;
    border-radius: 50%;
    position: relative;
    color: #ffffff;
    text-align: center;
    line-height: 92px;
    width: 92px;
    height: 92px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    display: inline-block;
}

.employee-p,.customer-p,.order-p,.design-p
{
    font-size: 24px;
    color: #000000;
    line-height: 34px;
}
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบเก็บข้อมูลเอกสารทางราชการ</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style_table.css" rel="stylesheet">
	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left"></p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right"></p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php?page=show_data">
                    <img src="../login/images/logo_t.png" width="250px" height="55px" />
               
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
                  <?php  if(isset($_GET['page'])==false){?>
                    <li class="active"><a href="index.php?page=show_data">หน้าแรก</a></li>
                    <li><a href="add_data.php?page=add_data">เพิ่มข้อมูล</a></li>
                    <li ><a href="search_data.php?page=search_data&&page_s=1">รายงาน</a></li>

                  <?php  }  
                    else{
                      if($_GET['page']=='show_data'){?>
  <li class="active"><a href="index.php?page=show_data">หน้าแรก</a></li>
                    <li><a href="add_data.php?page=add_data">เพิ่มข้อมูล</a></li>
                    <li ><a href="search_data.php?page=search_data&&page_s=1">รายงาน</a></li>
				         
                  <?php }
                  else if($_GET['page']=='add_data'){?>
  <li><a href="index.php?page=show_data">หน้าแรก</a></li>
                    <li class="active"><a href="add_data.php?page=add_data">เพิ่มข้อมูล</a></li>
                    <li ><a href="search_data.php?page=search_data&&page_s=1">รายงาน</a></li>
				   
					<?php }
                     else if($_GET['page']=='search_data'){?>
                      <li><a href="index.php?page=show_data">หน้าแรก</a></li>
                       <li><a href="add_data.php?page=add_data">เพิ่มข้อมูล</a></li>
                       <li class="active"><a href="search_data.php?page=search_data&&page_s=1">รายงาน</a></li>
                
                     <?php }
                    else{?>
			   <li class="active"><a href="index.php?page=show_data">หน้าแรก</a></li>
                    <li><a href="add_data.php?page=add_data">เพิ่มข้อมูล</a></li>
                    <li ><a href="search_data.php?page=search_data&&page_s=1">รายงาน</a></li>
				    
                     <?php   } } ?>
				<li><a href="php/logout_action.php">ออกจากระบบ</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    