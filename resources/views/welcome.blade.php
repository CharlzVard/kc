@extends('layouts.app')

@section('title','KC-Cinema | Нижегородская киностудия "Kender Crew Cinema". ул. Минина, д.18/3')

@section('content')

<div id="preloader"></div>
<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/mpage-header__bgnd.jpg') }}" id="mainParallax">
    <div class="container">
        <div class="parallax-menu">
            @include('components._menu')
        </div>
        <div class="parallax-content">
            <h3>Нижегородская киностудия</h3>
            <h1>Kender Crew Cinema</h1>
            <h3 class="mt-3 mb-5">Качественное производство видео и аудио продукции</h3>
            <p>Мы - команда профессионалов!</p>
            <p>Наша цель — создание безупречного продукта во всех отношениях.</p>
            <p>Мы делаем качественный аудио- и видеоматериал для рекламы товаров и услуг наших клиентов</p>
            </p>
        </div>
        <div class="parallax-bottom"><a href="#block2"><img src="{{ asset('img/thin-arrowheads-pointing-down.svg') }}"
                    alt="" height="60"></a></div>
    </div>
</div>

<div class="wrapper" id="block2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-3 col-xs-12 revealOnScroll" data-animation="fadeInLeft" data-offset="200">
                <img src="{{ asset('img/mpage-camera.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-9 col-xs-12 revealOnScroll" data-animation="fadeInLeft" data-offset="200">
                <h3 class="">ВИДЕО</h3>
                <p class="mb-2">Рекламные ролики</p>
                <p class="mb-2">Клипы</p>
                <p class="mb-2">Корпоративные фильмы</p>
                <p class="mb-2">Обучающие фильмы</p>
                <p class="mb-4">Вирусные ролики</p>
								<a href="{{ route('video') }}" class="btn btn-info mb-5">Подробнее »</a>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-3 col-xs-12 revealOnScroll" data-animation="fadeInRight" data-offset="200">
                <img src="{{ asset('img/mpage-microphone.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-9 col-xs-12 revealOnScroll" data-animation="fadeInRight" data-offset="200">
                <h3 class="">АУДИО</h3>
                <p class="mb-2">Аудиоролики</p>
                <p class="mb-2">Озвучка видеороликов</p>
                <p class="mb-2">IVR (Голосовые Приветствия)</p>
                <p class="mb-2">Сценарии для роликов</p>
                <p class="mb-4">Аудио презентации</p>
                <a href="{{ route('audio') }}" class="btn btn-info mb-5">Подробнее »</a>
            </div>
        </div>
    </div>
</div>


<div class="wrapper" id="showreal">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-3 col-xs-12 revealOnScroll" data-animation="fadeInLeft" data-offset="200">
                <img src="{{ asset('img/showreel-ico.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-9 col-xs-12 revealOnScroll" data-animation="fadeInRight" data-offset="200">
                <h3>Kender Crew</h3>
                <p>шоурил 2014-2017</p>
                <a href="https://www.youtube.com/watch?v=_VbsJOBjAiA" class="btn btn-info mt-3" target="_blank">Смотреть
                    на YouTube »</a>
            </div>
        </div>
    </div>
</div>

<div class="wrapper" id="projects">
    <div class="container">
        <h2>Проекты</h2>
        <div class="owl-carousel owl-theme projects">
            <div>
								<a href="https://www.youtube.com/watch?v=KyNGpOwakac" target="_blank"><img src="//img.youtube.com/vi/KyNGpOwakac/hqdefault.jpg" 
									alt="" class="w-100 img-fluid"></a>
                <h3>"Волонтёр"</h3>
                <p class="text-left">Этим летом мы снимали ролик для Поисково-Спасательного отряда "Волонтёр". 
									Была смоделирована вполне реальная ситуация и показаны реальные люди, которые приходят на помощь в трудную минуту. 
									Таких неравнодушных людей и можно называть супергероями, именно они несмотря на личные дела, 
									погоду и время суток приходят на помощь родственникам, отчаявшимся найти пропавшего близкого.
									Если после этого ролика хотя бы один человек вступит в Волонтёры и когда-нибудь сможет сказать: 
									"Найден, ЖИВ", мы будем уверены, что не зря выбрали свою профессию!</p>
            </div>
            <div>
                <a href="https://www.youtube.com/watch?v=XDTQWbV2uBk" target="_blank"><img src="//img.youtube.com/vi/XDTQWbV2uBk/hqdefault.jpg"
                        alt="" class="w-100 img-fluid"></a>
                <h3>"Почтовая дорога"</h3>
                <p class="text-left">Сотрудничество с "Почтой России" всегда преподносит сюрпризы, а задачи редко
                    укладываются в привычные рамки производства роликов. Данный проект стал своеобразным вызовом
                    нашему режиссеру монтажа, поскольку необходимо было органично соединить съёмки 10-ти разных
                    операторов из 10-ти регионов России! Но несмотря на различия в используемой технике и подходе к
                    съемке, а соответственно и весьма различному материалу, нам удалось создать цельный видеоряд,
                    со своей драматургией и "экшеном".</p>
            </div>
            <div>
                <a href="https://www.youtube.com/watch?v=OsrgTWfbMGc" target="_blank"><img src="//img.youtube.com/vi/OsrgTWfbMGc/hqdefault.jpg"
                        alt="" class="w-100 img-fluid"></a>
                <h3>85 лет Нижновэнерго</h3>
                <p class="text-left">Этот необычный проект, стал интересным опытом для нашей команды. Была
                    поставлена задача, не просто показать историю возникновения и становления энергосистемы, а
                    рассказать её на примере обычных людей, показав их ежедневный труд и те трудности, которые
                    приходится преодолевать энергетикам, что бы в домах обывателей был свет и тепло. Нестандартный
                    подход к корпоративному ролику был по достоинству оценен, данная работа вошла шорт-лист
                    регионального этапа премии "Серебряный лучник", получила премию на ежегодной Российской премии
                    "КонТэкст" и премию на всероссийском конкурсе "МедиаТэк-2017".</p>
            </div>
            <div>
                <a href="https://www.youtube.com/watch?v=UEffYq6yCUQ" target="_blank"><img src="//img.youtube.com/vi/UEffYq6yCUQ/hqdefault.jpg"
                        alt="" class="w-100 img-fluid"></a>
                <h3>Harat&#39;s pub</h3>
                <p class="text-left">"Вирусные ролики" - один из самых сложных видов современной видео рекламной
                    продукции. Успех не зависит от качества съёмки, участия медийных актеров и многих других
                    факторов применимых к привычному видео контенту. Задача вирусного ролика "попасть в свою
                    аудиторию", и сделать это ненавязчивым, легким для восприятия способом. Таким, что бы зритель
                    захотел поделиться этим роликом с другими потенциальными потребителями товара или услуги.</p>
            </div>
            <div>
                <a href="https://www.youtube.com/watch?v=tTxN5ONM-40" target="_blank"><img src="//img.youtube.com/vi/tTxN5ONM-40/hqdefault.jpg"
                        alt="" class="w-100 img-fluid"></a>
                <h3>Ролик к 10-летию МРСК Центра и Приволжья</h3>
                <p class="text-left">В настоящее время все большую популярность набирают ролики-отчеты о
                    результатах деятельности компаний. Подобные ролики интересны для просмотра, как самими
                    сотрудниками компании, так и потенциальными потребителями услуг. Они наглядно иллюстрируют тот
                    объём работы, который проделывают сотрудники компании для предоставления потребителям давно уже
                    ставшими привычных услуг. Интересными решениями в данном случае является использование
                    "инфо-графики" и коптерной съёмки, которые придают подобным отчетам наглядности и
                    информативности.</p>
            </div>
        </div>
    </div>
