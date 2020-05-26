<?php
include('header.php');
include('conn.php');
?>
<form method="POST" action="">
<div class="container" style="background: url(/images/img6.jpg); width: 100%;margin-top: 70px;"><br/><br/>
	<div class="container" style="margin-top: 100px;border: solid; background-image: url(/images/img8.jpg); background: cover;">
		<h3 style="margin-top: 2px; font-family: sans-serif; font-size: 30px; color: #fff;">Find Blood groups</h3>
		
		<?php
		$blood_all = mysqli_query($cn,"SELECT * FROM bloodgp");

		?>
		<div class="col-md-4" style="margin-top: 0px;margin-left: 40px;">
			<select name="bloodgp" style="width: 200px; height: 40px; margin-top: 54px;margin-bottom: 40px;">
				<option value="">--Select Blood Group--</option>
			<?php while($bloodgp = mysqli_fetch_assoc($blood_all)){ ?>
				<option value="<?php echo $bloodgp['bg_name']; ?>"><?php echo $bloodgp['bg_name']; ?></option>
		<?php } ?>
				
			</select>
		</div>
		<div class="col-md-2" style="margin-top: 0px;margin-left: 10px;">
				<input type="submit" name="submit" value="Search"style="width: 100px; background-color:grey;  margin-top:54px;height: 40px;">
			</div>
	</div>
	<br/><br/><br/><br/><br/><br/>
</div>
</form>
<!--fetch the blood groups-->
<?php
//$cn=makeconnection();
if(isset($_POST['submit'])){
echo"<h1 style='margin-top: 20px;color: rgba(165, 24, 24, 0.78);text-align:center;'>Blood Groups</h1>";
// $username = $_POST['username'];
// $email = $_POST['email'];
// $mobnum = $_POST['mobnum'];
$bloodgp = $_POST['bloodgp'];
$s="SELECT * FROM `donarreg` WHERE bloodgp='$bloodgp'";
//"SELECT * FROM `reg` WHERE email='$email' AND mobnum='$mobnum' AND bloodgp=$bloodgp";
	$result=mysqli_query($cn,$s);
	//$r=mysqli_num_rows($result); 
while($data=mysqli_fetch_assoc($result))
	// print_r($result);exit();
	{
?>
<div class="container-fluid" style="margin-top:100px; box-sizing: border-box;">
	<div class="row">
		<div class="col-md-6" style="height: 245px;margin-left: 0px;">
        <img src="<?php echo $data['image'];?>" style="height: 196px;width: 294px;margin-left: 351px;margin-top: -3px;">
        </div>
		<div class="col-md-6" style="height: 245px;margin-left: 0px;margin-top:-9px; ">
			<p style="margin: 4px;
    				  margin-left:-263px;
    				  font-style: italic;
    				  font-family: -webkit-body;
                      font-weight: bolder;
                      font-size: 23px;
                      text-align: center;">  
                      Name:&nbsp&nbsp&nbsp&nbsp<?php echo $data['name'];?> <br/> 
                      </i>Email:&nbsp&nbsp&nbsp&nbsp<?php echo $data['email'];?> <br/>       	
                      Mobile No.:&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $data['mobnum'];?><br/>
                      Blood Group:&nbsp&nbsp<?php echo $data['bloodgp'];?><br/>
                      
                      
            </p>
        </div>
	</div>
</div>
<?php
}
?>
<br/><br/><br/><br/>
<?php
}
include('footer.php');
?>