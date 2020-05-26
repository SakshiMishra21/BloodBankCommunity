<?php
session_start();
include('conn.php');
include('header1.php');
include('sidebar1.php');
 if($_SESSION['loginstatus'] == "yes"){
 
?>

<body style="background:url(/admin/img/img6.jpg); overflow-x: hidden;">
	<h1 style="text-align: center; margin-top:100px; margin-left:0px; color: #fff;">ADD USER</h1>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="INSERT INTO `reg`(`username`, `email`, `password`, `gender`, `city`, `state`, `pincode`, `mobnum`, `bloodgp`,) VALUES ('" .$_POST["t1"] . "','" .$_POST["t2"] . "','".$_POST["t3"] ."','".$_POST["t9"] ."','".$_POST["t4"] ."','".$_POST["t5"] ."','".$_POST["t6"] ."','".$_POST["t7"] ."','".$_POST["t8"] ."',)";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>
<div class="row">
	<div class="col-md-12">
<form method="post">
<table border="0" align="center" width="600" height="650px" class="shaddoww" style="margin-top:50px;">
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">User Name:</td><td><input type="text" name="t1"  placeholder="Enter name" required="required"  title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">Email:</td><td><input type="text" name="t2"  placeholder="Enter email" required="required"  title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">Password:</td><td><input type="password" name="t3" placeholder="Enter password" required="required" pattern=[A-Za-z0-9]+{3} title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">State:</td><td><input type="text" name="t4" placeholder="Enter city" required="required" title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">City:</td><td><input type="text" name="t5" placeholder="Enter State" required="required" title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">Pincode:</td><td><input type="text" pattern="[0-9]{6}"  name="t6" placeholder="Enter pincode" required="required" title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">Mobile No:</td><td><input type="tel" name="t7" placeholder="Enter mobnum" required="required" title="please enter only character between 3 to 15 for user name"/></td></tr>
<tr><td class="lefttd">Gender</td><td><select name="t9" required><option value="">Select</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="other">Other</option>
</select></td></tr>
<tr><td class="lefttd">Blood Group</td><td><select name="t8" required><option value="">Select</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="SAVE" name="sbmt"></td></tr>
</table>
</form>
</div>
</div>
</center> 
</body>
<?php
include('script.php');
}
else{
	header('location:adminlogin.php');
}
?> 