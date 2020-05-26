<?php
session_start();
include('conn.php');
include('header1.php');
include('sidebar1.php');
 if($_SESSION['loginstatus'] == "yes"){
?>

<body style="background: url(/admin/img/img6.jpg);overflow-x: hidden;">
	<h1 style="text-align: center; margin-top: 100px; margin-left:0px; color: #fff;">EDIT BLOOD_BANK</h1>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$s="UPDATE `bloodbank` SET `state`='$state',`city`='$city',`address`='$address' WHERE name='$name'";
	//"UPDATE city set c_name ='" . $_POST["t3"] . "',pincode='" .$_POST["t2"] . "',district='" .$_POST["t1"] ."',state='" .$_POST["s1"] . "' where c_id='" . $_POST["s2"] ."'";
	mysqli_query($cn,$s);
    echo "<script>alert('Record Save');</script>";
}
?>
<div class="row">
	<div class="col-md-12">
<form method="post">
<table border="0" align="center" width="600" height="300px" class="shaddoww" style="margin-top: 50px;">
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">Select Name</td><td><select name="name"><option value="Select">Select</option>
<?php
$cn=makeconnection();
$s="SELECT * FROM bloodbank";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["name"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
	}
?>
</select>
<input type="submit" value="Show" name="show" formnovalidate="formnovalidate"/>
<?php
if(isset($_POST["show"]))
{
$s="SELECT * FROM bloodbank where id='" .$_POST["name"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	$data=mysqli_fetch_array($result);
	$id=$data[0];
	$name=$data[1];
	$city=$data[2];
	$state=$data[3];
	$address=$data[4];
	mysqli_close($cn);
}
?>
<tr><td class="lefttd">City</td><td><input type="text" name="t3"  value="<?php  if(isset($_POST["show"])){ echo $city ;}    ?>" required="required" pattern="[a-zA-Z _]{5,18}" title="please enter only character  between 5 to 18 for city name"  /></td></tr> </td></tr></td></tr>
<tr><td class="lefttd">State</td><td><input type="text" name="t2"  value="<?php  if(isset($_POST["show"])){ echo $state ;}    ?>" required="required" pattern="" title="please enter only numbers  between 6 to 10 for pin code"  /></td></tr> </td></tr></td></tr>
<tr><td class="lefttd">Address</td><td><input type="text" name="t1"  value="<?php  if(isset($_POST["show"])){ echo $address ;}    ?>" required="required" pattern="[a-zA-Z _]{5,18}" title="please enter only character  between 5 to 18 for district"  /></td></tr> </td></tr></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="UPDATE" name="sbmt"></td></tr>
</table>
</form>
</div>
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