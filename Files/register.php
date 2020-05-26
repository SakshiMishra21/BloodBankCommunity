<?php
include('conn.php'); 
if(!isset($_SESSION))
  {
    session_start();
  }  
?>
<?php
if(isset($_POST["sbmt"])) 
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $mobnum = $_POST['mobnum'];
    $bloodgp = $_POST['bloodgp'];
    //$cn=makeconnection();           
    $s="INSERT INTO `reg`(`username`, `email`, `password`, `gender`, `city`, `state`, `pincode`, `mobnum`, `bloodgp`) VALUES ('$username', '$email' , '$password', '$gender', '$city', '$state', '$pincode', '$mobnum', '$bloodgp')";
    $q=mysqli_query($cn,$s);
    // mysqli_close($cn);
    if($q)
    {
       echo "<script>alert('Record Save');</script>";
    }
    else
    {
        echo "<script>alert('Something went wrong!');</script>";
    }
}
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif; 
            background: url(/blood/images/img4.jpg)no-repeat;
            background-size: cover;     
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 568px;
            padding: 40px;
            background: rgba(0,0,0,0.8);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,0.5);
            border-radius: 10px; 
        }
        .box h2{
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
        .box .inputBox{
            position: relative;
        }
        .box .inputBox input{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            letter-spacing: 1px;
            margin-bottom: 30px;
            border:none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }
        .box .inputBox label{
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            letter-spacing: 1px;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }
        .box .inputBox input:focus ~ label,
        .box .inputBox input:valid ~ label
        {
            top: -33px;
            left: 0;
            color: #03a9f4;
            font-size: 12px;
        }   
        .box input[type="submit"]{
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #03a9f4;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 45px;
        }               
    </style>
</head>
<body>
    <div class="box">
        <h2 style="margin-top: 80px;">Register</h2>
        <form method="POST" action=""  enctype="multipart/form-data">
             <div class="inputBox">
                <input type="text" name="username" required="">
                <label>Full Name</label>
             </div>
             <div class="inputBox">
                <input type="text" name="email" required="">
                <label>Email</label>
             </div>
             <div class="inputBox">
                <input type="tel" name="mobnum" required="">
                <label>Mobile No.</label>
             </div>
             <div class="inputBox">
                <input type="password" name="password" required="">
                <label>Password</label>
             </div>
             <div class="inputBox">
                <input type="text" name="pincode" required="">
                <label>Pincode</label>
             </div>
             <div class="inputBox" style="color: #fff">Blood Group<br/>
                <select name="bloodgp" style="width: 487px;margin-left: 0px;margin-top: 5px; height: 40px;">
				<option value="Dont Know">--Dont Know--</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
             </div><br/>
             <div class="inputBox"style="color: #fff">Gender<br/>
                <select name="gender"  style="width: 487px;margin-left: 0px;margin-top: 5px; height: 40px;">
				<option value="select">--Select--</option>
                <option value="Male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div><br/>
        <div class="inputBox"style="color: #fff">State<br/>
		<select name="state" placeholder="select state" style="width: 487px;margin-left: 0px;margin-top: 5px; height: 40px;">
			<option value="select">--Select State--</option>
            <option value="uttarpradesh">UttarPradesh</option>
             </select>
        </div><br/>
        <div  class="inputBox"style="color: #fff">City<br/>
		<select name="city" style="width: 487px;margin-left: 0px;margin-top:3px; height: 40px;">
			<option value="select">--Select City--</option>
            <option value="kanpur">Kanpur</option>
            <option value="lucknow">Lucknow</option>
	   </select>
	</div>
             <input type="submit" name="sbmt" value="Submit ">
        </form>
    </div>
  
</body>
</html>