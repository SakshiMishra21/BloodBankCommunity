<?php
session_start();
include('conn.php');
include('header1.php');
include('sidebar1.php');
if($_SESSION['loginstatus'] == "yes"){
?>
<body style="background: url(/admin/img/img6.jpg); overflow-x: hidden;">
	<h1 style="text-align: center; margin-top: 100px; margin-left:0px; color: #fff;">ADD CITY</h1>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="INSERT INTO `city`( `c_name`, `pincode`, `district`, `state`) VALUES ('" . $_POST["t3"] . "','" .$_POST["t2"] . "','" .$_POST["t1"] . "','". $_POST["s2"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>
<div class="row">
		<div class="col-md-12">
<form method="post">
	
<table border="0" align="center" width="400px" height="300px" class="shaddoww" style="margin-top: 50px;">
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">City Name</td><td><input type="text" name="t3" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character between 5 to 15 for city name"/></td></tr>
<tr><td class="lefttd">Pin Code</td><td><input type="number" name="t2" required="required" pattern="[0-9]{6,10}" title="please enter only numbers between 6 to 10 for pin code"/></td></tr>
<tr><td class="lefttd">District</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character between 5 to 15 for city name"/></td></tr>
<tr><td class="lefttd">State </td><td><select name="s2" required><option value="">Select</option>
<?php
$cn=makeconnection();
$s="SELECT * FROM state";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result); ?>


	<?php
	while($data=mysqli_fetch_assoc($result))
	{
?>
	
	<option value="<?php echo $data['s_name'];?>"><?php echo $data['s_name'];?></option>
	
<?php	
	}
	mysqli_close($cn);
?>
</select></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="SAVE" name="sbmt"></td></tr>
</table>

</form>
</div>
	</div></div>
</div>
</center> 

</body>
</html>
<?php
include('script.php');
}
else{
	header('location:adminlogin.php');
}
?>