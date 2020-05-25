<?php
include('header.php');
//include('sidebar.php');
include('conn.php');
?>
<body>

	<div style="background: url(/blood/images/img6.jpg);">
<h1 style="margin:70px; color: #FFF; text-align: center;">Upcoming News</h1>

<?php
//$cn=makeconnection();
$s="SELECT * FROM events";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result); 
while($data=mysqli_fetch_assoc($result))
	{
?>
<div class="container-fluid" style="margin-top:70px;">
	
	<div class="row">
		<div class="col-md-6">
			<p style="margin-left: 105px;font-family:sans-serif;font-size: 18px;color: #fff; text-align: center;"><?php echo $data['news'];?>           	
            </p>
        </div>
		<div class="col-md-6">
            <img src="admin/<?php echo $data['image']; ?>" style="height: 211px;width: 496px; border:double;border-color: linen;"></div>
	</div>
</div>
<?php
}
?>
</body>
</div>
<?php
include('footer.php');
?>