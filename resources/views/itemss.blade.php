@extends('layoutss')
@section('webpage')
    About
@endsection

@section('content')
<div class="section-top">
	
<div class="click">
	
		<a href="/optionss">
		<button class="button1">FREEHAND EXERCISES</button> 
		</a>
		
		<a href="/optionsss">
		<button class="button2">DIETS</button> 
		</a>
		
		</div>
		
	</div>
@endsection


@section('context')
.main{
	width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url("images/itbg.jpg");
	background-position: absolute;
	background-size: cover;
	height: 100%;
   
}

@endsection
