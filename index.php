<!DOCTYPE html>
<!-- saved from url=(0044)http://demo.epic-webdesign.com/tf-square/v1/ -->
<html lang="zxx" style="">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="keywords" content="">

        <meta name="description" content="">



        <title>Оригинальный подарок для Вашего ребенка.</title>



        <!-- Loading Bootstrap -->

        <link href="./Square - SaaS Landing Page Template_files/bootstrap.min.css" rel="stylesheet">



        <!-- Loading Template CSS -->

        <link href="./Square - SaaS Landing Page Template_files/style.css" rel="stylesheet">

        <link href="./Square - SaaS Landing Page Template_files/animate.css" rel="stylesheet">

        <link rel="stylesheet" href="./Square - SaaS Landing Page Template_files/pe-icon-7-stroke.css">

        <link href="./Square - SaaS Landing Page Template_files/style-magnific-popup.css" rel="stylesheet">



        <!-- Awsome Fonts -->
        <!-- Awsome Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Fonts -->

        <link href="./Square - SaaS Landing Page Template_files/css" rel="stylesheet">

        <link href="./Square - SaaS Landing Page Template_files/css(1)" rel="stylesheet">



        <!-- Font Favicon -->

        <link rel="shortcut icon" href="http://demo.epic-webdesign.com/tf-square/v1/images/favicon.ico">

        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    </head>



