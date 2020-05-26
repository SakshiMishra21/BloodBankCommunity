<?php
include('header.php');
//include('sidebar.php');
include('conn.php');
?>
<!-- contact -->
<br/><br/><br/>
<div class="contanier-fluid">
<div style="background: url(/images/img6.jpg);margin-top:2px;">
<div style="text-align: center;"><br/>		
	<h1 style="color:#fff;">CONTACT US </h1>
</div>
<div class="agileits-contact" style="margin-top: -58px;">
		<div>
			<img src="/images/img3.jpg" style="height:200px; margin-top:84px;margin-left:50px;">
		</div>
		<div class="contact-right-w3l">
			<div class="bnr-rgt-w3-agile" style="background: #fff;">
				<form  method="post" style="max-width: all;">
					<div>
						<input type="text" class="name" name="name" placeholder="Enter Name" required="">
					</div>
					
						<?php
					
						if($_SESSION['u_id'])
							{?>
								<input type="hidden" name="u_id" value="<?php echo $_SESSION['u_id'] ?>">
							<?php }
							?>
					
					<div>
						<input type="email" class="name" name="email" placeholder="Email" required="">
					</div>
					<div>
						<input type="text" class="name" name="mobnum" placeholder="Mobile No." required="">
					</div>
						<div>
							<input type="text" class="name" name="sub" placeholder="Subject" required="">
						</div>
						<div>
							<input type="text"  placeholder="Your Message" name="message" placeholder="Message" required="">
						</div>
						<div>
							<input type="submit" value="Send Message" name="sbmt" style="margin-top: -2px;">
						</div>
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div></div></div>
	<!-- //contact -->
<?php
if(isset($_POST["sbmt"])) 
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobnum=$_POST['mobnum'];
	$sub=$_POST['sub'];
	$message=$_POST['message'];
	
	if($_SESSION['u_id']){
	      $u_id = $_SESSION['u_id'];
		  $s="INSERT INTO `contact`(`u_id`, `name`, `email`, `mobnum`, `sub`, `message`) VALUES('$u_id','$name','$email','$mobnum','$sub','$message')";
	}
	else
	{
	 $s="INSERT INTO `contact`(`name`, `email`, `mobnum`, `sub`, `message`) VALUES('$name','$email','$mobnum','$sub','$message')";
     }
	$q=mysqli_query($cn,$s);
	
	if($q>0)
	{
	    echo "<script>alert('Thank You For Contact Us! We will inform you through Mail...');</script>";
	}
	else
	{
	    echo "<script>alert('Saving Record Failed');</script>";
	}
}	
include('footer.php');
?>