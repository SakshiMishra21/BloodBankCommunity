<?php 
session_start();
include('conn.php');
include('header1.php');
include('sidebar1.php');
if($_SESSION['loginstatus'] == "yes"){
 ?>
<body style="background: url(/admin/img/img6.jpg);overflow-x: hidden;">
	<h1 style="text-align: center; margin-top: 100px; margin-left:0px; color: #fff;">ADD BLOOD_GROUP</h1>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into bloodgp(bg_name) values('" . $_POST["t1"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>
<div class="row">
	<div class="col-md-12">
<form method="post">
<table border="0" align="center" width="400" height="300px" class="shaddoww" style="margin-top: 50px;">
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">Blood Group Name</td><td><input type="text" name="t1" required="required"/></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="SAVE" name="sbmt"></td></tr>
</table>
</form>
</div>
</div>
</body>
</html>
<?php include('script.php');
}
else{
	header('location:adminlogin.php');
}
?>
