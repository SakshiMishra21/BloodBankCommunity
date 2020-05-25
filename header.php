<?php
include('conn.php');
session_start();

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank</title>

	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
		<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/5ca6fb141de11b6e3b0705cf/default';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
	<!-- //Meta Tags -->
	<link rel="icon" type="image" href="/images/icon.jpg">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<!--Online-fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<!--//Online-fonts-->

<!--hover dropdown-->
<style>
.dropbtn {
  background: none;
  color: white;
  padding: 16px;
  font-size: 18px;
  border: none;
  margin-top: -9px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: rgba(165, 24, 24, 0.78);}
</style>
<!--//hover dropdown-->

</head>
<style type="text/css">
	.sidebar1, .sidebar2, .sidebar{
	z-index: 9999;
}
</style>
<body style="overflow-y: scroll;overflow-x: hidden;">
	<!-- Header -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<a href="index.php">
				<img src="/images/logo1.png" class="img-responsive" style="float: left; height: 85px;width: 462px; margin-top:39px;">
				</a>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<p style="margin-top: 12%;margin-left: 25%;">
				Email: <i class="fa fa-envelope">&nbsp</i>info.bloodbank@gmail.com<br/>
				Contact No:-&nbsp<i class="fa fa-phone">&nbsp</i>9999999999,9888888888
				</p>
			</div>
		</div>
	</div>
</div>
</div>
<!--//Header-->
<!-- banner-slider -->
	<div class="w3l_banner_info" id="home">
		<div class="slider">
			<div class="callbacks_container">
				<!-- Navigation -->
				<div class="header-nav">
					<div class="container">
						<nav class="navbar navbar-default">
							<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<!-- navbar-header -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="index.php">HOME</a>
									</li>
									<li>
										<div class="dropdown" style="font-size: 17px;">
											<button class="dropbtn">SEARCH
											<span class="caret"></span></button>
											<div class="dropdown-content">
												<a href="bloodbank.php">BloodBank</a>
												<a href="bloodgroups.php">BloodGroup</a> 
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown" style="font-size: 17px;">
											<button class="dropbtn">REGISTER
											<span class="caret"></span></button>
											<div class="dropdown-content">
												<a href="donar.php">Donar</a>
												<a href="donarrequest.php">Request</a> 
											</div>
										</div>
									</li>
									<li>
										<a href="event.php">NEWS</a>
									</li>
									<li>
										<a href="about.php">ABOUT US</a>
									</li>
									<li>
										<a href="contact.php">CONTACT US</a>
									</li>
									<?php 
									if(isset($_SESSION['loginstatus'])){ 
									?>
									<li>
										<span class="btn btn-primary">
											<?php $user_id = $_SESSION['u_id']; ?>
											<a style="color: white;" href="profile.php?id=<?php echo $user_id; ?>">
											<?php echo $_SESSION["name"];?>
											</a></span>
									</li>
									<li>
										<a class="btn btn-danger" href="logout.php" style="letter-spacing:0px;">Log out</a>                                    
									</li>
								<?php }else {?>
									<li>
										<button class="btn btn-success" type="button" style="margin-left:0px; margin-top: 0px;">
											<a href="login.php" style="color: #fff;">Login</a>
										</button>
									</li>
								<?php  }?>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</nav>
						<div class="clearfix"> </div>
					</div>
				</div>