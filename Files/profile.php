<?php
include("conn.php");
include("header.php");
//error_reporting(0);
if($_SESSION['loginstatus'] == ""){
  header('Location:login.php');
}
   $id =  $_GET['id'];
  $q = "SELECT * FROM donarreg WHERE id= '$id' ";
  $qry = mysqli_query($cn, $q);
?>

<?php

while ( $fetch = mysqli_fetch_assoc($qry))
  {

?>
<style type="text/css">
  .form-control {
    width: 50%;
    
}
</style>
<div class="col-md-12">
        <h2 style="margin-top: 100px;text-align: center;">Profile</h2>
</div>
<div class="container">
<form  method="post" action="" style="margin-top: 0px;">
            <div class="form-group">
              <label class="control-label">Full Name </label>
              <input type="text" name="name" value="<?php echo $fetch['name']; ?>" class="form-control white_bg" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Gender </label>
              <input type="text" name="gender" value="<?php echo $fetch['gender']; ?>" class="form-control white_bg"  required="">
            </div>
            <div class="form-group">
              <label class="control-label">Age</label>
              <input type="text" name="age" value="<?php echo $fetch['age']; ?>" class="form-control white_bg"  required="">
            </div>
            <div class="form-group">
              <label class="control-label">Weight</label>
              <input type="text" name="weight" value="<?php echo $fetch['weight']; ?>" class="form-control white_bg" required="">
            </div>
            <div class="form-group">
              <label class="control-label">State</label>
              <input type="text" name="state" value="<?php echo $fetch['state']; ?>" class="form-control white_bg"  required="">
            </div>
            <div class="form-group">
              <label class="control-label"> City </label>
              <input type="text" name="city" value="<?php echo $fetch['city']; ?>" class="form-control white_bg" required="">
            </div>
            <div class="form-group">
              <label class="control-label"> Mobile No. </label>
              <input type="text" name="mobnum" value="<?php echo $fetch['mobnum']; ?>" class="form-control white_bg" required="">
            </div>
            <div class="form-group">
              <label class="control-label"> Email </label>
              <input type="text" name="email" value="<?php echo $fetch['email']; ?>" class="form-control white_bg" required="">
            </div>
            <div class="form-group">
              <label class="control-label"> Blood Group </label>
              <input type="text" name="bloodgp" value="<?php echo $fetch['bloodgp']; ?>" class="form-control white_bg" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Date</label>
              <input type="date" name="date" value="<?php echo $fetch['date']; ?>" class="form-control white_bg" required="">
            </div>
            <div class="form-group">
              <label class="control-label"> Message </label>
              <input type="text" name="message" value="<?php echo $fetch['message']; ?>" class="form-control white_bg" required="">
            </div><br/>
            <div class="form-group" style="text-align: center;">
              <button class="btn" type="submit" name="submit" style="color: rgba(165, 24, 24, 0.78);">Update <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
</div>
<?php
}

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $mobnum = $_POST['mobnum'];
    $email = $_POST['email'];
    $bloodgp = $_POST['bloodgp'];
    $date = $_POST['date'];
    $message = $_POST['message'];
     echo $up = "UPDATE `donarreg` SET `name`='$name',`age`='$age',`weight`='$weight',`state`='$state',`city`='$city',`mobnum`='$mobnum',`email`='$email',`bloodgp`='$bloodgp',`date`='$date',`message`='$message' WHERE id= '$id' ";
     $upq = mysqli_query($cn,$up);

     if($upq){
      echo "update";
      //echo "<script type='text/javascript'>window.top.location='http://localhost/Car/admin/manage.php';</script>";
      ?>
      <script type='text/javascript'>
        var url = window.location.origin;
        // console.log(url);
      window.top.location=url+'/profile.php';
    </script>
    <?php
   }
  }
?>
<?php
include("footer.php");
?>