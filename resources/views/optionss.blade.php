@extends('layoutss')
@section('webpage')
    HOME
@endsection

@section('content')
<section class="items">
			<a href="https://en.wikipedia.org/wiki/Push-up"><div class="item">
				<div class="image">
    <img class="image__img" src="images/v1.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Push Ups</div>
        <p class="image__description">
            This exercise builds the upper body and strengthens your core, including the chest and spinal cord. Push ups are a great free hand exercise for the chest. It’s good for the triceps, back and shoulders.
        </p>
    </div>

</div>


			</div></a>
			<a href="https://en.wikipedia.org/wiki/Squat_(exercise)"><div class="item">
				<div class="image">
    <img class="image__img" src="/images/v2.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Squats</div>
        <p class="image__description">
            It makes your glutes strong and burns side and thigh fat.
        </p>
    </div>
</div>

			</div></a>
			<a href="https://en.wikipedia.org/wiki/Plank_(exercise)"><div class="item">
				<div class="image">
    <img class="image__img" src="images/v3.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Plank</div>
        <p class="image__description">
            It’s an abdominal and core exercise, also known as Hover exercise or Front Plank. Planks make your core strong and stable.
        </p>
    </div>
</div>

			</div></a>
			<a href="https://en.wikipedia.org/wiki/Crunch_(exercise)"><div class="item">
				<div class="image">
    <img class="image__img" src="images/v4.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Ab Crunches</div>
        <p class="image__description">
            It tones up your stomach and strengthens it.
        </p>
    </div>
</div>

			</div></a>
			<a href="https://en.wikipedia.org/wiki/Crunch_(exercise)"><div class="item">
				<div class="image">
    <img class="image__img" src="images/v5.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Side Crunches</div>
        <p class="image__description">
            It balances your entire body and strengthens and brings flexibility to your spine.
        </p>
    </div>
</div>

			</div></a>
			<a href="https://en.wikipedia.org/wiki/Burpee_(exercise)"><div class="item">
				<div class="image">
    <img class="image__img" src="images/v6.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Burpees</div>
        <p class="image__description">
            It is a full-body exercise that is used in strength training. It not only helps in muscle toning but also aids in weight loss.
        </p>
    </div>
</div>

			</div></a>
			<a href="https://en.wikipedia.org/wiki/Leg_raise"><div class="item">
				<div class="image">
    <img class="image__img" src="images/v7.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Leg Raises</div>
        <p class="image__description">
            This exercise helps build the core and calf muscles.
        </p>
    </div>
</div>

			</div></a>
			<a href="https://en.wikipedia.org/wiki/Skipping_rope"><div class="item">
				<div class="image">
    <img class="image__img" src="images/v8.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Skipping</div>
        <p class="image__description">
            It’s the easiest cardio exercise to get the heart rate up.
        </p>
    </div>
</div>

			</div></a>
			<a href="https://en.wikipedia.org/wiki/Bridge_(exercise)"><div class="item">
				<div class="image">
    <img class="image__img" src="images/v9.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Bridges</div>
        <p class="image__description">
            This helps strengthen the gluteal and abdominal muscles, which relieves excessive tension in your lower back.
        </p>
    </div>
</div>

			</div></a>
		</section>

        @endsection

@section('context')
    .main{
	width: 100%;
	height: 180%;
	background-position: center;
	background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url("images/op1bg.jpg");
	
	background-size: cover;
}
.items{
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	padding: 30px 30px;
	padding-left: 62px;
	
	grid-column-gap: 20px;
	grid-row-gap: 120px;
	backface-visibility: visible;
	
}
.item img{
	width: 90%;
	height: 270px;
	object-fit: cover;
	cursor: pointer;
	transition: 0.2s ease;
	border-radius: 10px;
}

.item img:hover{
	transform: scale(1.04);
}
.item h4{
	padding: 10px;
	text-align: center;
	color:#00FA9A;
}
.item button{
	//padding: 5px 10px;
        padding-top:20px;
	padding-right: 30px;
	border: none;
	outline: none;
	background-color: #008000;
	color: white;
	cursor: pointer;
	border-radius: 10px;
	font-size: 20px;
	display: block;
	margin: 0 auto;
	transition: 0.2s all;
}
.image {
    position: relative;
    width: 450px;
    height: 270px;
}
.image__img {
    display: block;
    width: 100%;
}

.image__overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 90%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    color: #ffffff;
    font-family: 'Quicksand', sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.25s;
}

.image__overlay--blur {
    backdrop-filter: blur(5px);
}

.image__overlay--primary {
    background: #009578;
}

.image__overlay > * {
    transform: translateY(20px);
    transition: transform 0.25s;
}

.image__overlay:hover {
    opacity: 1;
}

.image__overlay:hover > * {
    transform: translateY(0);
}

.image__title {
    font-size: 2em;
    font-weight: bold;
}

.image__description {
    font-size: 1.25em;
    margin-top: 0.25em;
}
@endsection
