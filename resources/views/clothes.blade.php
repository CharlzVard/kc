@extends('layouts.app')

@section('title','Услуги | Нижегородская киностудия "Kender Crew Cinema". ул. Минина, д.18/3')

@section('content')
	<div class="container">
			<div class="menu">
					@include('components._menu')
			</div>
	</div>

	<div class="h1bg" id="clothesh1bg">
		<div class="container">
			<h1>Прокат костюмов</h1>
		</div>
	</div>

	<div class="container mt-3">
		<p>Наша кинокомпания проедоставляет целый спектр услуг: от аудио- и видеозаписи до аренды костюмов и реквизита. Подробнее об услугах Вы можете узнать связавшись с нами:</p>
		<p><b>Контактный телефон гримёра:</b> <a href="tel:+79625164598">+7(962)516-45-98</a> (Дарья)</p>
		<p><b>Контактный телефон:</b> <a href="tel:+78007757387">8-800-775-73-87</a></p>
		<p><b>Адрес электронной почты:</b> <a href="mailto:kender82@list.ru">kender82@list.ru</a></p>
	</div>

	
@endsection