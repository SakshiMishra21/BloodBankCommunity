<?php 
session_start();
include('conn.php');
include('header1.php');
include('sidebar1.php');
 if($_SESSION['loginstatus'] == "yes"){
?>

<body style="background: url(/admin/img/img6.jpg);overflow-x: hidden;">
	<h1 style="text-align: center; margin-top:100px; margin-left:0px; color: #fff;">EDIT USER</h1>
<?php include('function.php');?>

<?php
$uid = $_GET['id'];
if(isset($_POST["sbmt"]))
{
$age = $_POST['age'];
$state = $_POST['state'];
$city = $_POST['city'];
$mobnum = $_POST['mobnum'];
$email = $_POST['email'];
$password = $_POST['password'];
	$s="UPDATE `donarreg` SET `age`= '$age',`state`='$state',`city`='$city',`mobnum`='$mobnum' , `email`= '$email', `password`= '$password' WHERE id=$uid ";
	mysqli_query($cn,$s);
    echo "<script>alert('Record Save');</script>";
}
$userq = mysqli_query($cn,"SELECT * FROM donarreg WHERE id = $uid");
$fuser = mysqli_fetch_assoc($userq);
?>
<div class="row">
	<div class="col-md-12">
<form method="post">
<table border="0" align="center" width="600" height="650px" class="shaddoww"  style="margin-top:50px;">
</td></tr>
<tr><td class="lefttd">Name:</td><td><input type="text"  value= "<?php  echo $fuser['name']; ?>"  required="required" name="name"  /></td></tr>
<tr><td class="lefttd">Age:</td><td><input type="text"  value= "<?php  echo $fuser['age'];  ?>"  required="required" name="age"  /></td></tr>
<tr><td class="lefttd">State:</td><td><input type="text"  value= "<?php  echo $fuser['state']; ?>"  required="required" name="state"  /></td></tr>
<tr><td class="lefttd">City:</td><td><input type="text"  value= "<?php  echo $fuser['city']; ?>"  required="required" name="city"  /></td></tr>
<tr><td class="lefttd">Mobnum:</td><td><input type="tel"  value= "<?php echo $fuser['mobnum']; ?>" name="mobnum" required="required" /></td></tr>
<tr><td class="lefttd">Email:</td><td><input type="text"  value= "<?php echo $fuser['email']; ?>"  required="required" name="email"  /></td></tr>
<tr><td class="lefttd">Password:</td><td><input type="text"  value= "<?php echo $fuser['password']; ?>"  required="required" pattern="[a-zA-Z0-9]{3,10}" name="password"  /></td></tr>
<tr><td class="lefttd">Message:</td><td><input type="text"  value= "<?php echo $fuser['message']; ?>"  required="required"  name="message"  /></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" value="UPDATE" name="sbmt"></td></tr>
</table>
</form>
</center>
</div>
</div>
</body>

<?php include('script.php');
}
else{
	header('location:adminlogin.php');
}
?>