<body>

    <?php
    require_once 'connection.php';
    $link = mysqli_connect($host, $user, $password, $database)  or die("Ошибкaа " . mysqli_error($link));
    $all_series_query = "SELECT * from Price";
    $all_series =  mysqli_query($link, $all_series_query) or die("Ошибка выборки цены" . mysqli_error($link));
    $series = array();
    $data = mysqli_fetch_all($all_series, MYSQLI_ASSOC);
    $counter = 0;
    foreach ($data as  $dataRow) {
        if (!empty($dataRow['price'])) {
            $seria = true;
        } else {
            $seria = false;
        }
        $seria_item['price'] = $dataRow['price'];
        $seria_item['isSetPrice'] = $seria;
        //var_dump($seriaObj);
        //$series[]= $seriaObj;
        //var_dump($series);
        array_push($series, $seria_item);
    }


    ?>

    <!--begin header -->

    <header class="header" id="to_top">

        <div class="photo_format_alert_wrap" style="display:none; left: -400px;">
            <div class="photo_format_alert_close">
                <svg id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <style type="text/css">
                        .st0 {
                            fill: black;
                        }

                        .st1 {
                            fill: #FFFFFF;
                        }
                    </style>
                    <circle class="st0" cx="64" cy="64" r="64" />
                    <path class="st1" d="M100.3,90.4L73.9,64l26.3-26.4c0.4-0.4,0.4-1,0-1.4l-8.5-8.5c-0.4-0.4-1-0.4-1.4,0L64,54.1L37.7,27.8  c-0.4-0.4-1-0.4-1.4,0l-8.5,8.5c-0.4,0.4-0.4,1,0,1.4L54,64L27.7,90.3c-0.4,0.4-0.4,1,0,1.4l8.5,8.5c0.4,0.4,1.1,0.4,1.4,0L64,73.9  l26.3,26.3c0.4,0.4,1.1,0.4,1.5,0.1l8.5-8.5C100.7,91.4,100.7,90.8,100.3,90.4z" />
                </svg>
            </div>
            <div class="photo_format_alert_body">
                <span><b>Внимание!!!</b></br>
                    Для наилучшего результата загружайте фотографии хорошего качества,
                    строго в соответствии с образцом и указанными требованиями к фото</span>
            </div>
        </div>

        <!--begin navbar-fixed-top -->

        <nav class="navbar navbar-default navbar-fixed-top">



            <!--begin container -->

            <div class="container">



                <!--begin navbar -->

                <nav class="navbar navbar-expand-lg">



                    <!--begin logo -->

                    <a class="navbar-brand" href="#"><img src="./img/mult-logo.png" alt="logo"></a>

                    <!--end logo -->



                    <!--begin navbar-toggler -->

                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>

                    </button>

                    <!--end navbar-toggler -->



                    <!--begin navbar-collapse -->

                    <div class="navbar-collapse collapse" id="navbarCollapse">



                        <!--begin navbar-nav -->

                        <ul class="navbar-nav ml-auto">



                            <li class="current"><a href="#about">Серии</a></li>
                            <li class=""><a class="reviews" href="#reviews">Отзывы</a></li>
                            <li class=""><a href="#footer">Контакты</a></li>



                        </ul>

                        <!--end navbar-nav -->



                    </div>

                    <!--end navbar-collapse -->



                </nav>

                <!--end navbar -->



            </div>

            <!--end container -->



        </nav>

        <!--end navbar-fixed-top -->



    </header>

    <!--end header -->



    <!--begin home section -->

    <section class="home-section" id="home">



        <!--begin container -->

        <div class="container">



            <!--begin row -->

            <div class="row">



                <!--begin col-md-5-->

                <div class="col-md-5 padding-top-20">



                    <h1>Оригинальный подарок для Вашего ребенка.</h1>



                    <p>Хотите сделать действительно уникальный подарок своему ребенку? Тогда попробуйте мультфильм с Вашим ребенком в главной роли. Да, да. Ваш ребенок действительно окажется в самом настоящем мультфильме, где его ждут невероятные приключения, смех и веселье. Что может быть лучше, чем получить конфету от смешного клоуна, покататься на различных аттракционах и полетать на воздушном шаре. Такой подарок обязательно понравится ребенку. Его нельзя сломать или потерять. Его можно смотреть столько сколько хочется. Этот подарок останется с Вами навсегда.</p>

                    <span class="bunner__price">
                        Стоимость: <div> 500 руб. </div>
                        <!-- <div> 99 руб. </div> -->
                    </span>

                    <!--begin register-form-wrapper-->

                    <div class="register-form-wrapper wow bounceIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">



                        <a id="scroll-btn" class="btn-buy">Заказать мультфильм</a>



                    </div>

                    <!--end register-form-wrapper-->



                </div>

                <!--end col-md-5-->



                <!--begin col-md-7-->

                <div class="col-md-7 margin-top-20">



                    <!--begin video-popup-wrapper-->

                    <div class="video-popup-wrapper margin-left-20">



                        <!--begin popup-gallery-->

                        <div class="popup-gallery">



                            <img src="./img/logo_youtube.png" class="width-100 hero-images" alt="pic">



                            <a class="popup4 video-play-icon" href="https://www.youtube.com/watch?v=PSYsYsrwjw0">

                                <i class="fas fa-play"></i>

                            </a>



                        </div>

                        <!--end popup-gallery-->



                    </div>

                    <!--end video-popup-wrapper-->





                </div>

                <!--end col-md-7-->



            </div>

            <!--end row -->



        </div>

        <!--end container -->



    </section>

    <!--end home section -->



    <!--begin section-white -->

    <section class="section-white section-top-border" id="about">



        <!--begin container -->

        <div class="container">



            <!--begin row -->

            <div class="row">



                <!--begin col-md-12 -->

                <div class="col-md-12 text-center">



                    <h2 id="ancToSeries" class="section-title">Выберите серию.</h2>



                    <p class="section-subtitle">И мы изготовим для Вас 3D мультфильм и отправим ссылку на его скачивание.</p>


                </div>

                <!--end col-md-12 -->



            </div>

            <!--end row -->



        </div>

        <!--end container -->



        <!--begin services-wrapper -->

        <div class="services-wrapper">



            <!--begin container -->

            <div class="container">



                <!--begin row -->

                <div class="row">

                    <!--begin col-md-3 -->

                    <div class="col-md-3">



                        <div class="main-services">



                            <div class="popup-gallery">

                                <img src="./img/mult-2.png" class="width-100 hero-images" alt="pic">
                                <?php

