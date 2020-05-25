<?php
include('header.php');
include('conn.php');
//include('sidebar.php');
?>
<style type="text/css">
	.row{
		    margin-right: none !important;
	}
</style>
<body>
	<div style="background: url(images/img6.jpg);margin-top: -20px;">
<h1 style="margin-top:90px;color: #fff; text-align: center;padding-top: 30px;">Request For Blood</h1>
	<h2 style="margin-top: 30px;text-align: center; color: #fff;">Patient details</h2><br/>
<div class="row">
	<form method="post"> 
	<div class="col-md-2"></div>
	<div class="col-md-2" style="color: #fff; margin-left: 10px;">
		Patient Name<span style="color: red">*</span><input type="text" name="pname" placeholder="--Patient name--" required="" style="border: 2px solid #d1caca;height:47px;width: 90%;color:black !important;">
	</div>
    <div class="col-md-2" style="color: #fff; margin-left: 10px;">
		Doctor Name<span style="color: red">*</span><input type="text" name="dname" placeholder="--Doctor name--" required="" style="border: 2px solid #d1caca;height:47px;width: 90%;color:black !important;">
	</div>
    <div class="col-md-2" style="color: #fff;margin-left: 10px;">
		Blood Group<span style="color: red">*</span>
		<select type="text" name="bloodgp" required=""style="border: 2px solid #d1caca;height:47px;width: 90%;color:black !important;">
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
	</div>
</div>
<div class="row">
	<div class="col-md-2"></div>
<div class="col-md-2" style="color: #fff; margin-left: 10px;"><br/>
		<?php
		$state_all = mysqli_query($cn,"SELECT * FROM state");
		?>
		State
			<select name="state" placeholder="select state"  style="border: 2px solid #d1caca;height:47px;width: 90%;color:black !important;">
				<option value="">--Select State--</option>
			<?php while($states = mysqli_fetch_assoc($state_all)){ ?>
				<option value="<?php echo $states['s_name']; ?>"><?php echo $states['s_name']; ?></option>
		<?php } ?>
				\
		    </select>
		
</div>
	<div class="col-md-2" style="color: #fff;margin-left: 10px;"><br/>
		<?php
		$city_all = mysqli_query($cn,"SELECT * FROM city");
		?>
		City <br/>
			<select name="city" placeholder="select city" style="border: 2px solid #d1caca;height:47px;width: 90%;color:black !important;">
				<option value="">--Select City--</option>
			<?php while($cities = mysqli_fetch_assoc($city_all)){ ?>
				<option value="<?php echo $cities['c_name']; ?>"><?php echo $cities['c_name']; ?></option>
		<?php } ?>
				 \
			</select>
		
	</div>
</div><br/>
<div class="row"><div class="col-md-2"></div><div class="container">
	<div class="col-md-7" style="color: #fff;">
		Hospital Name & Address<span style="color: red">*</span><br/>
	<textarea type="text" name="address" required="" style="border: 2px solid #d1caca;height: 100px;width:90%;color:black !important;"></textarea>
	</div></div>
</div>

<h2 style="margin-top: 30px;text-align: center; color: #fff;">Contact details</h2>
 <div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-2" style="margin-left: 10px;color: #fff;">
		Contact Name<span style="color: red">*</span><input type="text" name="cname" placeholder="--Contact name--" required style="border: 2px solid #d1caca;height:47px;width: 90%;color:black !important;">
	</div>
    <div class="col-md-2" style="margin-left: 10px;color: #fff;">
		Mobile No.<span style="color: red">*</span><input type="tel" name="mobnum" placeholder="Mobile No." required="" style="border: 2px solid #d1caca;height:47px;width: 90%; padding: 2px; color:black !important;">
	</div>
    <div class="col-md-2" style="margin-left: 10px;color: #fff;">
		Date When Need<span style="color: red">*</span><input type="date" name="date" required="" style="border: 2px solid #d1caca;height:47px;width: 90%;color:black !important; padding: 4px;">
	</div>
</div>
<div class="row">
	<div class="col-md-2"></div>
    <div class="col-md-2" style="margin-left: 10px;color: #fff;"><br/>
		Priority<span style="color: red">*</span>
		<select type="text" name="priority" required="" style="border: 2px solid #d1caca;height:47px;width: 90%;color:black !important;">
			<option value="Priority Type">--Priority Type--</option>
                <option value="Normal">Normal</option>
                <option value="Early">Early</option>
        </select>
	</div>
	<div class="col-md-2" style="color: #fff;margin-left: 10px;"><br/>
		Email<span style="color: red">*</span><input type="text" name="email" required="" placeholder="Enter email" style="border: 2px solid #d1caca;height:47px;width: 90%;color:black !important;">
	</div>	
</div></br>
<div class="row">
	<div class="col-md-2"></div><div class="container">
	<div class="col-md-7" style="color: #fff;">
		Other Message<span style="color: red">*</span><br/><textarea type="text" name="message" required="" style="border: 2px solid #d1caca;height: 100px;width:90%;color:black !important;"></textarea>
	</div>
</div></div>
<div class="row">
	<div class="col-md-5"></div>
	<div class="col-md-2" >
		<input type="submit" name="submit" value="Send Request" style=" margin-top:20px;width:130px;background: rgba(165, 24, 24, 0.78);height: 50px;color:#fff;border-radius: 4px;">
	</div>
	<div class="col-md-4"></div>
</div>
</form>
<br/><br/><br/><br/></div>
<?php
if(isset($_POST["submit"])) 
{
	$pname = $_POST['pname'];
	$dname = $_POST['dname'];
	$bloodgp = $_POST['bloodgp'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$cname = $_POST['cname'];
	$mobnum = $_POST['mobnum'];
	$date = $_POST['date'];
	$priority = $_POST['priority'];
	$email = $_POST['email'];
	$message = $_POST['message'];

 $i="INSERT INTO `request`(`pname`, `dname`, `bloodgp`, `state`, `city`, `address`, `cname`, `mobnum`, `date`, `priority`, `email`, `message`) VALUES ('$pname', '$dname', '$bloodgp', '$state', '$city', '$address', '$cname', '$mobnum', '$date', '$priority', '$email', '$message')";
$q=mysqli_query($cn,$i);
		if($q)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{
		echo "<script>alert('Saving Record Failed');</script>";
	}
}
include('footer.php');
?>