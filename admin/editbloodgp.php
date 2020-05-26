<?php
session_start();
include('conn.php');
include('header1.php');
include('sidebar1.php');
 if($_SESSION['loginstatus'] == "yes"){
 ?>
<body style="background: url(/admin/img/img6.jpg);overflow-x: hidden;">
	<h1 style="text-align: center; margin-top: 100px; margin-left:00px; color: #fff;">EDIT BLOOD_GROUP</h1>
<?php include('function.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="UPDATE bloodgp set bg_name='" .$_POST["t2"] ."' where bg_id='" . $_POST["s2"] ."'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";
}
?>
<div class="row">
	<div class="col-md-12">
<form method="post">
<table border="0" align="center" width="400" height="300px" class="shaddoww" style="margin-top: 50px;">
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">Select Blood Group </td>
	<td><select name="s2" required><option value="">Select</option>
<?php
$cn=makeconnection();
$s="SELECT * FROM bloodgp";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
	}
	mysqli_close($cn);
?>
</select>
<input type="submit" value="Show" name="show"  formnovalidate="formnovalidate" />
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="SELECT * FROM bloodgp where bg_id='" .$_POST["s2"] ."'";
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
<tr><td class="lefttd">Blood Group Name</td><td><input type="text"  name="t2"  value="<?php  if(isset($_POST["show"])){ echo $bg_name ;}    ?>"  required="required"  /></td></tr> </td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="UPDATE" name="sbmt"></td></tr>
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