@extends('layoutss')
@section('webpage')
    HOME
@endsection

@section('content')
<div class="box"> 
 			<h2>CONTACT</h2>
 			<P>Email: smukhopadhyay747@gmail.com</P><br>
 			<p>Mobile: 9874374281</p><br>
 			<a href=" https://www.linkedin.com/in/saswata-mukhopadhyay-779426192/"><p>LINKED IN</p></a><br>
 			<a href="https://www.facebook.com/saswata.mukhopadhyay.58"><p>FACEBOOK</p></a><br>
 			<a href="https://www.instagram.com/saswata_mu/?hl=en"><p>INSTAGRAM</p></a>
 		</div>
         @endsection

         @section('context')
.main{
	width: 100%;
	height: 100%;
	overflow: hidden;
	position: relative;
	background-image: url("images/cnbg.jpg");
	background-repeat: no-repeat;
	background-size: cover;
}
.box{
	position: relative;
	max-width: 650px;
	max-height: 500px;
	top:20%;
	left: 30%;
	background: rgba(225,225,225,.2);
	box-shadow: 0 5px 15px rgba(0,0,0,.5);
}
.box h2{
	margin: 0 0 20px;
	padding: 0;
	font-size: 48px;
	text-transform: uppercase;
	color: #044463;
	text-align: center;

}
.box p{
	margin: 0;
	padding: 0;
	font-size: 20px;
    text-align: center;
	

}
@endsection
