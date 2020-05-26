<?php
session_start();
include('conn.php');
include('header1.php');
include('sidebar1.php');
 if($_SESSION['loginstatus'] == "yes"){
?>
<body style="background: url(/admin/img/img6.jpg); overflow-x: hidden;">
	<h1 style="text-align: center; margin-top: 100px; margin-left:0px; color: #fff;">DELETE BLOOD_GROUP</h1>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="DELETE FROM bloodbank where id='"  . $_POST["s2"] ."'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record delete');</script>";
}
?>
<div class="row">
	<div class="col-md-12">
<form method="post">
<table border="0" align="center" width="400" height="300px" class="shaddoww" style="margin-top: 50px;">
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">Select BloodBank</td><td><select name="s2" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="SELECT * FROM bloodbank";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
			echo "<option value=$data[0]>$data[1]</option>";
	}
	mysqli_close($cn);
?>
</select>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from bloodbank where id='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$bg_id=$data[0];
	$bg_name=$data[1];
    mysqli_close($cn);
}
?>
</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="DELETE" name="sbmt"></td></tr>
</table>
</form>
</div>
</div>
</center>
</body>
</html>
<?php include('script.php');
}
else{
	header('location:adminlogin.php');
}
 ?>