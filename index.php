<?php
include ('conn.php');
include('header.php');
//include('sidebar.php');
?>

			<!--SLIDER -->
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-img b1" style="margin-top: 70px;"></div>
						<div class="slider_banner_info">
							<div class="w3ls-info" style="text-align: center;">
								<h4>
									<span>B</span>lood
									<span>B</span>ank</h4>
								<p>We can provide secured life.</p><br/><br/>
								<ul>
								<li>
								<button style="width: 350px;height: 90px; border-radius: 8px;"><a href="donate.php" style="font-size: 40px;color:rgba(165, 24, 24, 0.78);font-family:sans-serif;">Charity Now &nbsp<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></button>
								</li>
        					</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img b2" style="margin-top: 70px;"></div>
						<div class="slider_banner_info">
							<div class="w3ls-info"  style="text-align: center;">
								<h4>
									<span>T</span>reatment</h4>
								<p>We are protecting the humans life.</p><br/><br/>
								<ul >
								<li>
								<button style="width: 350px;height: 90px; border-radius: 8px;"><a href="donate.php" style="font-size: 40px; color:rgba(165, 24, 24, 0.78);font-family:sans-serif;">Charity Now &nbsp<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></button>
								</li>
        					</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img b3" style="margin-top: 70px;"></div>
						<div class="slider_banner_info">
							<div class="w3ls-info"  style="text-align: center;">
								<h4>
									<span>C</span>ure</h4>
								<p>We can improve productivity.</p><br/><br/>
								<ul>
								<li>
								<button style="width: 350px;height: 90px; border-radius: 8px;"><a href="donate.php" style="font-size: 40px; color:rgba(165, 24, 24, 0.78);font-family:sans-serif;">Charity Now &nbsp<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></button>
								</li>
        					</ul>
							</div>
							
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!--//SLIDER-->

