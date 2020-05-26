<?php
include('header.php');
include('sidebar.php');
include('conn.php');
?>
<div style="background: url(/blood/images/img6.jpg);">
<?php
//$cn=makeconnection();
if(isset($_POST['submit'])){
echo "<h1 style='margin-top: -4px; color: #fff;'>Blood Banks</h1>";
$states = $_POST['city'];
$cities = $_POST['state'];
echo $s="SELECT * FROM bloodbank WHERE state='$states' AND city='$cities' ";
	$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result); 
while($data=mysqli_fetch_assoc($result))
	{
?>
<div class="container-fluid" style="margin-top:100px; box-sizing: border-box;">
	<div class="row">
		<div class="col-md-6">
			<p style="margin: 4px;
    				  margin-left: 312px;
    				  font-style: italic;
    				  font-family: -webkit-body;
                      font-weight: bolder;
                      font-size: 18px;
                      color: #fff;">
                      <h1 style="color: #fff;box-sizing:"><?php echo $data['name'];?></h1><br/>   
                     <i class="fa fa-map-marker" aria-hidden="true" style="color: #fff"></i>
                      State:&nbsp&nbsp&nbsp&nbsp<?php echo $data['state'];?> <br/>       	
                      <i class="fa fa-flag" aria-hidden="true"></i>City:&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $data['city'];?><br/>
                      <i class="fa fa-address-book" aria-hidden="true"></i>Address:&nbsp&nbsp<?php echo $data['address'];?>
            </p>
        </div>	
	</div>
</div>
<?php
}
?>
</div>
<br/><br/><br/><br/>
<?php
}
include('footer.php');
?>
<?php
include('footer.php');
?>