</div>

<div class="wrapper" id="contacts">
    <div class="container">
        <div class="revealOnScroll" data-animation="fadeInUp" data-offset="200">
            <h2>Контакты</h2>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <h4 class="text-center">Напишите нам, и мы ответим в ближайшее время!</h4>
                <form>
                    <div class="form-group">
                        <label for="user_name">Имя</label>
                        <input type="text" class="form-control" id="user_name" placeholder="Ваше имя" required>
                    </div>
                    <div class="form-group">
                        <label for="user_email">Email</label>
                        <input type="email" class="form-control" id="user_email" aria-describedby="emailHelp"
                            placeholder="Ваш e-mail" required>
                        <small id="emailHelp" class="form-text text-muted">Мы не передаём информацию третьим лицам</small>
                    </div>
                    <div class="form-group">
                        <label for="text_comment">Сообщение</label>
                        <textarea name="text" id="text_comment" class="form-control" rows="5" placeholder="Текст сообщения"
                            required></textarea>
                    </div>
                    <input name="md5" type="hidden" id="md5">
                    <div class="form-group">
                        <label for="text_comment">Антиспам</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><span id="aspm"></span></span>
                            </div>
                            <input type="text" id="cap" class="form-control" placeholder="Введите ответ" aria-label="captcha">
                        </div>
                    </div>
                    <div class="messages"></div>
                    <button type="button" id="btn_submit" class="btn btn-primary form-control">Отправить</button>
                </form>
            </div>
            <div class="col-md-6">
                <h4 class="text-right">Мы в соцсетях!</h4>
                <div class="d-social">
                    <a href="https://vk.com/club123012596" class="a-social" target="_blank"><img src="{{ asset('img/socials/vk-social-logotype.svg') }}"
                            alt="social-vk" class="svg"></a>
                    <a href="https://www.facebook.com/Mike-Presnyakov-493961601000059" class="a-social" target="_blank"><img
                            src="{{ asset('img/socials/facebook-logo.svg') }}" alt="social-fb" class="svg"></a>
                    <a href="https://www.youtube.com/channel/UCJbSut1FpGYeKAumIgur8eA/featured" class="a-social" target="_blank"><img
                            src="{{ asset('img/socials/youtube-logo.svg') }}" alt="social-yt" class="svg"></a>
                    <a href="https://www.instagram.com/kc_cinema_nn/" class="a-social" target="_blank"><img src="{{ asset('img/socials/instagram-social-network-logo-of-photo-camera.svg') }}"
                            alt="social-inst" class="svg"></a>
                </div>
                <h4 class="text-right mt-5">Как нас найти</h4>
                <p class="text-right">603005, г. Нижний Новгород, ул. Минина, дом 18/3</p>
                <h4 class="text-right mt-5">Часы работы</h4>
                <p class="text-right">09:00 - 20:00</p>
                <h4 class="text-right mt-5">Телефон для связи</h4>
                <p class="text-right"><a href="tel:+78007757387">8–800–775–73–87</a></p>
                <h4 class="text-right mt-5">Электронная почта</h4>
                <p class="text-right"><a href="mailto:kender82@list.ru">kender82@list.ru</a></p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="text-center m-0 copyright">©Vard, 2018</p>
        </div>
    </div>
</div>

@endsection