<!--BLOOD_GROUPS-->
	<div class="banner"></div>
	<div class="row">
		<div class="container" style="background-color:#FAF0E6;">
			<h3 style="font-family: sans-serif; text-align: justify;font-weight: bold;font-size: 30px; margin-top: 40px;text-align: center; color: rgba(165, 24, 24, 0.78);">Total Blood Donar Register With Blood Bank Community</h3>
			<div class="row clearfix">
				<div class="pay-block col-md-3 col-sm-3 col-xs-6">
					<?php
					$a = mysqli_query($cn,"SELECT count(bloodgp) as bloodgp_count FROM donarreg WHERE bloodgp='A-' ");
					$af = mysqli_fetch_assoc($a);
		 			?>
		 		<div class="container" style="background-color:#CD5C5C; height: 106px; width: 100px; margin-top:50px; font-size: 40px; border-radius: 10px; color: white; text-align: center;"> A-<br />
		 			<span style="font-size: 25px;margin-bottom: 12px">
		 				<?php 
		 				echo $af['bloodgp_count'];
		 				?>
		 			</span>
                </div>
            </div>
            <div class="pay-block col-md-3 col-sm-3 col-xs-6">
            	<?php
            	$a = mysqli_query($cn,"SELECT count(bloodgp) as bloodgp_count FROM donarreg WHERE bloodgp='A+'");
		 		$af = mysqli_fetch_assoc($a);
		 		?>
		 		<div class="container"  style="background-color:#CD5C5C; height: 106px; width: 100px; margin-top: 50px; font-size: 40px; border-radius: 10px; color: white; text-align: center;"> A+<br />
		 			<span style="font-size: 25px;margin-bottom: 12px">
		 				<?php 
		 				echo $af['bloodgp_count'];
		 				?>
		 			</span>
		 		</div>
            </div>
            <div class="pay-block col-md-3 col-sm-3 col-xs-6">
		 		<?php
		 		$a = mysqli_query($cn,"SELECT count(bloodgp) as bloodgp_count FROM donarreg WHERE bloodgp='AB-'");
		 		$af = mysqli_fetch_assoc($a);
		 		?>
		 		<div class="container"  style="background-color:#CD5C5C; height: 106px; width: 100px; margin-top:50px; font-size: 40px; border-radius: 10px; color: white; text-align: center;"> AB-<br />
		 			<span style="font-size: 25px;margin-bottom: 12px">
		 				<?php 
		 				echo $af['bloodgp_count'];
		 				?>
		 			</span>
                </div>
            </div>
            <div class="pay-block col-md-3 col-sm-3 col-xs-6">
		 		<?php
		 		$a = mysqli_query($cn,"SELECT count(bloodgp) as bloodgp_count FROM donarreg WHERE bloodgp='AB+'");
		 		$af = mysqli_fetch_assoc($a);
		 		?>
                    <div class="container"  style="background-color:#CD5C5C; height: 106px; width: 100px; margin-top: 50px; font-size: 40px; border-radius: 10px; color: white; text-align: center;"> AB+<br />
                    	<span style="font-size: 25px;margin-bottom: 12px">
                    		<?php 
                    		echo $af['bloodgp_count'];
                    		?>
                        </span>
                    </div>
            </div>
            <div class="pay-block col-md-3 col-sm-3 col-xs-6">
		 		<?php
		 		$a = mysqli_query($cn,"SELECT count(bloodgp) as bloodgp_count FROM donarreg WHERE bloodgp='B-'");
		 		$af = mysqli_fetch_assoc($a);
		 		?>
                    <div class="container"  style="background-color:#CD5C5C; height: 106px; width: 100px; margin-top: 50px; font-size: 40px; border-radius: 10px; color: white; text-align: center;"> B-<br />
                    	<span style="font-size: 25px;margin-bottom: 12px">
                    		<?php 
                    		echo $af['bloodgp_count'];
                    		?>
                    	</span>
                    </div>
                </div>
            <div class="pay-block col-md-3 col-sm-3 col-xs-6">
		 		<?php
		 		$a = mysqli_query($cn,"SELECT count(bloodgp) as bloodgp_count FROM donarreg WHERE bloodgp='B+'");
		 		$af = mysqli_fetch_assoc($a);
		 		?>
                    <div class="container"  style="background-color:#CD5C5C; height: 106px; width: 100px; margin-top: 50px; font-size: 40px; border-radius: 10px; color: white; text-align: center;"> B+<br />
                    	<span style="font-size: 25px;margin-bottom: 12px">
                    		<?php 
                    		echo $af['bloodgp_count'];
                    		?>
                   		</span>
                   	</div>
                </div>
            <div class="pay-block col-md-3 col-sm-3 col-xs-6">
		 		<?php
		 		$a = mysqli_query($cn,"SELECT count(bloodgp) as bloodgp_count FROM donarreg WHERE bloodgp='O-'");
		 		$af = mysqli_fetch_assoc($a);
		 		?>
                    <div class="container" style="background-color:#CD5C5C; height: 106px; width: 100px; margin-top: 50px; font-size: 40px; border-radius: 10px; color: white; text-align: center;"> O-<br />
                    	<span style="font-size: 25px;margin-bottom: 12px">
                    		<?php 
                    		echo $af['bloodgp_count'];
                    		?>
                    	</span>
                    </div>
                </div>
            <div class="pay-block col-md-3 col-sm-3 col-xs-6">
		 		<?php
		 		$a = mysqli_query($cn,"SELECT count(bloodgp) as bloodgp_count FROM donarreg WHERE bloodgp='O+'");
		 		$af = mysqli_fetch_assoc($a);
		 		?>
                    <div class="container"  style="background-color:#CD5C5C; height: 106px; width: 100px; margin-top: 50px; font-size: 40px; border-radius: 10px; color: white; text-align: center;"> O+<br />
                    	<span style="font-size: 25px;margin-bottom: 12px">
                    		<?php 
                    		echo $af['bloodgp_count'];
                    		?>
                    	</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//BLOOD_GROUPS-->

<!--PARAGRPAH-->
<div class="row" style="margin-top:5%;">
	<div class="col-md-4">
		<img src="/blood/images/img5.jpg" class="img-responsive" style="height: 250px; width: 350px; margin-left: 22%;">
	</div>
	<div class="col-md-6">
		&nbsp
			<h3 style="font-family: sans-serif; text-align: center;">Why should  donate blood?</h3><br/>
			<div style="text-align: center;">Our nation requires 4 Crore Units of Blood while only 40 lakh units are available,<br/>Every two seconds someone needs Blood.<br/>There is no substitute for Human Blood. It cannot be manufactured.Blood donation <br/>is an extremely noble deed, yet there is a scarcity of regular donors across India.We <br/>focus on creating & expanding a virtual army of blood donating volunteers who<br/> could be searched and contacted by family / care givers of a patient in times of need
			</div>
	</div>
	<div class="col-md-2"></div>
</div>
<!--//PARAGRAPH-->

