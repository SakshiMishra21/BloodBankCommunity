<?php
include('header.php');
//include('sidebar.php');
?>

<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4" style="margin-top: 7%;">
	<?php
	$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';
	$paypalId='kvs3944-facilitator@gmail.com';
    ?>
    			<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">
					<div class="panel price panel-red">
						    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
						    <input type="hidden" name="cmd" value="_xclick">
						    <input type="hidden" name="item_name" value="It Solution Stuff">
						    <input type="hidden" name="item_number" value="1">
						    <input type="hidden" name="amount" value="500">
						    <input type="hidden" name="no_shipping" value="1">
						    <input type="hidden" name="currency_code" value="INR">
						    <input type="hidden" name="cancel_return" value="locolhost/paypal/cancel.php">
						    <input type="hidden" name="return" value="locolhost/paypal/success.php">  
						    
						<div style="text-align: center;">
							<h3>Total Charity Amount&nbsp&nbsp&nbspRs.500/-</h3>
						</div>
						<div class="panel-footer" style="margin-top: 25px;">
							<button class="btn btn-lg btn-block btn-danger" href="#">CHARITY NOW!</button>
						</div>
					</div>
    			</form>
	</div>
	<div class="col-md-4"></div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
	<?php
	$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';
	$paypalId='kvs3944-facilitator@gmail.com';
    ?>
    			<form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">
					<div class="panel price panel-red">
						    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
						    <input type="hidden" name="cmd" value="_xclick">
						    <input type="hidden" name="item_name" value="It Solution Stuff">
						    <input type="hidden" name="item_number" value="1">
						    <input type="hidden" name="amount" value="1000">
						    <input type="hidden" name="no_shipping" value="1">
						    <input type="hidden" name="currency_code" value="INR">
						    <input type="hidden" name="cancel_return" value="locolhost/paypal/cancel.php">
						    <input type="hidden" name="return" value="locolhost/paypal/success.php">  
						    
						<div style="text-align: center;">
							<h3>Total Charity Amount&nbsp&nbsp&nbspRs.1000/-</h3>
						</div>
						<div class="panel-footer" style="margin-top: 25px;">
							<button class="btn btn-lg btn-block btn-danger" href="#">CHARITY NOW!</button>
						</div>
					</div>
    			</form>
</div>
<div class="col-md-4"></div>
</div>
<?php
include('footer.php');
?>