@extends('layoutss')
@section('webpage')
    About
@endsection

@section('content')
<div class="main2">
<h1 class="ab">About</h1>

<p class="para">My name is Saswata Mukhopadhyay. I am studying B.Tech in Computer Science and Engineering from Lovely Proessional University, Phagwara, Punjab. I am building this website as a college project. The sole purpose of the project is to guide you to achieve your fitness goals. In this website you will get the best free hand exercise suggestions and procedures. You will also be able to choose the best diet plan for you.</p>


<div class="pic">
<img src="images/sas.jpg">
</div>
</div>
@endsection

@section('context')
.main{
	width: 100%;
	overflow: hidden;
	position: relative;
	//background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url("images/abbg.jpg");
	//background-position: absolute;
 	background-image: url("images/abbg.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	height: 120%;
}
.ab{
	text-align: center;
	font-size: 50px;
	color:#C0C0C0;

}
.para{
	font-size: 30px;
	padding-left:15px;
	padding-right: 15px;
	color:#808000; 
}
.pic{
	width: 215px;
	position: absolute;
	left: 50%;
	top:75%;
	margin: 0 10px;
	transform: translate(-50%,-50%);
	box-shadow: 0 0 20px 2px rgba(0, 0, 0, .1);
	overflow: hidden;
}
.pic img{
	width: 100%;
	display: block;
	border-radius: 15px;
	transition: transform 2s;

}
.pic:hover img{
	transform: scale(1.3);
	z-index: 1;
}
@endsection


