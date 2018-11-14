@if(Request::is('/'))
	<a href="{{ url('/') }}"><img src="{{ asset('img/logo_transparent.png') }}" alt="logo" height="126" width="129" title="Kender Crew Cinema"></a>
@else
	<a href="{{ url('/') }}"><img src="{{ asset('img/logo_blue.png') }}" alt="logo" height="126" width="129" title="Kender Crew Cinema"></a>
@endif
<nav class="nav">
	<div id="menutoggle">
			<input type="checkbox" id="togglebutton">
			<label for="togglebutton" id="togglelabel">Меню</label>
			<ul>
					<li><a href="{{ url('/') }}"{{{ Request::is('/') ? ' class=active' : '' }}}>Главная</a></li>
					<li><a href="{{ route('about') }}"{{{ Request::is('about') ? ' class=active' : '' }}}>О нас</a></li>
					<li><a href="{{ route('services') }}"{{{ Request::is('services*') ? ' class=active' : '' }}}>Услуги</a>
							<ul>
									<li><a href="{{ route('audio') }}"{{{ Request::is('services/audio') ? ' class=active' : '' }}}>Аудио</a></li>
									<li><a href="{{ route('video') }}"{{{ Request::is('services/video') ? ' class=active' : '' }}}>Видео</a></li>
									<li><a href="{{ route('clothes') }}"{{{ Request::is('services/clothes') ? ' class=active' : '' }}}>Прокат костюмов</a></li>
									<li><a href="{{ route('visage') }}"{{{ Request::is('services/visage') ? ' class=active' : '' }}}>Визаж</a></li>
									<li><a href="{{ route('makeup') }}"{{{ Request::is('services/makeup') ? ' class=active' : '' }}}>Грим</a></li>
									
							</ul>
					</li>
					<li><a href="{{ route('projects') }}"{{{ Request::is('projects') ? ' class=active' : '' }}}>Проекты</a></li>
					<li><a href="{{ route('contacts') }}"{{{ Request::is('contacts') ? ' class=active' : '' }}}>Контакты</a></li>
			</ul>
	</div>
</nav>