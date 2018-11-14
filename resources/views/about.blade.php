@extends('layouts.app')

@section('title','О киностудии | Нижегородская киностудия "Kender Crew Cinema". ул. Минина, д.18/3')

@section('content')
<div class="container">
    <div class="menu">
        @include('components._menu')
    </div>
</div>

<div class="h1bg" id="abouth1bg">
    <div class="container">
        <h1>О нас</h1>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <p><b>Наша цель</b> - создание безупречного продукта во всех отношениях. Мы делаем качественный видео- и
                аудиоматериал для рекламы товаров и услуг наших клиентов.</p>
            <p><b>Kender crew</b> - команда профессионалов имеющая опыт работы на телевидении и в кино. Именно
                сочетание разнообразного опыта дает нам возможность находить не стандартные решения для поставленных
                задач.</p>
            <p>Мы всегда готовы предложить своим клиентам различные варианты реализации задуманного и выработать
                оптимальное предложение! Именно сочетание этих качеств позволило войти нашему совместному проекту с
                "МРСК Центра и Приволжья" в шорт-лист премии "Серебряный лучник", а на конкурсе "Контэкст" среди
                компаний ТЭК получить приз в номинации "Имиджевые проекты".</p>

            <div class="row mb-3">
                <div class="col-12 col-md-6 col-lg-4 text-center mt-3">
                    <a href="./img/about/foto-01.jpg" data-fancybox="gallery_about" data-caption="Описание 1">
                        <img src="./img/about/foto-01_preview.jpg" alt="photo-01" class="img-fluid"></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center mt-3">
                    <a href="./img/about/foto-02.jpg" data-fancybox="gallery_about" data-caption="Описание 2">
                        <img src="./img/about/foto-02_preview.jpg" alt="photo-02" class="img-fluid"></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center mt-3">
                    <a href="./img/about/foto-03.jpg" data-fancybox="gallery_about" data-caption="Описание 3">
                        <img src="./img/about/foto-03_preview.jpg" alt="photo-03" class="img-fluid"></a>
                </div>

                <div class="col-12 col-md-6 col-lg-4 text-center mt-3">
                    <a href="./img/about/foto-10.jpg" data-fancybox="gallery_about" data-caption="Описание 4">
                        <img src="./img/about/foto-10_preview.jpg" alt="photo-10" class="img-fluid"></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center mt-3">
                    <a href="./img/about/foto-04.jpg" data-fancybox="gallery_about" data-caption="Описание 5">
                        <img src="./img/about/foto-04_preview.jpg" alt="photo-04" class="img-fluid"></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center mt-3">
                    <a href="./img/about/foto-06.jpg" data-fancybox="gallery_about" data-caption="Описание 6">
                        <img src="./img/about/foto-06_preview.jpg" alt="photo-06" class="img-fluid"></a>
                </div>


                <div class="col-12 col-md-6 col-lg-4 text-center mt-3">
                    <a href="./img/about/foto-07.jpg" data-fancybox="gallery_about" data-caption="Описание 7">
                        <img src="./img/about/foto-07_preview.jpg" alt="photo-07" class="img-fluid"></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center mt-3">
                    <a href="./img/about/foto-08.jpg" data-fancybox="gallery_about" data-caption="Описание 8">
                        <img src="./img/about/foto-08_preview.jpg" alt="photo-08" class="img-fluid"></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center mt-3">
                    <a href="./img/about/foto-09.jpg" data-fancybox="gallery_about" data-caption="Описание 9">
                        <img src="./img/about/foto-09_preview.jpg" alt="photo-09" class="img-fluid"></a>
                </div>

                <div class="col-12 col-md-6 col-lg-4 text-center mt-3 offset-lg-4 offset-md-3">
                    <a href="./img/about/foto-05.jpg" data-fancybox="gallery_about" data-caption="Описание 0">
                        <img src="./img/about/foto-05_preview.jpg" alt="photo-05" class="img-fluid"></a>
                </div>

            </div>

            <p>Ответственность и мобильность позволяют нашей команде работать не только на территории Российской
                Федерации, но и за границей. Ярким примером такой работы, в не простых съёмочных условиях, стала работа
                на крупнейшей Российской регате проводимой за границей United Sailing Week 2017, которая проходила в
                Хорватии.</p>
            <p>С открытием подразделений по обработке звука и работе с графикой, наша команда вышла на новый уровень и
                готова предложить свои услуги, как Production company полного цикла!</p>


            <h2>Наши награды</h2>
            <div class="row">
                <div class="col-12 col-md-6 text-center mb-3">
                    <a href="./img/diplom_1.png" data-fancybox="about_diploms">
                        <img src="./img/diplom_1_preview.png" alt="Diplom 1" class="img-fluid"></a>
                </div>
                <div class="col-12 col-md-6 text-center mb-3">
                    <a href="./img/diplom_2.png" data-fancybox="about_diploms">
                        <img src="./img/diplom_2_preview.png" alt="Diplom 2" class="img-fluid"></a>
                </div>
            </div>

            <h2>Наши клиенты</h2>
            <div class="owl-carousel owl-theme partners">
                <div><img src="./img/partners/logo_agc.png" alt="logo_agc"></div>
                <div><img src="./img/partners/logo_club_55.png" alt="club_55"></div>
                <div><img src="./img/partners/logo_dosaaf.png" alt="logo_dosaaf"></div>
                <div><img src="./img/partners/logo_fsk.png" alt="logo_fsk"></div>
                <div><img src="./img/partners/logo_megafon.png" alt="logo_megafon"></div>
                <div><img src="./img/partners/logo_mrsk.png" alt="logo_mrsk"></div>
                <div><img src="./img/partners/logo_ms_grup.png" alt="logo_ms_grup"></div>
                <div><img src="./img/partners/logo_partizan.png" alt="logo_partizan"></div>
                <div><img src="./img/partners/logo_pochta_rossii.png" alt="logo_pochta_rossii"></div>
                <div><img src="./img/partners/logo_sonet.png" alt="logo_sonet"></div>
                <div><img src="./img/partners/logo_usw.png" alt="logo_usw"></div>
								<div><img src="./img/partners/logo_varvar.png" alt="logo_varvar"></div>
								<div><img src="./img/partners/logo_nbd.png" alt="logo_nbd"></div>
								<div><img src="./img/partners/logo_volonter.png" alt="logo_volonter"></div>
								
            </div>
        </div>
        <div class="col-12">
            <p class="text-center m-0 copyright">©Vard, 2018</p>
        </div>
    </div>
</div>

@endsection
