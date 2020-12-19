<!DOCTYPE html>
<html>
<head>
	<title>About Page</title>
<link href="/css/style.css" rel="stylesheet">
<style>
table{
	color: white;
	table-layout: auto;
	width:450px;
	height: 230px;
	padding-top: 0px;
	padding-bottom: 0px;
	font-size: 20px;
	text-align: center;
	border:1px solid white;
	border-collapse: collapse;
	border-radius: 30px 30px 30px 30px;
}
.container{
	margin-left: 190px;
	padding-top: 45px;			
}

.gallery{
	background-color: cadetblue;
	margin: 0px;
	border: 1px solid white;
	border-radius: 10px;
	float: left;
	width: 290px;
	margin-left: 30px;
}

.gallery img{
	padding-top: 10px;
	margin-left: 8px;
	width: 270px;
	height: 190px;

}
.gallery img:hover{
	transform: scale(1.5);
	transition: .3s transform;
}


.desc{
	padding: 15px;
	text-align: center;
	color: white;
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

<br>
<body>	
<header>
		<center>
		<h2>ABOUT US</h2>
		</center>
	</header>
<table>
<center>
		<div class="container">
			<div class="gallery">
				<img src="../img/pic1.png">
				<div class="desc"><b>ELLEN O. RAMOS</b>
				<br>Hi Im Ellen O. Ramos , 20 years of age, living in Poblacion Balungao Pangasinan. I was born on October 19, 1999. Im taking Bachelor of Science Information Technology at Urdaneta City University. The harder you work for something, the greater you’ll feel when you achieve it<br><br><br><br>
				</div>
			</div>

			<div class="gallery">
				<img src="../img/pic2.png">
				<div class="desc"><b>DANIEL C. ORGANISTA</b>
				<br>I am 20 years of age, living in San Jose, Pangasinan. I was born on March 02, 1999. Im taking Bachelor of Science Information Technology at Urdaneta City University. I believe that 6 month of focus and hardwork can put you 5 years ahead in life. Don't underestimate the power of consistency and desire. <br><br><br><br>
				</div>
			</div>

			<div class="gallery">
				<img src="../img/pic3.png">
				<div class="desc"><b>MA. JESUSA B. MERCADO</b>
				<br>Hi! My name is Ma. Jesusa B. Mercado, 20 years old from Calepaan, Asingan, Pangasinan. I was born on December 24, 1999. I'm a 3rd year college student at Urdaneta City University. I am taking Bachelor of Science in Information Technology. I always want to make my parents proud of me. They are the reason why I continue to strive toward my goals in life. <br><br>
				</div>
</div>
</div>
	</table>
</center>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
	<center>
		BSIT 3 - BLOCK 5
		<br>
		C265-C266
	</center>
</footer>
</body>
</html>