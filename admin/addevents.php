<?php
session_start();
include('header1.php');
include('sidebar1.php');
include('conn.php');
 if($_SESSION['loginstatus'] == "yes"){

?>
<body style="background: url(/admin/img/img6.jpg);overflow-x: hidden;">
	<h1 style="text-align: center; margin-top:100px; margin-left:0px; color: #fff;">ADD EVENTS</h1>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"])){
	$news=$_POST['news'];
	// echo $_FILES["image"]["name"]; exit;
	    if($_FILES['image']['name']){
    move_uploaded_file($_FILES['image']['tmp_name'], "img/".$_FILES['image']['name']);
    $img="img/".$_FILES['image']['name'];
}
   $i="INSERT INTO events(news,image)value('$news','$img')";
    mysqli_query($cn, $i);
    echo "<script>alert('Record Save')</script>";
}
?>
<div class="row">
	<div class="col-md-12">
<form method="post" enctype="multipart/form-data">
<table border="0" align="center" width="400px" height="300px" class="shaddoww" style="margin-top: 50px;">
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td class="lefttd">News</td><td><textarea type="text" name="news" required="required" pattern="[a-zA-Z _]{5,15}" style="height: 164px;width:282px;"></textarea></td></tr>
<tr><td class="lefttd">Image</td><td><input type="file" name="image"></tr> 
<tr><td>&nbsp;</td><td><input type="submit" value="SAVE" name="sbmt"></td></tr>
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