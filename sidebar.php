<!DOCTYPE html>
<html>
<head>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	
	<title></title>
	<style>



.sidebar2{
	position: fixed;
	top: 50%;
	right: -350px;
	transform: translateY(-50%);
	width: 350px;
	height: auto;
	padding: 40px;
	background: #fff;
	box-shadow: 0 20px 50px rgba(0,0,0,0.5);
	box-sizing: border-box;
	transition: 0.5s;
}

.sidebar2.active{
	right: 0px;
}
.sidebar2 input,
.sidebar2 textarea{
	width: 100%;
	height: 36px;
	padding: 5px;
	margin-bottom: 10px;
	border: 1px solid rgba(0,0,0,0.5);
	outline: none; 
}

.sidebar2 textarea{
	height: 60px;
	resize: none;
}

.sidebar2 input[type="submit"]{
	background: #00bcd4;
	color: #fff;
	border: none;
	font-style: 18px;
}

.toggle2{
	position: absolute;
	top: -30px;
	right: -48px;
	width: 48px;
	height: 48px;
	margin-top: 30px;
	line-height: 48px;
	text-align: center;
	cursor: pointer;
	background: green;
}

.toggle2:before{
	content: '\f232 ';
	font-family: fontAwesome;
	color:white;
	font-size: 18px;
}

.toggle2.active:before{
	content: '\f00d ';
}
	</style>
</head>
<body>


<div class="sidebar2">
	  	<div class="toggle2"></div>
	  	<a href="https://api.whatsapp.com/send?phone=918924891834" target="blank">Click Here To Chat</a>
	</div>
	<div class="banner2"></div>
	<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.toggle2').click(function(){
				$('.sidebar2').toggleClass('active')
				$('.toggle2').toggleClass('active')
			})
		})
	</script>
</body>
</html>