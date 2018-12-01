<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="test.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<script type="text/javascript">
	// dynamictab
	$(document).ready(function() {
	    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
	        e.preventDefault();
	        $(this).siblings('a.active').removeClass("active");
	        $(this).addClass("active");
	        var index = $(this).index();
	        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
	        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
	    });
	});
</script>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
			<!-- navbar -->
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">MaMaCa</a>
				</div>
				<!-- collapse -->
				<div class="collapse navbar-collapse" id="navbar-collapse-4">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">ql bán hàng</a></li>
						<li><a href="#">quản lý hàng</a></li>
						<li><a href="#">quản lý tài khoản</a></li>
						<li><a href="#">phiếu in</a></li>
						<li><a href="#">cài đặt</a></li>

						<li>
							<a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse4" aria-expanded="false" aria-controls="nav-collapse4">Profile <i class=""></i> </a>
						</li>
					</ul>
					<ul class="collapse nav navbar-nav nav-collapse slide-down" role="search" id="nav-collapse4">
						<li><a href="#">Support</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img class="img-circle" src="https://pbs.twimg.com/profile_images/588909533428322304/Gxuyp46N.jpg" alt="maridlcrmn" width="20" />Maridlcrmn <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">My profile</a></li>
								<li><a href="#">Permission</a></li>
								<li><a href="#">Settings</a></li>
								<li class="divider"></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<!-- dynamictabs -->
	<div class="container-fluid">
		<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="row bhoechie-tab-container">
				<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2 bhoechie-tab-menu">
					<div class="list-group">
						<a href="#" class="list-group-item active text-center">
							<h4 class="glyphicon glyphicon-menu-hamburger"></h4><br/>Menu
						</a>
						<a href="#" class="list-group-item text-center">
							<h4 class="glyphicon glyphicon-indent-left"></h4><br/>kho
						</a>
						<a href="#" class="list-group-item text-center">
							<h4 class="glyphicon glyphicon-usd"></h4><br/>Thống kê thu chi
						</a>
						<a href="#" class="list-group-item text-center">
							<h4 class="glyphicon glyphicon-inbox"></h4><br/>Thống kê Bill
						</a>
						<a href="#" class="list-group-item text-center">
							<h4 class="glyphicon glyphicon-th"></h4><br/>Quản lí bàn
						</a>

					</div>
				</div>
				<div class="col-lg-11 col-md-11 col-sm-10 col-xs-10 bhoechie-tab">
					<!-- flight section -->
					<div class="bhoechie-tab-content active">
						<!-- <?php include_once 'listmenu.php'; ?> -->


					</div>
					<!-- train section -->
					<div class="bhoechie-tab-content">
						<?php include_once 'resources.php' ?>
					</div>

					<!-- hotel search -->
					<div class="bhoechie-tab-content">
						<?php include_once 'tkthuchi.php' ?>
					</div>
					<div class="bhoechie-tab-content">
						<?php include_once 'tkbill.php' ?>
					</div>
					<div class="bhoechie-tab-content">

						<?php include_once 'qlban.php' ?>

					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- jQuery library -->


</body>
</html>
