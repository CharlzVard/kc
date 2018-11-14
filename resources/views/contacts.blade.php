@extends('layouts.app')

@section('title','Контакты | Нижегородская киностудия "Kender Crew Cinema". ул. Минина, д.18/3')

@section('content')
	<div class="container">
			<div class="menu">
					@include('components._menu')
			</div>
	</div>

	<div class="h1bg" id="contactsh1bg">
		<div class="container">
			<h1>Контакты</h1>
		</div>
	</div>

	<div class="container">
			<div class="row">
					<div class="col-12 col-md-6 mt-5">
							<p><b>Наш адрес:</b> 603005, г. Нижний Новгород, ул. Минина, д. 18/3</p>
							<p><b>Контактный телефон:</b> <a href="tel:+78007757387">+7(800)775-73-87</a></p>
							<p><b>Костюмер:</b> <a href="tel:+79101014425">+7(910)101-44-25</a></p>
							<p><b>Визажист / гримёр:</b> <a href="tel:+79527647014">+7(952)764-70-14</a></p>
							<p><b>Адрес электронной почты:</b> <a href="mailto:kender82@list.ru">kender82@list.ru</a></p>
					</div>
	
					<div class="col-12 col-md-6 mt-5">
							<p class="text-right">Мы в соцсетях</p>
							<div class="d-social">
								<a href="https://vk.com/club123012596" class="a-social" target="_blank"><img src="{{ asset('img/socials/vk-social-logotype.svg') }}" alt="social-vk" class="svg"></a>
								<a href="https://www.facebook.com/Mike-Presnyakov-493961601000059" class="a-social" target="_blank"><img src="{{ asset('img/socials/facebook-logo.svg') }}" alt="social-fb" class="svg"></a>
								<a href="https://www.youtube.com/channel/UCJbSut1FpGYeKAumIgur8eA/featured" class="a-social" target="_blank"><img src="{{ asset('img/socials/youtube-logo.svg') }}" alt="social-yt" class="svg"></a>
								<a href="https://www.instagram.com/kc_cinema_nn/" class="a-social" target="_blank"><img src="{{ asset('img/socials/instagram-social-network-logo-of-photo-camera.svg') }}" alt="social-inst" class="svg"></a>
							</div>
					</div>
				<div class="col-12">
					<div id="map" class="mt-5 mb-5"></div>
				</div>
			</div>
		</div>
	
@endsection