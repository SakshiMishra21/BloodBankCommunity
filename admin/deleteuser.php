<?php
session_start();
include('conn.php');
include('header1.php');
include('sidebar1.php');

 if($_SESSION['loginstatus'] == "yes"){
  ?>
<body style="background: url(/admin/img/img6.jpg);overflow-x: hidden;">
  <h1 style="text-align: center; margin-top:100px; margin-left:0px; color: #fff;">DELETE USER</h1>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
  $cn=makeconnection();
  $s="DELETE FROM donarreg where id='" . $_POST["s2"] ."'";
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
<tr><td class="lefttd">Select User</td><td><select name="s2" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="SELECT * FROM donarreg";
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
$s="select * from donarreg where id='" .$_POST["s2"] ."'";
  $result=mysqli_query($cn,$s);
  $r=mysqli_num_rows($result);
  //echo $r;
  $data=mysqli_fetch_array($result);
  $id=$data[0];
  $username=$data[1];
  $email=$data[2];
  $password=$data[3];
  $city=$data[4];
  $state=$data[5];
  $pincode=$data[6];
  $mobnum=$data[7];
  $bloodgp=$data[8];
  $role=$data[9];
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