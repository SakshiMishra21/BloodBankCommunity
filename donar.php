<?php
include('header.php');
//include('sidebar.php');
include('conn.php');
?>

<div class="clearfix"></div>
	<!-- Banner bottom -->
	
		<div class="bnr-lft-agileits" style="margin-top:70px;" >
			<h1 style="margin-top: -20px; color: #fff; text-align: center;">Register as a Blood Donar</h1>
		<div class="bnr-rgt-w3-agile" style="margin-top: 30px;">
			<form action="#" method="post" enctype="multipart/form-data">
				<div style=" margin-left:2px; ">
					<input type="text" name="name" placeholder="Donar Name" required="">
				</div><br/>
				<div class="inputs-w3ls " style=" margin-left:2px;  text-align:left; border-bottom: 2px dotted #4078c0;background: rgba(64, 120, 192, 0.15);">Gender
					<input name="gender" type="radio" value="male">Male
					<input name="gender" type="radio" value="female" >Female
				</div><br/>
				<div class="inputs-w3ls " style="margin-left: 2px; ">
					<input type="text" name="age" placeholder="Enter age" required="">
				</div><br/>
				<div class="inputs-w3ls " style="margin-left: 2px; ">
					<input type="text" name="weight" placeholder="Enter weight" required="">
				</div><br/>
				<div class="inputs-w3ls " style="margin-left: 2px; ">
					<select name="state" placeholder="select state" style=" margin-top: 5px; height: 40px; border-bottom: 2px dotted #4078c0;background: rgba(64, 120, 192, 0.15);width: 100%;">
						<option value="select">--Select State--</option>
						<option value="uttarpradesh">Andhra Pradesh</option>
						<option value="uttarpradesh">Assam</option>
						<option value="uttarpradesh">Bihar</option>
						<option value="uttarpradesh">Chattishgarh</option>
						<option value="uttarpradesh">Goa</option>
						<option value="uttarpradesh">UttarPradesh</option>
					</select>
				</div><br/>
				<div class="inputs-w3ls " style="margin-left: 2px; ">
				<select name="city" style=" margin-top: 5px; height: 40px; border-bottom: 2px dotted #4078c0;background: rgba(64, 120, 192, 0.15);width: 100%;">
						<option value="select">--Select City--</option>
						<option value="kanpur">Vijaywada</option>
						<option value="kanpur">Visakhapatnam</option>
						<option value="kanpur">Guntur</option>
						<option value="kanpur">Tirupati</option>
						<option value="kanpur">Amaravati</option>
						<option value="kanpur">Guwahati</option>
						<option value="kanpur">Tezpur</option>
						<option value="kanpur">Jorhat</option>
						<option value="kanpur">Dibrugarh</option>
						<option value="kanpur">Silchar</option>
						<option value="kanpur">Patna</option>
						<option value="kanpur">Gaya</option>
						<option value="kanpur">Bihar Sharif</option>
						<option value="kanpur">Muzaffarpur</option>
						<option value="kanpur">Nalanda</option>
						<option value="kanpur">Raipur</option>
						<option value="kanpur">Bilaspur</option>
						<option value="kanpur">Ambikapur</option>
						<option value="kanpur">Bhilai</option>
						<option value="kanpur">Jagdalpur</option>
						<option value="kanpur">Panaji</option>
						<option value="kanpur">Vasco da gama</option>
						<option value="kanpur">Margao</option>
						<option value="kanpur">Mapusa</option>
						<option value="kanpur">Ponda</option>
						<option value="lucknow">Lucknow</option>
						<option value="kanpur">Prayagraj</option>
						<option value="kanpur">Kanpur</option>
						<option value="lucknow">Agra</option>
						<option value="lucknow">Varanasi</option>
						<option value="lucknow">Meerut</option>
				</select>
				</div><br/>
				<div class="inputs-w3ls " style="margin-left: 2px; ">
					<input type="text" name="mobnum" placeholder="Mobile Number" required="">
				</div><br/>
				<div class="inputs-w3ls " style="margin-left: 2px; ">
					<input type="text" name="email" placeholder="Email address" required="">
				</div><br/>
				<div class="inputs-w3ls " style="margin-left: 2px; ">
					<select name="bloodgp" style=" margin-top: 5px; height: 40px; border-bottom: 2px dotted #4078c0;background: rgba(64, 120, 192, 0.15);width: 100%;">
				<option value="Dont Know">--Blood Group--</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
				</div><br/>
				<div class="inputs-w3ls " style="margin-left: 2px; ">
					<input type="password" name="password" placeholder="Enter Password" required="" style=" margin-top: 5px; height: 40px; border-bottom: 2px dotted #4078c0;background: rgba(64, 120, 192, 0.15);width: 100%" >
				</div><br/>
				<div>
					<input name="date" class="inputs-w3ls " style="margin-left: 2px;  background: rgba(64, 120, 192, 0.15); border-bottom: dotted;color:#2471A3;width: 100%;" type="date" placeholder="Pick-up Date" value=""required="">
				</div>
				<div class="inputs-w3ls" style="margin-top: 20px;">
					Upload Image<input type="file" name="image" style=" margin-top: 5px; margin-right: auto; height: 40px; border-bottom: 2px dotted #4078c0;background: rgba(64, 120, 192, 0.15);width: 100%" >
				</div>
				<div class="inputs-w3ls" style="margin-top: 20px; ">
					<input type="text" name="message" placeholder="Message" required="">
				</div>
				<input type="submit" value="Register" name="sbmt" >
				<div class="clearfix"> </div>
			</form>
		</div>
	</div>
	<?php
	include('footer.php');
	?>
<?php
if(isset($_POST["sbmt"])) 
{
	$name = $_POST['name'];
	$gender=$_POST['gender'];
	$age = $_POST['age'];
	$weight = $_POST['weight'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$mobnum=$_POST['mobnum'];
	$email=$_POST['email'];
	$bloodgp = $_POST['bloodgp'];
	$password = $_POST['password'];
	$date = $_POST['date'];
	$message=$_POST['message'];
	//$date = date($date1,'y-m-d');
	 if($_FILES['image']['name']){
    move_uploaded_file($_FILES['image']['tmp_name'], "images/".$_FILES['image']['name']);
    $image="images/".$_FILES['image']['name'];
    
}
$s="INSERT INTO `donarreg`(`name`, `gender`, `age`, `weight`, `state`, `city`, `mobnum`, `email`, `bloodgp`, `password`, `date`, `image`, `message`) VALUES ('$name', '$gender', '$age', '$weight', '$state', '$city', '$mobnum', '$email', '$bloodgp', '$password', '$date', '$image', '$message')";
	$q=mysqli_query($cn,$s);
		if($q)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{
		echo "<script>alert('Saving Record Failed');</script>";
	}
}
	?>