<!--Donation -->
<br/><br/>	
<div class="row" style="padding-top:4px;">
	<div class="row text-center">
		<div class="col-md-12 typeHeading">
			<h1 class="learnAbout" style="font-family: sans-serif; text-align:justify; text-align: center;">Learn About Donation</h1>
		</div>
	</div>
	<br><br>
	<div class="wow col-sm-6 rotateInDownRight text-center animated" data-wow-delay="0ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: rotateInDownRight;">
		<img src="/blood/images/img10.jpg" class="img-responsive" alt="One Donation Can save upto three lives" style="height: 316px;">
		<blockquote>
			<p style="font-family:oswald">After donating blood, the body works to replenish the blood loss. This stimulates the production of new blood cells and in turn, helps in maintaining good health.</p>
			<p></p>
		</blockquote>
		<br><br>
	</div>
	<div class="col-sm-6">
		<table class="table table-responsive table-bordered ">
			<tbody>
				<tr>
					<th colspan="3" style="color:white;background: rgba(165, 24, 24, 0.78);">Compatible Blood Type Donors</th>
				</tr>
				<tr>
					<td><b>Blood Type</b></td>
					<td><b>Donate Blood To</b></td>
					<td><b>Receive Blood From</b></td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>A+</b></span></td>
					<td>A+ AB+</td>
					<td>A+ A- O+ O-</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>O+</b></span></td>
					<td>O+ A+ B+ AB+</td>
					<td>O+ O-</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>B+</b></span></td>
					<td>B+ AB+</td>
					<td>B+ B- O+ O-</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>AB+</b></span></td>
					<td>AB+</td>
					<td>Everyone</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>A-</b></span></td>
					<td>A+ A- AB+ AB-</td>
					<td>A- O-</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>O-</b></span></td>
					<td>Everyone</td>
					<td>O-</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>B-</b></span></td>
					<td>B+ B- AB+ AB-</td>
					<td>B- O-</td>
				</tr>
				<tr>
					<td><span style="color: #961e1b;"><b>AB-</b></span></td>
					<td>AB+ AB-</td>
					<td>AB- A- B- O-</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<!--//Donation-->

<!--TYPES-->
<div class="row donationTypes" style="margin: 0px!important;">
	<div class="col-md-12 donationTypeInfoWindow">
		<header class="typeHeading">
			<h1 style="text-align: center;margin-top: 10px;">Types of donation</h1>
		</header>
		<div class="content">
			<p style="text-align: center;">The human body contains five liters of blood, which is made of several useful components i.e. <strong>Whole blood</strong>, <strong>Platelet</strong>, and <strong>Plasma</strong>.
			</p>
			<p style="text-align: center;">Each type of component has several medical uses and can be used for different medical treatments. your blood donation determines the best donation for you to make.
			</p>
			<p style="text-align: center;">For <strong>plasma</strong> and <strong>platelet</strong> donation you must have donated whole blood in past two years.</p>
		</div><br><br>
		<ul class="nav nav-tabs">
			<li onclick="openInfo(event, 'wholeBlood')" id="wb" class=" infoLink active">
				<a href="javascript:void(0)">Whole Blood
				</a>
			</li>  
		</ul>
		<div class="row tabInfo" id="wholeBlood" style="display: block;">
			<div class="col-md-4 ">
				<h3 style="position: relative;font-weight: 400;margin: 0;background: 0 0;line-height: 1.4em;font-size: 24px;">What is it?
				</h3>
				<p>Blood Collected straight from the donor after its donation usually separated into red blood cells, platelets, and plasma.
				</p>
				<h3 style="position: relative;font-weight: 400;margin: 0;background: 0 0;line-height: 1.4em;font-size: 24px;">Who can donate?
				</h3>
				<p>You need to be 16-70 years old, weigh 50kg or more and be fit and healthy.
				</p>
			</div>
			<div class="col-md-4 infoContent">
				<h3 style="position: relative;font-weight: 400;margin: 0;background: 0 0;line-height: 1.4em;font-size: 24px;">User For?
				</h3>
				<p>Stomach disease, kidney disease, childbirth, operations, blood loss, trauma, cancer, blood diseases, haemophilia, anemia, heart disease.
				</p>
				<h3 style="position: relative;font-weight: 400;margin: 0;background: 0 0;line-height: 1.4em;font-size: 24px;">Lasts For?
				</h3>
				<p>Red cells can be stored for 42 days.
				</p>
			</div>
			<div class="col-md-4 ">
				<h3 style="position: relative;font-weight: 400;margin: 0;background: 0 0;line-height: 1.4em;font-size: 24px;">How long does it take?
				</h3>
				<p>15 minutes to donate.</p>
				<h3 style="position: relative;font-weight: 400;margin: 0;background: 0 0;line-height: 1.4em;font-size: 24px;">How often can I donate?
				</h3>
				<p>Every 12 weeks</p>
			</div>
		</div><br><br>
	</div>
</div>
<!--//TYPES-->

<?php
include('footer.php');
?>