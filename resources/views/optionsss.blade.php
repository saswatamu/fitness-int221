@extends('layoutss')
@section('webpage')
    HOME
@endsection

@section('content')
<section class="items">
			<a href="https://en.wikipedia.org/wiki/Mediterranean_diet"><div class="item">
				<div class="image">
    <img class="image__img" src="images/d1.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Mediterranian Diet</div>
        <p class="image__description">
            The Mediterranean diet is based on foods that people in countries like Italy and Greece have traditionally eaten. It is rich in:vegetables, fruits,whole grains, fish, nuts, lentils, olive oil etc.
        </p>
    </div>

</div>


			</div></a>
			<a href="https://en.wikipedia.org/wiki/DASH_diet"><div class="item">
				<div class="image">
    <img class="image__img" src="/images/d2.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">DASH Diet</div>
        <p class="image__description">
             DASH is an eating plan designed to help treat or prevent high blood pressure, which is clinically known as hypertension. It emphasizes eating plenty of fruits, vegetables, whole grains, and lean meats. It is low in salt, red meat, added sugars, and fat.
        </p>
    </div>
</div>

			</div>
			<a href="https://www.healthline.com/nutrition/flexitarian-diet-guide"><div class="item">
				<div class="image">
    <img class="image__img" src="images/d3.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Flexitarian Diet</div>
        <p class="image__description">
            The Flexitarian Diet is a style of eating that encourages eating mostly plant-based foods while allowing meat and other animal products in moderation. It’s more flexible than fully vegetarian or vegan diets.
        </p>
    </div>
</div>

			</div>
			<a href="https://en.wikipedia.org/wiki/MIND_diet"><div class="item">
				<div class="image">
    <img class="image__img" src="images/d4.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">MIND Diet</div>
        <p class="image__description">
            The MIND diet is designed to prevent dementia and loss of brain function as you age. It combines the Mediterranean diet and the DASH diet to create a dietary pattern that focuses specifically on brain health.
        </p>
    </div>
</div>

			</div>
			<a href="https://en.wikipedia.org/wiki/Weight_Watchers_(diet)"><div class="item">
				<div class="image">
    <img class="image__img" src="images/d5.jpeg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Weight Watchers</div>
        <p class="image__description">
            The Weight Watchers diet aims to restrict energy to achieve a weight loss of 0.5 to 1.0 kg per week, which is the medically accepted standard rate of a viable weight loss strategy.
        </p>
    </div>
</div>

			</div>
			<a href="https://en.wikipedia.org/wiki/Intermittent_fasting"><div class="item">
				<div class="image">
    <img class="image__img" src="images/d6.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Intermittent Fasting</div>
        <p class="image__description">
            Intermittent fasting is any of various meal timing schedules that cycle between voluntary fasting and non-fasting over a given period.Methods of intermittent fasting include alternate-day fasting, periodic fasting, and daily time-restricted feeding.
        </p>
    </div>
</div>

			</div>
			<a href="https://www.healthline.com/nutrition/volumetrics-diet"><div class="item">
				<div class="image">
    <img class="image__img" src="images/d7.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Volumetric Diet</div>
        <p class="image__description">
            The Volumetrics Diet is an eating plan designed to promote weight loss by having you fill up on low calorie, nutrient-dense foods. It’s meant to reduce feelings of hunger by prioritizing foods with a high water content and low calorie density.
        </p>
    </div>
</div>

			</div>
			<a href="https://en.wikipedia.org/wiki/Mayo_Clinic_Diet"><div class="item">
				<div class="image">
    <img class="image__img" src="images/d8.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Mayo Clinic Diet</div>
        <p class="image__description">
            Unlike many short-term options, the Mayo Clinic Diet aims to be a sustainable plan that you can follow for life. Rather than banning certain foods, it focuses on replacing unhealthy behaviors with ones that are more likely to support weight loss.
        </p>
    </div>
</div>

			</div>
			<a href="https://en.wikipedia.org/wiki/Ketogenic_diet"><div class="item">
				<div class="image">
    <img class="image__img" src="images/d9.jpg" alt="Bricks">
    <div class="image__overlay">
        <div class="image__title">Low Carb Diet/Keto</div>
        <p class="image__description">
            Low carb diets restrict your carb intake in favor of protein and fat.They’re typically higher in protein than low fat diets, which is important, as protein can help curb your appetite, raise your metabolism, and conserves muscle mass.
        </p>
    </div>
</div>

			</div>
		</section>

        @endsection

@section('context')
    .main{
	width: 100%;
	height: 180%;
	background-position: center;
	background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url("images/op2bg.jpg");
	
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
