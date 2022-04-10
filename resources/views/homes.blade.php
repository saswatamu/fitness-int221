@extends('layoutss')
@section('webpage')
    HOME
@endsection

@section('content')
<div class="content">
			<h1>Achieve your Fitness Goals<br><span>Stay Healthy</span></h1>
			<p class="par">Fire Fitness will guide you to achieve your fitness goals. In this website you will get the best free hand exercise suggestions and procedures. You will also be able to choose the best diet plan for you.</p>
</div>

<div class="formm">
				<form action="php/connect.php" method="post">
				<h2>Login Here</h2>
				<input type="email" name="email" placeholder="Enter Email Here" id="email">
				<br>
				<input type="password" name="password" placeholder="Enter Password Here" id="password">
				<br>
				<a href="buttons.html"><input type="submit" value="Submit"></a>
				
				</form>
				
			</div>
            

@endsection

@section('context')
.main{
	width: 100%;
	background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url("images/hmbg.jpg");
	background-position: absolute;
	background-size: cover;
	height: 100%;
   
}
.formm{
	width: : 100px;
	height: 360px;
	background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%) ;
	position: absolute;
	top: 200px;
	left: 1100px;
	border-radius: 10px;
	padding: 25px;
}
.formm h2{
	width: 220px;
	font-family: sans-serif;
	text-align: center;
	color: #008000;
	font-size: 22px;
	background-color: 10px;
	margin: 2px;
	padding: 8px;
}
.formm input{
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
.formm input:focus{
	outline:none;
}
::placeholder{
	color:#fff;
	font-family: Arial;
	text-align: center;
}

input[type=submit]{
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
.formm .link{
	font-family: Arial;
	font-size: 17px;
	padding-top: 20px;
	text-align: center;
}
.formm .link a{
	text-decoration: none;
	color: #008000;
}
@endsection
