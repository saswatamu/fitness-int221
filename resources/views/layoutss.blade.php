<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('webpage')</title>
	
<style>
body,html{
	margin: 0;
	padding: 0;
	width: 100%;
	height: 100%; 
}

h1{
	color: #FFA500;
	font-size: 35px;
	font-family: Arial;
	padding: 10px;
	}
nav{
	place-items:center;
	display: grid;

	 }
nav ul{
	list-style-type: none;
	}
nav ul a{
	display: inline-block;
	padding: 20px;
	text-decoration: none;
	color:#000;
	transition: 0.4s ease-in-out;
}
nav ul a li{
	color: white;
}
nav ul a li:hover{
	color:  #008000;
}

.btn{
	width: 100%
	height: 70px;
	background: #008000;
	border: 2px solid #008000;
	margin-top: 13px;
	color: #fff;
	font-size: 15px;
	border-bottom-right-radius: 10px;
	
}
.btn:focus{
	outline: none;
}
.srch:focus{
	outline: none;
}
.content{
	width: 700px;
	height: auto;
	//margin: auto;
    padding-left: 20px;
	color: #fff;
	position: absolute;
}
.content .par{
	padding-left: 100px;
	padding-bottom: 30px;
	font-family: Arial;
	letter-spacing: 1.2px;
	line-height: 30px;
}
.content h1{
	font-family: 'Times New Roman';
	font-size: 50px;
	padding-left: 100px;
	margin-top: 9%;
	letter-spacing: 2px;
}
.content .cn{
	width: :160px;
	height: 40px;
	background: #008000;
	border: none;
	margin-bottom: 10px;
	margin-left: 20px;
	font-size: 18px;
	border-radius: 10px;
	cursor: pointer;
	transition: .4s ease;
}
.content .cn a{
	text-decoration: none;
	color: #000;
	transition: 3s ease;
}
.cn:hover{
	background-color: #fff
}
.content span{
	color: #008000;
	font-size: 60px;
}
.form{
	width: : 250px;
	height: 380px;
	background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%) ;
	position: absolute;
	top: -20px;
	left: 870px;
	border-radius: 10px;
	padding: 25px;
}
.form h2{
	width: 220px;
	font-family: sans-serif;
	text-align: center;
	color: #008000;
	font-size: 22px;
	background-color: 10px;
	margin: 2px;
	padding: 8px;
}
.form input{
	width: 240px;
	height: 35px;
	background: transparent;
	border-bottom: 1px solid #008000;
	border-top: none;
	border-right: none;
	border-left: none;
	color: #fff;
	font-size: 15px;
	letter-spacing: 1px;
	margin-top: 30px;
	font-family: sans-serif;
}
.form input:focus{
	outline:none;
}
::placeholder{
	color:#fff;
	font-family: Arial;
	text-align: center;
}

.btnn{
	width: 240px;
	height: 40px;
	background: #008000;
	border: none;
	margin-top: 30px;
	font-size: 18px;
	border-radius: 10px;
	cursor: pointer;
	color: #fff;
	transition: 0.4s ease;
}
.btnn:hover{
	background: #fff;
	color: #008000;
}
.btnn a{
	text-decoration: none;
	color: #000;
	font-weight: bold;
}
.form .link{
	font-family: Arial;
	font-size: 17px;
	padding-top: 20px;
	text-align: center;
}
.form .link a{
	text-decoration: none;
	color: #008000;
}
.liw{
	padding-top: 15px;
	padding-bottom: 10px;
	text-align: center;
}
.section-top{
	width: 100%;
	height: 100%;
	overflow: hidden;
	position: relative;
	background-image: url(15.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	animation: slide 10s infinite;
}
.logo{
	color: #008000;
	font-size: 35px;
	font-family: Arial;
	padding-left: 20px;
	float: left;
	padding-top: 10px;
}
.click{
	margin: 0 10px;
}
.button1{
	position: absolute;
	height: 300px;
	width: 350px;
	top: 30%;
	left: 35%;
	transform: translate(-50%,-50%);
	font-size: 20px;
	background-color: #00FA9A;
	color: #006400;
	border-radius: 15px;
	
}
.button2{
	position: absolute;
	height: 300px;
	width: 350px;
	top: 30%;
	left: 67%;
	transform: translate(-50%,-50%);
	font-size: 20px;
	background-color: #00FA9A;
	color: #006400;
	border-radius: 15px; 
	
	}
    

.footer{
	height: 200px;
	height: 200px;
	width: 100%;
	background-color: #556B2F;
	border: 2px solid #556B2F;
	display: flex;
	justify-content: space-around;
	align-items: center;
}
.footerb{
	height: 180px;
	width: 350px;
	border: 2px solid #556B2F;
	float: left;
	text-align: center;
	
}
@yield('context')
</style>
</head>
<body>
	<div class="main">
		<h1>Fire Fitness</h1>
		<nav>
				<ul>
					<a href="/homes"><li><b>HOME</b></li></a>
					<a href="/abouts"><li><b>ABOUT</b></li></a>
					<a href="/itemss"><li><b>ITEMS</b></li></a>
					<a href="/cncts"><li><b>CONTACT</b></li></a>
				</ul>

		</nav>
        @yield('content')
		
		
	</div>

	<div class="footer">
		<div class="footerb">
			<b>Quick Link</b>
			<br><br>
			<a href="/homes">Home</a><br><br>
			<a href="/abouts">About</a><br><br>
			<a href="/itemss">Items</a><br><br>
			<a href="/cncts">Contact</a>
		</div>
		<div class="footerb">
			<b>Items</b>
			<br><br><br>
			<a href="/optionss">Freehand Exercises</a><br><br>
			<a href="/optionsss">Diets</a><br>
			
		</div>
		<div class="footerb">
			<b>Address</b>
			<br><br><br>
			LPU<br>
			Phagwara, Punjab<br>
			144402<br>
			Email:smukhopadhyay747@gmail.com<br>
			Mob:9874374281<br>
		</div>
		<div class="footerb">
			<b>Direction</b>
			<br><br><br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3410.7265648012444!2d75.70295481521757!3d31.25599198145789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5f5e9c489cf3%3A0x4049a5409d53c300!2sLovely%20Professional%20University!5e0!3m2!1sen!2sin!4v1637901258806!5m2!1sen!2sin" width=100% height="120" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
	
</body>
</html>
