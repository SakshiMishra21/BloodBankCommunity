<?php
session_start();
include('conn.php');
include('header1.php');
include('sidebar1.php');
if($_SESSION['loginstatus'] == "yes"){
?>

<body style="background:url(/admin/img/img6.jpg); overflow-x: hidden;">
	<h1 style="text-align: center;margin-top: 100px; margin-left:0px; color: #fff;">ADD BLOOD_BANK</h1>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$name = $_POST['name'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$mobnum = $_POST['mobnum'];
	//$cn=makeconnection();
	$i="INSERT INTO `bloodbank`(`name`, `state`, `city`, `address`, `mobnum`) VALUES ('$name', '$state','$city', '$address', '$mobnum' )";
	mysqli_query($cn,$i);
	//mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>
<div class="row">
		<div class="col-md-12">
<form method="post">
<table border="0" align="center" width="400px" height="300px" class="shaddoww" style="margin-top:50px;">
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">Name:</td><td><input type="text" name="name"  placeholder="Enter name" required="required"  title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">State:</td><td><input type="text" name="state" placeholder="Enter state" required="required" title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">City:</td><td><input type="text" name="city" placeholder="Enter city" required="required" title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">Address:</td><td><input type="text" name="address" placeholder="Enter address" required="required" title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">Mobile No.:</td><td><input type="text" name="mobunm" placeholder="Enter mobile number" required="required"/></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="SAVE" name="sbmt"></td></tr>
</table>
</form> 
</div>
</div>
</body>
<?php
include('script.php');
}
else{
	header('location:adminlogin.php');
}
?> 