if ($series[0]['isSetPrice'] === true) :
?>
    <a class="popup4 video-play-icon" href="https://youtube.com/watch?v=aELqP4RIQpA">

<i class="fas fa-play"></i>

</a>
<?php endif; ?>
                                

                            </div>



                            <h3>"День рождения в парке атракционов"</h3>



                            <p>
                                В этом мультике ребенок услышит свое имя и увидит пригласительный билет с именем в парк аттракционов, а затем окажется в парке в компании двух веселых клоунов. Его ждет катание на аттракционах, погоня за сбежавшей обезьянкой, торт со свечами в соответствии с возрастом ребенка и подарок от клоунов, а также полет на воздушном шаре. Мультфильм предназначен для детей в возрасте от 3 до 10 лет.
                            </p>

                            <?php if ($series[0]['isSetPrice'] === true) : ?>
                                <button data-price="<?php echo $series[0]['price'] ?>" data-seria="1" class="btn-buy btn-buy_seria">Купить за <?php echo $series[0]['price']; ?>₽</button>
                            <?php else :
                            ?>
                                <button data-seria="1" class="btn-buy btn-soon ">СКОРО!</button>
                            <?php endif; ?>

                        </div>



                    </div>

                    <!--end col-md-3 -->

                    <!--begin col-md-3 -->

                    <div class="col-md-3">



                        <div class="main-services">

                            <div class="popup-gallery">

                                <img src="./img/mult-bg.png" class="width-100 hero-images" alt="pic">

                               
                                <?php if ($series[1]['isSetPrice'] === true) : ?>
                                    <a class="popup4 video-play-icon " href="https://youtube.com/watch?v=7eKeDLAOCag">

                                    <i class="fas fa-play"></i>

                                </a>
                                <?php endif; ?>

                            </div>


                            <h3>“Приключения в парке аттракционов”</h3>



                            <p>В этом мультике ребенок услышит свое имя и увидит пригласительный билет с именем в парк аттракционов, а затем окажется в парке в компании двух веселых клоунов. Его ждет катание на аттракционах, погоня за сбежавшей обезьянкой, а также полет на воздушном шаре. Мультфильм предназначен для детей в возрасте от 3 до 10 лет. <strong>В этом мультфильме отсутствует сцена с тортом и подарком!</strong>

                            </p>

                            <?php if ($series[1]['isSetPrice'] === true) : ?>
                                <button data-price="<?php echo $series[1]['price'] ?>" data-seria="2" class="btn-buy btn-buy_seria">Купить за <?php echo $series[1]['price']; ?>₽</button>
                            <?php else :
                            ?>
                                <button data-seria="2" class="btn-buy btn-soon ">СКОРО!</button>
                            <?php endif; ?>

                        </div>



                    </div>

                    <!--end col-md-3 -->





                    <!--begin col-md-3 -->

                    <!-- <div class="col-md-3">



                        <div class="main-services">



                            <div class="popup-gallery">

                                <img src="./img/mult-bg.png" class="width-100 hero-images" alt="pic">

                                <a class="popup4 video-play-icon d-n" href="https://www.youtube.com/watch?v=PSYsYsrwjw0">

                                    <i class="fas fa-play"></i>

                                </a>

                            </div>



                            <h3>Серия 3</h3>



                            <p>
                            </p>

                            <button data-seria="" class="btn-buy btn-buy_seria" disabled>Скоро</button>

                        </div>



                    </div> -->


                    <!--end col-md-4 -->
                     <div class="col-md-3">



                        <div class="main-services">

                            <div class="popup-gallery">

                                <img src="./img/circus.png" class="width-100 hero-images" alt="pic">
                                <?php if ($series[2] === true) : ?>
                                    <a class="popup4 video-play-icon " href="https://www.youtube.com/watch?v=Hcs548Zagt0">

                                        <i class="fas fa-play"></i>

                                    </a>
                                <?php endif; ?>
                            </div>


                            <h3>“Цирк”</h3>



                            <p>В этом мультике мы снова встретимся с веселыми клоунами Клепой и Тепой. А наш главный герой, то есть Ваш ребенок, будет самым настоящим фокусником с волшебной палочкой</strong>

                            </p>

                            <?php if ($series[2]['isSetPrice'] === true) : ?>
                                <button data-price="<?php echo $series[2]['price'] ?>" data-seria="3" class="btn-buy btn-buy_seria">Купить за <?php echo $series[2]['price']; ?>₽</button>
                            <?php else :
                            ?>
                                <button disabled data-seria="3" class="btn-buy btn-soon ">СКОРО!</button>
                            <?php endif; ?>

                        </div>



                    </div>
                    <!--begin col-md-4 -->

                    <div class="col-md-3">



                        <div class="main-services">

                            <div class="popup-gallery">

                                <img src="./img/newYear.png" class="width-100 hero-images" alt="pic">
                                <?php if ($series[3]['isSetPrice'] === true) : ?>
                                    <a class="popup4 video-play-icon " href="https://www.youtube.com/watch?v=Hcs548Zagt0">

                                        <i class="fas fa-play"></i>

                                    </a>
                                <?php endif; ?>

                            </div>


                            <h3>“Новый год”</h3>



                            <p>Чудесный праздник – Новый год. Это время когда совершаются чудеса и сбываются самые заветные мечты. В этом мультике Вашему малышу предстоит спасти Новый год, победить помощников бабы яги и помочь Деду Морозу вернуть подарки, которые она утащила.</strong>

                            </p>
                            <?php if ($series[3]['isSetPrice'] === true) : ?>
                                <button data-price="<?php echo $series[3]['price'] ?>" data-seria="4" class="btn-buy btn-buy_seria">Купить за <?php echo $series[3]['price']; ?>₽</button>
                            <?php else :
                            ?>
                                <button disabled data-seria="4" class="btn-buy btn-soon">СКОРО!</button>
                            <?php endif; ?>
                        </div>



                    </div>

                    <!--end col-md-3 -->



                </div>

                <!--end row -->



            </div>

            <!--end container -->



        </div>

        <!--end services-wrapper -->



    </section>

    <!--end section-white -->



    <!--begin form-section-->

    <section class="form-section">


        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 contend-md" id="zakaz">

                    <form action="submit_file.php" method="post" enctype="multipart/form-data" class="form">
                        <h4>Загрузите фото ребенка и выберите пол:</h4>
                        <div class="choose-block first_step">
                            <div class="image">
                                <div class="img-container">
                                    <span>
                                        <img src="./img/primer.jpg" alt="img">
                                    </span>
                                </div>
                                <div class="clear drop_zone">
                                    <div class="fl_upld" id="upld">
                                        <label id="drop" class="clear"><input id="fl_inp" type="file" required="" name="file">
                                            <t>Выберите файл</t>
                                        </label>
                                        <div id="fl_nm">-Фронтальная фотография</br>
                                            -Лицо должно быть хорошо освещено, без теней</br>
                                            -Выражение лица должно быть нейтральным</br>
                                            -Без очков</br>
                                            -Без прядей волос на лице (с открытым лбом и лицом)</div>

                                    </div>
                                </div>
                            </div>
                            <div class="chose_male">
                                <ul class="coose">
                                    <li> <input type="radio" id="man" value="1" checked="checked" name="male"> <label for="man"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/h2.png" alt=""><span>Мальчик</span> </li>
                                    <li> <input type="radio" id="girl" value="0" name="male"> <label for="girl"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/h4-2.png" alt=""> <span>Девочка</span></li>
                                </ul>
                            </div>
                        </div>
                        <h4>Выберите цвет волос:</h4>
                        <div class="type_color">
                            <!--<div class="type"> 
                            <div class="type_hair choose-block man"> 
                                <ul class="coose">
                                    <li> 
                                        <input  type="radio" id="type_hair_1" value="1" name="type_hair"> 
                                        <label  for="type_hair_1"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/h1.png" alt="">
                                    </li>
                                    <li><input  type="radio" id="type_hair_2" value="2" name="type_hair"> 
                                        <label   for="type_hair_2"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/h2.png" alt=""> 
                                    </li>
                                </ul>
                            </div>
                            <div class="type_hair choose-block girl"> 
                                <ul class="coose">
                                    <li> 
                                        <input  type="radio" id="type_hair_3" value="3"  name="type_hair"> 
                                        <label  for="type_hair_3"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/h3-1.png" alt="">
                                    </li>
                                    <li><input type="radio" id="type_hair_4" value="4" name="type_hair"> 
                                        <label  for="type_hair_4"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/h4-2.png" alt=""> 
                                    </li>
                                </ul>
                            </div>
                            </div>-->
                            <div class="color">
                                <div class="color_hair choose-block">
                                    <ul class="coose">
                                        <li>
                                            <input required="required" type="radio" id="color_hair_0" value="0" name="color_hair">
                                            <label for="color_hair_0"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/0.png" alt="">
                                        </li>
                                        <li>
                                            <input type="radio" id="color_hair_1" value="1" name="color_hair">
                                            <label for="color_hair_1"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/1.png" alt="">
                                        </li>
                                        <li>
                                            <input type="radio" id="color_hair_2" value="2" name="color_hair">
                                            <label for="color_hair_2"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/2.png" alt="">
                                        </li>
                                        <li>
                                            <input type="radio" id="color_hair_3" value="3" name="color_hair">
                                            <label for="color_hair_3"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/3.png" alt="">
                                        </li>
                                        <li>
                                            <input type="radio" id="color_hair_4" value="4" name="color_hair">
                                            <label for="color_hair_4"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/4.png" alt="">
                                        </li>
                                        <li>
                                            <input type="radio" id="color_hair_5" value="5" name="color_hair">
                                            <label for="color_hair_5"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/5.png" alt="">
                                        </li>
                                        <li>
                                            <input type="radio" id="color_hair_6" value="6" name="color_hair">
                                            <label for="color_hair_6"></label> <img data-lazyload="" class=" ls-is-cached lazyloaded" src="./img/6.png" alt="">
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="user-contacts">
                            <input type="hidden" name="seria" class="seria-input" required value="">
                            <input type="hidden" name="seria_cost" class="seria-input-cost" required value="">
                            <div class="wrapper-fiels">
                                <label for="fio">

                                    <div>
                                        <span id="name-child">Имя ребенка:</span>
                                        <i class="fa fa-question-circle-o" title="Имя ребенка может быть длиной не более 15 символов. По желанию также стоит указать ударение в имени в формате: Ари+ела - ударение на е. т.е. перед ударной гласной ставим '+'"></i>
                                    </div>

                                    <input type="text" required="required" id="fio" maxlength="15" placeholder="Ваше имя (макс 15 символов)" name="name">
                                </label>
                            </div>
                            <div class="wrapper-fiels">
                                <label for="phone">
                                    <div>Ваш телефон:</div>
                                    <input type="tel" required="required" id="phone" placeholder="Ваш телефон" name="phone" data-mask="+7 (000) 000 00 00" placeholder="+7 (___) ___ __ __">
                                </label>
                            </div>
                            <div class="wrapper-fiels">
                                <label for="email">
                                    <div>Ваш email:</div>
                                    <input type="text" required="required" id="email" placeholder="Ваш email" name="email">
                                </label>
                            </div>
                            <div class="wrapper-fiels">
                                <label for="BirthData">
                                    <div>Дата рождения ребенка(ДД-ММ-ГГГГ):</div>
                                    <input type="text" required="required" id="BirthData" placeholder="Дата рождения ребенка" name="BirthData" data-mask="00-00-0000" placeholder="__-__-____">
                                </label>
                            </div>
                            <div class="wrapper-fiels">
                                <label for="age">
                                    <div>Сколько лет исполняется:</div>
                                    <input type="text" required="required" id="age" placeholder="Сколько лет исполняется" name="age">
                                </label>
                            </div>
                            <div class="wrapper-fiels">
                                <label for="coupon">
                                    <div>Промокод:</div>
                                    <input type="text" id="coupon" placeholder="Введите промокод если есть" name="coupon">
                                </label>
                            </div>


                        </div>
                        <label class="switch">
                            <input type="checkbox" name="sogl" class="sogl">
                            <span class="slider_sog round"></span>
                            <span>Нажимая кнопку отправить вы соглашаетесь с <a target="_blank" href="/offer.html">офертой</a> и даете согласие на <a target="_blank" href="sogl.html">обработку персональных данных</a></span>

                        </label>
                        <div class="errors_messages"></div>
                        <button class="btn-buy btn-buy-finish" disabled="disabled" type="submit">Оплатить</button>


                    </form>




                </div>


            </div>


        </div>




    </section>

    <!-- begin reviews section -->
    <section id="reviews" class="reviews section-top-border">



        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 contend-md">

                    <h2 class="section-title">Отзывы</h2>

                    <div class="slider">

                        <a class="slider__popup" href="./img/reviews/1.jpg">
                            <div class="slider__item">
                                <img src="./img/reviews/1.jpg" alt="r-1">
                            </div>
                        </a>

                        <a class="slider__popup" href="./img/reviews/2.jpg">
                            <div class="slider__item">
                                <img src="./img/reviews/2.jpg" alt="r-2">
                            </div>
                        </a>

                        <a class="slider__popup" href="./img/reviews/3.jpg">
                            <div class="slider__item">
                                <img src="./img/reviews/3.jpg" alt="r-3">
                            </div>
                        </a>

                        <a class="slider__popup" href="./img/reviews/4.jpg">
                            <div class="slider__item">
                                <img src="./img/reviews/4.jpg" alt="r-4">
                            </div>
                        </a>

                        <a class="slider__popup" href="./img/reviews/5.jpg">
                            <div class="slider__item">
                                <img src="./img/reviews/5.jpg" alt="r-5">
                            </div>
                        </a>

                        <a class="slider__popup" href="./img/reviews/6.jpg">
                            <div class="slider__item">
                                <img src="./img/reviews/6.jpg" alt="r-6">
                            </div>
                        </a>

                        <a class="slider__popup" href="./img/reviews/7.jpg">
                            <div class="slider__item">
                                <img src="./img/reviews/7.jpg" alt="r-7">
                            </div>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- end reviews section -->
        <!-- begin quest-answer section -->
        <section id="qusetion-answer" class="">
        <h2 class="section-title">Вопрос-ответ</h2>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link header_collapse" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Как долго изготавливается мультфильм?
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        В зависимости от загруженности процесса от 30 минут до одного дня.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed header_collapse" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Могу ли я загрузить любую фотографию?
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Для того, чтобы Вы получили наилучший результат мы разместили образец фото и основные требования к фотографии. Обратите внимание, что если вы загружаете фотографии с широкой улыбкой и видимыми зубами — то в мультфильме ребенок будет все время с этой улыбкой и зубами. Это смотрится не естественно. Кроме того когда ребенок улыбается по сюжету мультфильма, эта улыбка наложится на имеющуюся, что испортит общее впечатление. Если вы загружаете фотографии со взглядом направленным в сторону или вверх, то и в мультфильме глаза будут постоянно направлены в этом же направлении.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed header_collapse" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Как можно получить мультфильм?
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Ссылку на скачивание мультфильма мы отправим Вам на указанную Вами электронную почту.Будьте внимательны при заполнении этого поля. Ссылка на скачивание действительна в течении 7 (семи) дней.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed header_collapse" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Как сохранить файл на устройство?
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        Используйте для сохранения файла на Ваше устройство браузер с функцией скачивания медиафайлов.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed header_collapse" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Что делать если что-то пошло не так?
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        По любому возникшему вопросу на который Вы не нашли ответ на сайте пишите нам на электронную почту vmultike@mail.ru
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end quest-answer section -->

    <div class="footer section-top-border" id="footer">



        <!--begin container -->

        <div class="container-fluid px-0">

            <!--begin row -->

            <div class="row">



                <!--begin col-md-12 -->

                <div class="col-md-12 text-center">



                    <h2 class="section-title">О нас</h2>



                </div>

                <!--end col-md-12 -->



            </div>

            <!--end row -->

            <!--begin row -->

            <div class="row no-gutters mx-0 d-flex">



                <!--begin col-md-6 -->

                <div class="col-md-6 footer-white-box text-center">



                    <h5>ИП Шевень Василий Петрович</h5>



                    <p>ОГРНИП 311504408100027</p>



                    <p>ИНН 771503168686</a></p>



                </div>

                <!--end col-md-6 -->



                <!--begin col-md-6 -->

                <div class="col-md-6 footer-white-box text-center">





                    <h5>Контакты</h5>


                    <p>E-mail: vmultike@mail.ru</p>

                    <p>Телефон: 89653276806</p>





                </div>

                <!--end col-md-6 -->





            </div>

            <!--end row -->



            <!--begin row -->

            <div class="row">



                <!--begin col-md-12 -->

                <div class="col-md-12 footer-bottom text-center section-top-border">



                    <p>Copyright © 2020 <strong>Все права защищены</strong>.</p>



                </div>

                <!--end col-md-6 -->



            </div>

            <!--end row -->



        </div>

        <!--end container -->



    </div>

    <!--end footer -->

    <a href="#to_top" class="to_top">
        <span>▲</span>
        <img src="./img/sharik5.png">
    </a>

    <!-- Yandex.Metrika counter -->

    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };

            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })

        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");



        ym(65708323, "init", {

            clickmap: true,

            trackLinks: true,

            accurateTrackBounce: true

        });
    </script>

    <noscript>
        <div><img src="https://mc.yandex.ru/watch/65708323" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>

    <!-- /Yandex.Metrika counter -->
    <!-- Load JS here for greater good =============================-->

    <script src="./Square - SaaS Landing Page Template_files/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="./Square - SaaS Landing Page Template_files/bootstrap.min.js"></script>

    <script src="./Square - SaaS Landing Page Template_files/jquery.scrollTo-min.js"></script>

    <script src="./Square - SaaS Landing Page Template_files/jquery.magnific-popup.min.js"></script>

    <script src="./Square - SaaS Landing Page Template_files/jquery.nav.js"></script>

    <script src="./Square - SaaS Landing Page Template_files/wow.js"></script>

    <script src="./Square - SaaS Landing Page Template_files/plugins.js"></script>

    <script src="./Square - SaaS Landing Page Template_files/jquery.ihavecookies.js"></script>

    <script src="./Square - SaaS Landing Page Template_files/jquery.mask.js"></script>

    <script src="./Square - SaaS Landing Page Template_files/custom.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('body').ihavecookies({
                title: '&#x1F36A; Разрещить сайту принимать Cookie?',
                message: 'На этом сайте используются файлы cookie, соглашаясь вы предоставите возможность принимать файли куки.',
                delay: 600,
                // expires: 1,
                // link: '#privacy',
                onAccept: function() {
                    var myPreferences = $.fn.ihavecookies.cookie();
                    console.log('Yay! The following preferences were saved...');
                    console.log(myPreferences);
                },
                uncheckBoxes: false,
                acceptBtnLabel: 'Соглашаюсь',
                moreInfoLabel: 'Больше информации',
                // cookieTypesTitle: 'Выберите, файлы куки которые хотите принимать:',
                // fixedCookieTypeLabel: 'Основное',
                // fixedCookieTypeDesc: 'These are essential for the website to work correctly.'
            });

            if ($.fn.ihavecookies.preference('marketing') === true) {
                console.log('This should run because marketing is accepted.');
            }
        });
    </script>




</body>

</html>