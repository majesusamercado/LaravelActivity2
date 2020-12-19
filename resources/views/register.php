<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
<link href="/css/style.css" rel="stylesheet">
<style>
form{

	background-color: cadetblue;
	color: white;
	table-layout: auto;
	width:450px;
	height: 300px;
	padding-top: 15px;
	padding-bottom: 0px;
	font-size: 20px;
	text-align: center;
	border:1px solid black;
	border-collapse: collapse;
	
}
.button a{
	background-color: white;
	color: black;
	padding: 0px;
	padding-bottom: 2px;
	padding-left: 5px;
	padding-right: 5px;
	border: 1px solid black;
	text-decoration: none;
	font-size: 16px;

}
.logo
{
   margin-top:5px;
}

.header
{
  padding:10px;
  color:#484848;
  font-size:20px;
  height:150px;
  margin-top: 10px;
  margin-bottom:0px;
}
span
{ 
	margin-top: 0px;
	font-size: 15px;
	color: white;
}
.right{
 float:right; 
 margin-top:-137px;
}
</style>
</head>

	<header>
		<div class="main">
			<ul>
				<li> <a href="http://localhost:8000/home">HOME</a></li>
				<li> <a href="http://localhost:8000/about"> ABOUT US</a></li>
				<li> <a href="http://localhost:8000/contact"> CONTACT</a></li>
				<li> <a href="http://localhost:8000/login"> LOGIN</a></li>
				<li> <a href="http://localhost:8000/register"> REGISTER</a></li>		
			</ul>
		</div>
		<div id="container">
		<div class="header">
			<span>&nbsp;Team MaDaLe</span><div class="logo"><img src="img/mde.png" width="100" height="90" class="left">
			</div>
		</div>
	</header>

<br><br>
<body>
<center>
		<form>
		<div>
		
		<b>REGISTER</b>
		<br><br><br>

			First Name:&emsp;<input type="text" name="fname" placeholder="First name"> 
			<br>
																	
			Last Name:&emsp;<input type="text" name="lname" placeholder="Last name">
			<br>

			Email:&emsp;&emsp;&emsp;<input type="text" name="email" placeholder="Mobile number or email">
			<br>

			Password:&emsp;&nbsp;&nbsp;<input type="text" name="password" placeholder="Password">
			<br><br><br><br>

			<div class="button">
			<input type="Submit" class="btn btn-success" name="sign" value="Register" >&nbsp;<a href="http://localhost:8000/login" class="btn btn-success">Login</a>
			</div>
					
		</div>
	</form>	

</center>
<br><br><br><br><br><br>
<footer>
	<center>
		BSIT 3 - BLOCK 5
		<br>
		C265-C266
	</center>
</footer>

</body>
</html>