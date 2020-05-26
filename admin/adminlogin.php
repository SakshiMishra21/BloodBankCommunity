<?php
include('conn.php');
?>

<?php 
if(!isset($_SESSION)){
    session_start();
}?>

<body>
<?php
include('function.php');
?>

<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"])) 
{
    $username = $_POST['username'];
    $password = $_POST['password'];
	//$cn=makeconnection();			
    $s="SELECT * FROM adminlogin WHERE username='$username' AND password='$password'";
    //"SELECT * FROM admin WHERE email='$email' AND pwd='$password'";		
 	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	$data=mysqli_fetch_array($q);
    mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["username"]=$_POST["username"];
		$_SESSION['loginstatus']="yes";
?>
<script type="text/javascript">
	window.top.location = '/admin/index.php';
</script>
<?php	}
	else
	{
		echo "<script>alert('Invalid User Name Or Password');</script>";
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
            background: url(/admin/img/p.jpg)no-repeat;
            background-size: cover;     
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
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
        }               
    </style>
</head>
<body>
    <div class="box">
        <h2>LOGIN</h2>
        <form method="POST" action=""  enctype="multipart/form-data">
             <div class="inputBox">
                <input type="text" name="username" required="">
                <label>Username</label>
             </div>
             <div class="inputBox">
                <input type="password" name="password" required="">
                <label>Password</label>
             </div>
             <input type="submit" name="sbmt" value="Submit ">
        </form>
    </div>
</body>
</html> 