<?php
session_start();
// echo $_SESSION['loginstatus']; exit();
include('header1.php');
include('conn.php');
if($_SESSION['loginstatus'] == "yes" && $_SESSION["username"]){

$i="SELECT COUNT(*) as donarreg FROM donarreg";
$q = mysqli_query($cn,$i);
$fq = mysqli_fetch_assoc($q);

$p="SELECT COUNT(*) as bloodgp FROM bloodgp";
$p1 = mysqli_query($cn,$p);
$fp = mysqli_fetch_assoc($p1);

$e = "SELECT COUNT(*) as request FROM request";
$e1 = mysqli_query($cn,$e);
$fe = mysqli_fetch_assoc($e1);

$f = "SELECT COUNT(*) as feedback FROM feedback";
$f1 = mysqli_query($cn,$f);
$ff = mysqli_fetch_assoc($f1);

?>
<body style="background: url(/admin/img/img6.jpg);">
	
<div class="ts-main-content">
	<div class="col-md-12">
	<h1 style="text-align: center; margin-left:200px; color: #fff;">ADMIN_PANEL</h1>
	</div>
	<?php include('sidebar1.php'); ?> 
<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 class="page-title" style="color: #FFF;margin-top:-30px;">Dashboard</h2>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-3">
								<div class="panel panel-default">
									<div class="panel-body bk-primary text-light">
										<div class="stat-panel text-center">
											<div class="stat-panel-number h1 "><?php echo $fq['donarreg'];?></div>
											<div class="stat-panel-title text-uppercase">Reg Users
											</div>
										</div>
									</div>
									<a href="viewuser.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="panel panel-default">
									<div class="panel-body bk-info text-light">
										<div class="stat-panel text-center">
											<div class="stat-panel-number h1 ">8</div>
											<div class="stat-panel-title text-uppercase">Total Donar
											</div>
										</div>
									</div>
									<a href="\donarrequest.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; 
										<i class="fa fa-arrow-right"></i>
									</a>
								</div>
							</div>
							<div class="col-md-3">
								<div class="panel panel-default">
									<div class="panel-body bk-warning text-light">
										<div class="stat-panel text-center">
											<div class="stat-panel-number h1 "><?php echo $fp['bloodgp'];?>
											</div>
											<div class="stat-panel-title text-uppercase">Total BloodGroups
											</div>
										</div>
									</div>
									<a href="viewbloodgp.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; 
										<i class="fa fa-arrow-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
						<div class="col-md-3">
							<div class="panel panel-default">
								<div class="panel-body bk-success text-light">
									<div class="stat-panel text-center">
										<div class="stat-panel-number h1 "><?php echo $fe['request'];?>
										</div>
										<div class="stat-panel-title text-uppercase">Requested For Bloodgp
										</div>
									</div>
								</div>
								<a href="manage-conactusquery.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; 
								   <i class="fa fa-arrow-right"></i>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="panel panel-default">
								<div class="panel-body bk-info text-light">
									<div class="stat-panel text-center">
										<div class="stat-panel-number h1 "><?php echo $ff['feedback'];?>
										</div>
										<div class="stat-panel-title text-uppercase">Testimonials
										</div>
									</div>
								</div>
								<a href="testimonials.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; 
									<i class="fa fa-arrow-right"></i>
								</a>
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

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
</body>
</html>
<?php
}else{
	header('Location:adminlogin.php');
}
?>