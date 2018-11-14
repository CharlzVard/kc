@extends('layouts.app')

@section('title','Проекты | Нижегородская киностудия "Kender Crew Cinema". ул. Минина, д.18/3')

@section('content')
	<div class="container">
			<div class="menu">
					@include('components._menu')
			</div>
	</div>

	
	<div class="h1bg" id="projectsh1bg">
		<div class="container">
			<h1>Проекты</h1>
		</div>
	</div>

	

	<div class="container mt-3">
		<p>Тут должна быть галерея наших работ, но Михаил до сих пор не предоставил мне контента для заполнения сайта =(</p>
		<p>Поэтому поверьте на слово, киностудия хорошая, и костюмы интересные.</p>
	</div>



	

<div class="wrapper" id="filmingmap">
	<div class="container">
			<div class="revealOnScroll" data-animation="fadeInUp" data-offset="200">
					<h2>Места съёмок</h2>
			</div>
			<div class="revealOnScroll" data-animation="flipInY" data-offset="200">
					<div id="map"></div>
			</div>
	</div>
</div>

	
@endsection