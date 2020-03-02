<?php
require_once('../management/sql/DBOperations.php');
$dbOperation = new DBOperations();

include("../counter.php");

$result_news = $dbOperation->get_news('en');
$news = mysqli_fetch_array($result_news);

?>
<!doctype html>
<html lang="en" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Isfara, Исфара, Шахри, макомот, раис">
    <meta name="description" content="Маълумоти Исфара - индустриальный город в Северном Таджикистане. Административный центр Исфаринского района Согдийской области. Расположен в предгорьях Туркестанского хребта, на реке Исфара. Центр крупнейшего плодоовощеводческого района Таджикистана.
Исфара расположена в северо-восточной части Согдийской области, на стыке двух соседних государств — Узбекистана и Киргизии. Исфару окружают высокие разноцветные горы. Природа очень разнообразна. Географически Исфара входит в систему Туркестанского хребта, которым окаймлена на юго-западе Ферганского котлована.
Климат - В классификации климатов Кёппена Исфара классифицируется как «BWk». Тёплая погода: климат континентальный, жаркое лето и умеренно холодная зима. Температура воздуха в среднем +27°С в июле и −3°С в январе. Среднегодовое количество осадков составляет 200-500 мм.
Снегопад: климат континентальный, январские температуры в долинах колеблются около 0°, а в высокогорьях опускаются до −27 °C, июльские температуры варьируются от +23 до +30 °C. Осадков на равнинах выпадает 150-300 мм в год, а выше 1000 м над уровнем моря — 700 мм и более (до 3000 мм в высокогорьях).
История-В Ферганской долине располагались древние города Центральной Азии, такие как Худжанд, Истаравшан, Канибадам, Пенджикент, Ош, Маргилан, Андижан, Коканд, Риштан, Кува, Узген, Наманган и Исфара. Через долину проходил Шёлковый путь, связывавший Китай, Азию с Европой. Исфара считается одним из древнейших городов Средней Азии. Впервые город был назван «Исфара» в X веке в «Истории Табари».
Период развития экономики и культуры Исфары связан с вхождением её в состав государства Шайбанидов.
Исфара в конце XIX-начале XX веков получила новый стимул развития, становясь крупным районом сельскохозяйственного производства Туркестанского края.
В Таджикскую ССР Исфара вошла в составе Ходжентского округа в октябре 1929 года.
31 января 1977 года город подвергся мощному землетрясению с эпицентром в кишлаке Офтобруй (Солнечный) в 5 км от города, в результате которого кишлак был полностью разрушен. Восстановлен летом 1977 года частями стройбата Советской армии[4].
Культура - Город является одним из центров культуры Ферганской долины.
Исфара с давних времён прославилась народными умельцами. Здесь издревле развивались резьба по дереву, кузнечные, гончарные и другие ремесла. Особенно популярно искусство резчиков по ганчу и по дереву.
Кинематограф - В окрестностях Исфары снимались эпизоды фильмов: «Если любишь…», «Через тернии к звёздам», «Сказание о Рустаме», «Рустам и Сухроб», «Сказание о Сиявуше», «Хасан Арбакеш», «Седьмая пуля» и многих других картин.
Фильм Андрея Тарковского «Сталкер» также должен был сниматься в Исфаре, но из-за землетрясения в 1977 году съёмочной группе пришлось искать другое место для съёмок.
Председатели Хукумата
Гулафзо Савриддинова (1988 — 1996)
Темурхонов Абдурахим (март 2000 — март 2005)
Якубова, Мухиба Бобохоновна (? — 25 марта 2010)
Ашуров, Субхонидин Бурхонович[6] (25 марта 2010 — 4 января 2012)
Амиров, Рахмонали  (4 января 2012 — 13 декабря 2013)
Зохидзода, Даврон Абдулкодир  (13 декабря 2013 — 11 января 2016)
Расулзода, Дилшод Джаббори  (с 11 января 2016 - февраль 2018)">

    <meta name="authors" content=" Ҳакимхоҷаев , Низомиддин, Исобоева, Дилноза, Ҷураев, Кадриддин">

    <base/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Official website executive body of the city government of Isfara</title>
    <link href="../img/logo.png" rel="shortcut icon"/>
    <link href="index.php/component/search/indexe1ab.html?id=1&amp;Itemid=216&amp;format=opensearch" rel="search"
          title="Search Newsberg" type="application/opensearchdescription+xml"/>
    <link href="components/com_sppagebuilder/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="components/com_sppagebuilder/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="components/com_sppagebuilder/assets/css/sppagebuilder.css" rel="stylesheet" type="text/css"/>
    <link href="components/com_sppagebuilder/assets/css/sppagecontainer.css" rel="stylesheet" type="text/css"/>
    <link href="templates/newsberg/css/swiper.min.css" rel="stylesheet" type="text/css"/>
    <link href="modules/mod_sp_tweet/assets/css/mod_sp_tweet.default.css" rel="stylesheet" type="text/css"/>
    <link href="modules/mod_sp_poll/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Frank%20Ruhl%20Libre:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=latin"
          rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Arimo:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=latin-ext"
          rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Frank%20Ruhl%20Libre:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=latin-ext"
          rel="stylesheet" type="text/css"/>
    <link href="http://fonts.googleapis.com/css?family=Arimo:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic-ext"
          rel="stylesheet" type="text/css"/>
    <link href="templates/newsberg/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="templates/newsberg/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="templates/newsberg/css/template.css" rel="stylesheet" type="text/css"/>
    <link href="templates/newsberg/css/presets/preset1.css" rel="stylesheet" class="preset" type="text/css"/>
    <link href="modules/mod_helix3_options/assets/css/helix3-options.css" rel="stylesheet" type="text/css"/>
    <link href="components/com_sppagebuilder/assets/css/magnific-popup.css" rel="stylesheet" type="text/css"/>
    <link href="media/mod_languages/css/template4f50.css?0fe5eabe7d411626b85406bf464c07ff" rel="stylesheet"
          type="text/css"/>
    <link href="modules/mod_sp_weather/assets/css/flat.css" rel="stylesheet" type="text/css"/>

    <link href="templates/newsberg/css/main.css" rel="stylesheet" type="text/css"/>


    <style type="text/css">
        #column-id-1573624776028 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1573624794184 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573624794184 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 100px) and (max-width: 991px) {
            #section-id-1574157062618 {
                max-width: 50%;
            }
            .who_is {
                display: flex;
                align-items: flex-end;
                padding-bottom: 10px !important;
            }


            .president {
                display: flex;
            }

            .visitors {
                display: flex;
            }

        }


        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573624794184 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573624794184 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1573624794184 .swiper-container.articles-slider {
            height: 815px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-1573624794184 .swiper-container.articles-slider {
                height: 550px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1573624794184 .swiper-container.articles-slider {
                height: 350px;
            }
        }

        .sp-page-builder .page-content #section-id-1573711718214 {
            padding-top: 30px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }

        #column-id-1573711718213 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1574765723526 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574765723526 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1574765723526 .sppb-addon-title {
            font-size: 27px;
            line-height: 27px;
            line-height: 38px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574765723526 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1574765723526 .sppb-addon-title {
                font-size: 18px;
                line-height: 18px;
                line-height: 24px;
            }

            #sppb-addon-wrapper-1574765723526 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1574765723526 h2.sppb-addon-title {
            margin: 0px 0px 0px 0px;
            text-transform: none;
        }

        #sppb-addon-wrapper-1574763938320 {
            margin: 0px 0px -10px 0px;
        }

        #sppb-addon-1574763938320 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574763938320 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1574763938320 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #column-id-1573711718215 {
            box-shadow: 0 0 0 0 #fff;
        }

        .sp-page-builder .page-content #section-id-1574157062618 {
            padding-top: 20px;
            /* padding-right: 20px;*/
            padding-bottom: 0px;
            /*padding-left: 20px;*/
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 10px;
            margin-left: 0px;
            background-color: #ffffff;
        }

        #column-id-1574157062619 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-1573712171080 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1573712171080 .sppb-addon-title {
            font-size: 27px;
            line-height: 27px;
            line-height: 38px;
        }

        @media (max-width: 767px) {
            #sppb-addon-1573712171080 .sppb-addon-title {
                font-size: 22px;
                line-height: 22px;
                line-height: 26px;
            }
        }

        #sppb-addon-1573712171080 h2.sppb-addon-title {
            margin: 10px 0px 35px 0px;
            text-transform: none;
            padding: 0px 0px 0px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-1573712171080 h2.sppb-addon-title {
                margin: 0px 0px 20px 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1573712171080 h2.sppb-addon-title {
                margin: 0px 0px 15px 0px;
            }
        }

        #sppb-addon-1574763948201 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        .sp-page-builder .page-content #section-id-1574763938341 {
            padding: 28px 0px 30px 0px;
            margin: 0px 0px 0px 0px;
        }

        #column-id-1574763938340 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1574765477678 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574765477678 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574765477678 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1574765477678 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #column-id-1574764831938 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1574849761825 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574849761825 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574849761825 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1574849761825 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1574849761825 {
            text-align: right;
        }

        #sppb-addon-1574849761825 img {
            display: inline-block;
        }

        .sp-page-builder .page-content #section-id-1574064817276 {
            padding: 0px 0px 17px 0px;
            margin: 0px 0px 0px 0px;
        }

        #column-id-1574064817275 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1573711718259 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573711718259 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1573711718259 .sppb-addon-title {
            font-size: 27px;
            line-height: 27px;
            line-height: 38px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573711718259 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1573711718259 .sppb-addon-title {
                font-size: 18px;
                line-height: 18px;
                line-height: 24px;
            }

            #sppb-addon-wrapper-1573711718259 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1573711718259 h2.sppb-addon-title {
            margin: 0px 0px 0px 0px;
            text-transform: none;
        }

        #sppb-addon-wrapper-1574765774388 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574765774388 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574765774388 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1574765774388 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #column-id-1574064817277 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1573813271043 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573813271043 {
            background-color: #ffffff;
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573813271043 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573813271043 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1573813271043 .newsberg-card {
            background-color: #fff;
        }

        #sppb-addon-wrapper-1574765554041 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574765554041 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574765554041 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1574765554041 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        .sp-page-builder .page-content #section-id-1573810024455 {
            padding-top: 60px;
            padding-right: 0px;
            padding-bottom: 28px;
            padding-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            background-color: #1d55c1;
        }

        #column-id-1573810024454 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1573810048723 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573810048723 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573810048723 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573810048723 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1573810048723 .newsberg-card {
            background-color: #fff;
        }

        #column-id-1573810024456 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1574066045843 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574066045843 {
            color: #ffffff;
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1574066045843 .sppb-addon-title {
            font-size: 27px;
            line-height: 27px;
            line-height: 38px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574066045843 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1574066045843 .sppb-addon-title {
                font-size: 22px;
                line-height: 22px;
                line-height: 26px;
            }

            #sppb-addon-wrapper-1574066045843 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1574066045843 .heading-arrow .sppb-addon-title {
            color: #fff;
        }

        #sppb-addon-1574066045843 h2.sppb-addon-title {
            margin: 0px 0px 30px 0px;
            text-transform: none;
            padding: 0px 0px 0px 0px;
        }

        #sppb-addon-wrapper-1574065711678 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574065711678 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574065711678 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1574065711678 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1574065711678 .swiper-container.articles-slider {
            height: 512px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-1574065711678 .swiper-container.articles-slider {
                height: 450px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1574065711678 .swiper-container.articles-slider {
                height: 350px;
            }
        }

        .sp-page-builder .page-content #section-id-1575553238550 {
            padding: 60px 0px 4px 0px;
            margin: 0px 0px 0px 0px;
        }

        #column-id-1575553238549 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1575553238554 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1575553238554 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1575553238554 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1575553238554 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        .sp-page-builder .page-content #section-id-1574146524914 {
            padding-top: 28px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }

        @media (max-width: 767px) {
            .sp-page-builder .page-content #section-id-1574146524914 {
                padding-top: 20px;
                padding-right: 0px;
                padding-bottom: 20px;
                padding-left: 0px;
            }
        }

        #column-id-1574146524913 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1574765921685 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574765921685 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1574765921685 .sppb-addon-title {
            font-size: 27px;
            line-height: 27px;
            line-height: 38px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574765921685 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1574765921685 .sppb-addon-title {
                font-size: 22px;
                line-height: 22px;
                line-height: 26px;
            }

            #sppb-addon-wrapper-1574765921685 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1574765921685 h2.sppb-addon-title {
            margin: 0px 0px 0px 0px;
            text-transform: none;
        }

        #sppb-addon-1575898734794 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1575898734624 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1575532191238 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1575898734991 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-wrapper-1575532278055 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1575532278055 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1575532278055 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1575532278055 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1575532278055 .newsberg-card {
            background-color: #fff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-1575532278055 .sppb-nav-custom {
                width: 30%;
                padding-right: 15px;
            }

            #sppb-addon-1575532278055 .sppb-tab-custom-content {
                width: 70%;
                padding-left: 15px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1575532278055 .sppb-nav-custom {
                width: 30%;
                padding-right: 15px;
            }

            #sppb-addon-1575532278055 .sppb-tab-custom-content {
                width: 70%;
                padding-left: 15px;
            }
        }

        #column-id-1574146524915 {
            box-shadow: 0 0 0 0 #fff;
        }

        .sp-page-builder .page-content #section-id-1574849226283 {
            padding-top: 20px;
            padding-right: 20px;
            padding-bottom: 0px;
            padding-left: 20px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            background-color: #ffffff;
        }

        #column-id-1574849226297 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1574849226298 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574849226298 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1574849226298 .sppb-addon-title {
            font-size: 25px;
            line-height: 25px;
            line-height: 35px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574849226298 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1574849226298 .sppb-addon-title {
                font-size: 22px;
                line-height: 22px;
                line-height: 26px;
            }

            #sppb-addon-wrapper-1574849226298 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1574849226298 h2.sppb-addon-title {
            margin: 0px 0px 0px 0px;
            text-transform: none;
            padding: 0px 0px 0px 0px;
        }

        #sppb-addon-1574849226299 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        .sp-page-builder .page-content #section-id-1574146136147 {
            padding-top: 23px;
            padding-right: 0px;
            padding-bottom: 3px;
            padding-left: 0px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .sp-page-builder .page-content #section-id-1574146136147 {
                padding-top: 30px;
                padding-right: 0px;
                padding-bottom: 30px;
                padding-left: 0px;
            }
        }

        @media (max-width: 767px) {
            .sp-page-builder .page-content #section-id-1574146136147 {
                padding-top: 20px;
                padding-right: 0px;
                padding-bottom: 20px;
                padding-left: 0px;
            }
        }

        #column-id-1574146136146 {
            border-radius: 8px;
            box-shadow: 0 0 0 0 #fff;
        }

        #column-wrap-id-1574146136146 {
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }

        .sp-page-builder .page-content #section-id-1574146524357 {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            margin-top: 0px;
            margin-right: 134px;
            margin-bottom: 0px;
            margin-left: 134px;
            background-image: url(images/2019/11/19/home-cta-bg.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: inherit;
            background-position: 50% 50%;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .sp-page-builder .page-content #section-id-1574146524357 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            .sp-page-builder .page-content #section-id-1574146524357 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-left: 0px;
            }
        }

        .sp-page-builder .page-content #section-id-1574146524357 > .sppb-row-overlay {
            mix-blend-mode: normal;
        }

        #column-id-1574146524358 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1574146220982 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574146220982 {
            color: #fbfbfb;
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1574146220982 .sppb-addon-title {
            margin-top: 43px;
            margin-bottom: 20px;
            color: #fff;
            font-size: 44px;
            line-height: 44px;
            line-height: 56px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-1574146220982 .sppb-addon-title {
                font-size: 35px;
                line-height: 35px;
                line-height: 46px;
                margin-top: 30px;
                margin-bottom: 15px;
            }

            #sppb-addon-wrapper-1574146220982 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1574146220982 .sppb-addon-title {
                font-size: 25px;
                line-height: 25px;
                line-height: 36px;
                margin-top: 20px;
                margin-bottom: 10px;
            }

            #sppb-addon-wrapper-1574146220982 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1574146220982 {
            font-size: 16px;
            line-height: 24px;
        }

        #sppb-addon-wrapper-1574849226312 {
            margin: 0px 0px 66px 0px;
        }

        #sppb-addon-1574849226312 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574849226312 {
                margin-top: 30px;
                margin-right: 0px;
                margin-bottom: 40px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1574849226312 {
                margin-top: 20px;
                margin-right: 0px;
                margin-bottom: 30px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1574849226312 #btn-1574849226312.sppb-btn-secondary {
            font-weight: 700;
        }

        #sppb-addon-1574849226312 .sppb-btn i {
            margin: 0px 0px 0px 0px;
        }

        .sp-page-builder .page-content #section-id-1574849226297 {
            padding: 61px 0px 34px 0px;
            margin: 0px 0px 0px 0px;
        }

        #column-id-1574849226296 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1575012226944 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1575012226944 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1575012226944 .sppb-addon-title {
            font-size: 27px;
            line-height: 27px;
            line-height: 38px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1575012226944 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1575012226944 .sppb-addon-title {
                font-size: 22px;
                line-height: 22px;
                line-height: 26px;
            }

            #sppb-addon-wrapper-1575012226944 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1575012226944 h2.sppb-addon-title {
            margin: 0px 0px 0px 0px;
            text-transform: none;
        }

        #sppb-addon-wrapper-1574849512050 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574849512050 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574849512050 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1574849512050 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1574849894517 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574849894517 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574849894517 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1574849894517 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1574849894517 {
            text-align: center;
        }

        #sppb-addon-1574849894517 img {
            display: inline-block;
        }

        #column-id-1574849226298 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1574849903522 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1574849903522 {
            background-color: #ffffff;
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1574849903522 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1574849903522 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1575012347307 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1575012347307 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1575012347307 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1575012347307 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        .sppb-addon-articles-thumb-slider .articles-thumb .article-counter, .sppb-addon-module .mod-sppoll > strong, #sp-bottom .sp-module ul > li .sp-bottom-title, .spauthorarchive-articles .spauthorarchive-info-wrap p span, #spauthorarchive .newsberg-author-title {
            font-family: 'Frank Ruhl Libre', sans-serif;
        }

        body {
            font-family: 'Arimo', sans-serif;
            font-size: 16px;
        }

        @media (max-width: 767px) {
            body {
                font-size: 13px;
            }
        }

        h1 {
            font-family: 'Frank Ruhl Libre', sans-serif;
            font-size: 60px;
            font-weight: 700;
        }

        @media (max-width: 767px) {
            h1 {
                font-size: 40px;
            }
        }

        h2 {
            font-family: 'Frank Ruhl Libre', sans-serif;
            font-size: 34px;
            font-weight: 400;
        }

        @media (max-width: 767px) {
            h2 {
                font-size: 24px;
            }
        }

        h3 {
            font-family: 'Frank Ruhl Libre', sans-serif;
            font-size: 27px;
            font-weight: 400;
        }

        @media (max-width: 767px) {
            h3 {
                font-size: 20px;
            }
        }

        h4 {
            font-family: 'Frank Ruhl Libre', sans-serif;
            font-size: 18px;
            font-weight: 400;
        }

        @media (max-width: 767px) {
            h4 {
                font-size: 15px;
            }
        }

        #sp-top1 > .sp-column > .sp-module .sp-module-title {
            font-family: 'Arimo', sans-serif;
        }

        .logo-image {
            height: 45px;
        }

        .logo-image-phone {
            height: 45px;
        }

        #sp-bottom-top {
            padding: 25px 0px 25px 0px;
        }

        #sp-footer {
            background-color: #1c4dad;
        }
    </style>
    <script type="application/json" class="joomla-script-options new">{
            "csrf.token": "617709c9ab31b88b48030ca5bd751ad5",
            "system.paths": {
                "root": "\/2019\/newsberg",
                "base": "\/2019\/newsberg"
            },
            "system.keepalive": {
                "interval": 3600000,
                "uri": "\/2019\/newsberg\/index.php\/component\/ajax\/?format=json"
            }
        }</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="media/jui/js/jquery.min4f50.js?0fe5eabe7d411626b85406bf464c07ff" type="text/javascript"></script>
    <script src="media/jui/js/jquery-noconflict4f50.js?0fe5eabe7d411626b85406bf464c07ff"
            type="text/javascript"></script>
    <script src="media/jui/js/jquery-migrate.min4f50.js?0fe5eabe7d411626b85406bf464c07ff"
            type="text/javascript"></script>
    <script src="components/com_sppagebuilder/assets/js/jquery.parallax.js" type="text/javascript"></script>
    <script src="components/com_sppagebuilder/assets/js/sppagebuilder.js" type="text/javascript"></script>
    <script src="templates/newsberg/js/swiper.min.js" type="text/javascript"></script>
    <script src="components/com_spauthorarchive/assets/js/spauthorarchive.js" type="text/javascript"></script>
    <script src="modules/mod_sp_poll/assets/js/script.js" type="text/javascript"></script>
    <script src="templates/newsberg/js/popper.min.js" type="text/javascript"></script>
    <script src="templates/newsberg/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="templates/newsberg/js/main.js" type="text/javascript"></script>
    <script src="modules/mod_sp_tabbed_articles/assets/js/sp-tabbed-articles.js" type="text/javascript"></script>
    <script src="modules/mod_helix3_options/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="modules/mod_helix3_options/assets/js/helix3-options.js" type="text/javascript"></script>
    <script src="components/com_sppagebuilder/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="media/system/js/core4f50.js?0fe5eabe7d411626b85406bf464c07ff" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="/2019/newsberg/media/system/js/polyfill.event.js?0fe5eabe7d411626b85406bf464c07ff"
            type="text/javascript"></script><![endif]-->
    <script src="media/system/js/keepalive4f50.js?0fe5eabe7d411626b85406bf464c07ff" type="text/javascript"></script>
    <script type="text/javascript">
        ;(function ($) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': Joomla.getOptions('csrf.token')
                }
            });
        })(jQuery);
        jQuery(document).ready(function ($) {
            var articlesSlider = $("#sppb-addon-1573624794184 .sppb-addon-articles-thumb-slider")
            var $autoplay = articlesSlider.attr("data-slider-autoplay");
            if ($autoplay == 1) {
                $autoplay = true;
            } else {
                $autoplay = false
            }
            ;

            var articlesThumb = new Swiper("#sppb-addon-1573624794184 .articles-thumb", {
                slidesPerView: 5,
                direction: "vertical",
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                mousewheel: true,
                loop: true
            });

            var articleSlider = new Swiper("#sppb-addon-1573624794184 .articles-slider", {
                direction: "vertical",
                loop: true,
                autoplay: $autoplay,
                lazy: true,
                speed: 850,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: articlesThumb
                }
            });
        });
        jQuery(document).ready(function ($) {
            var articleSlider = new Swiper("#sppb-addon-1574763938320 .intro-items-slider", {
                breakpoints: {
                    478: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                },
                lazy: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        });
        jQuery(document).ready(function ($) {
            var articleSlider = new Swiper("#sppb-addon-1574763948201 .intro-items-slider", {
                breakpoints: {
                    478: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                },
                lazy: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        });
        jQuery(document).ready(function ($) {
            var articleSlider = new Swiper("#sppb-addon-1574765774388 .intro-items-slider", {
                breakpoints: {
                    478: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                },
                lazy: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        });
        var base_url = 'indexe5cd.html?option=com_sppolls'
        jQuery(document).ready(function ($) {
            var articlesSlider = $("#sppb-addon-1574065711678 .sppb-addon-articles-thumb-slider")
            var $autoplay = articlesSlider.attr("data-slider-autoplay");
            if ($autoplay == 1) {
                $autoplay = true;
            } else {
                $autoplay = false
            }
            ;

            var articlesThumb = new Swiper("#sppb-addon-1574065711678 .articles-thumb", {
                slidesPerView: 4,
                direction: "vertical",
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                mousewheel: true,
                loop: true
            });

            var articleSlider = new Swiper("#sppb-addon-1574065711678 .articles-slider", {
                direction: "vertical",
                loop: true,
                autoplay: $autoplay,
                lazy: true,
                speed: 850,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: articlesThumb
                }
            });
        });
        jQuery(document).ready(function ($) {
            var articleSlider = new Swiper("#sppb-addon-1575898734794 .intro-items-slider", {
                breakpoints: {
                    478: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                },
                lazy: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        });
        jQuery(document).ready(function ($) {
            var articleSlider = new Swiper("#sppb-addon-1575898734624 .intro-items-slider", {
                breakpoints: {
                    478: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                },
                lazy: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        });
        jQuery(document).ready(function ($) {
            var articleSlider = new Swiper("#sppb-addon-1575532191238 .intro-items-slider", {
                breakpoints: {
                    478: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                },
                lazy: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        });
        jQuery(document).ready(function ($) {
            var articleSlider = new Swiper("#sppb-addon-1575898734991 .intro-items-slider", {
                breakpoints: {
                    478: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                },
                lazy: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        });
        jQuery(document).ready(function ($) {
            var articleSlider = new Swiper("#sppb-addon-1574849226299 .intro-items-slider", {
                breakpoints: {
                    478: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                },
                lazy: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        });
        jQuery(document).ready(function ($) {
            var articleSlider = new Swiper("#sppb-addon-1574849512050 .intro-items-slider", {
                breakpoints: {
                    478: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1199: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                },
                lazy: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        });
        template = "newsberg";
        var helix3_template = "newsberg";
        var helix3_template_uri = "/2019/newsberg/templates/newsberg";
        jQuery(function ($) {

            var addonId = $("#sppb-addon-1573641031813"),
                prentSectionId = addonId.parent().closest("section");

            if ($("#sppb-addon-1573641031813").find(".optintype-popup").length !== 0 && $("body:not(.layout-edit)").length !== 0) {
                prentSectionId.hide();
            }

            if ($("#sppb-addon-1573641031813").find(".optintype-popup").length !== 0 && $("body:not(.layout-edit)").length !== 0) {
                //var parentSection 	= $("#sppb-addon-1573641031813").parent().closest("section"),
                var addonWidth = addonId.parent().outerWidth(),
                    optin_timein = 2000,
                    optin_timeout = 10000,
                    prentSectionId = ".com-sppagebuilder:not(.layout-edit) #" + addonId.attr("id");

                $(window).load(function () {
                    setTimeout(function () {
                        $.magnificPopup.open({
                            items: {
                                src: "<div class=\"sppb-optin-form-popup-wrap\" \">" + $(addonId)[0].outerHTML + "</div>"
                                //src: "<div style=\"width:+"addonWidth"+\">" + $(addonId)[0].outerHTML + "</div>"
                            },
                            type: "inline",
                            mainClass: "mfp-fade",
                            disableOn: function () {
                                return true;
                            },
                            callbacks: {
                                open: function () {
                                    if (optin_timeout) {
                                        setTimeout(function () {
                                            $("#sppb-addon-1573641031813").magnificPopup("close");
                                        }, optin_timeout);
                                    }
                                }
                            }
                        });
                    }, optin_timein);
                }); //window
            }
            ;
        })
        jQuery(function ($) {
            initTooltips();
            $("body").on("subform-row-add", initTooltips);

            function initTooltips(event, container) {
                container = container || document;
                $(container).find(".hasTooltip").tooltip({"html": true, "container": "body"});
            }
        });

        $('.carousel').carousel({
            interval: 2000
        })
    </script>
</head>
<body class="site helix-ultimate com-sppagebuilder view-page layout-default task-none itemid-216 en-gb ltr sticky-header layout-fluid offcanvas-init offcanvs-position-left">
<div class="body-wrapper">
    <div class="body-innerwrapper">
    <?php
        require_once('include/header.php');
    ?>
        <section id="sp-section-3">
            <div class="row">
                <div id="sp-title" class="col-lg-12 ">
                    <div class="sp-column "></div>
                </div>
            </div>
        </section>
        <section id="sp-main-body">
            <div class="row">
                <main id="sp-component" class="col-lg-12 " role="main">
                    <div class="sp-column ">
                        <div id="system-message-container">
                        </div>
                        <div id="sp-page-builder" class="sp-page-builder  page-1">
                            <div class="page-content">
                                <?php
                                require_once ('include/slider.php');
                                ?>

                                <section id="section-id-1573711718214" class="sppb-section">
                                    <div class="sppb-row-container">
                                        <div class="sppb-row">
                                            <div class="sppb-col-md-9" id="column-wrap-id-1573711718213">
                                                <div id="column-id-1573711718213" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-wrapper-1574765723526"
                                                             class="sppb-addon-wrapper">
                                                            <div id="sppb-addon-1574765723526" class="clearfix ">
                                                                <div class="sppb-addon sppb-addon-header heading-arrow sppb-text-left">
                                                                    <h2 class="sppb-addon-title">Last news</h2></div>
                                                            </div>
                                                        </div>
                                                        <div id="sppb-addon-wrapper-1574763938320"
                                                             class="sppb-addon-wrapper">
                                                            <div id="sppb-addon-1574763938320" class="clearfix ">
                                                                <div class="sppb-addon sppb-addon-articles-layout layout-arabica  ">
                                                                    <div class="sppb-addon-content">
                                                                        <div class="sppb-row">
                                                                            <?php
                                                                            $news = mysqli_fetch_array($result_news);
                                                                            $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                            $cat = mysqli_fetch_array($category);
                                                                            echo '
                                                                            <div class="leading-item  sppb-col-sm-6">
                                                                                <div class="sppb-addon-article "
                                                                                     style="background-image: url(../img/'.$news[3].')">
                                                                                    <a class="sppb-article-img-wrap"
                                                                                       href="view_news.php?id='.$news[0].'&category='.$news[4].'"
                                                                                     ><img
                                                                                            class="sppb-img-responsive"
                                                                                            src="../img/'.$news[3].'"
                                                                                           ></a>
                                                                                    <div class="sppb-article-info-wrap">
                                                                                        <p class="sppb-meta-category">
                                                                                            <a
                                                                                                href="category.php?id='.$news[4].'"
                                                                                                itemprop="genre">'. $cat[0] .'</a>
                                                                                        </p>
                                                                                        <h3>
                                                                                            <a href="view_news.php?id='.$news[0].'&category='.$news[4].'" itemprop="url">'.$news[2].'</a></h3>
                                                                                        <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-date"
                                                                                                      itemprop="datePublished">'.$news[5].'</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            ';
                                                                            ?>

                                                                            <?php
                                                                            $news = mysqli_fetch_array($result_news);
                                                                            $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                            $cat = mysqli_fetch_array($category);
                                                                            ?>
                                                                            <div class="leading-item  sppb-col-sm-6">
                                                                                <div class="sppb-addon-article "
                                                                                     style="background-image: url(../img/<?=$news[3]?>)">
                                                                                    <a class="sppb-article-img-wrap"
                                                                                       href="view_news.php?id='<?=$news[0]?>&category=<?=$news[4]?>
                                                                                       itemprop="url"><img
                                                                                            class="sppb-img-responsive"
                                                                                            src="../img/<?=$news[3]?>"
                                                                                            itemprop="thumbnailUrl"></a>
                                                                                    <div class="sppb-article-info-wrap">
                                                                                        <p class="sppb-meta-category">
                                                                                            <a
                                                                                                href="category.php?id=<?=$news[4]?>"
                                                                                                itemprop="genre"><?=$cat[0]?></a>
                                                                                        </p>
                                                                                        <h3>
                                                                                            <a href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>" itemprop="url"><?=$news[2]?></a></h3>
                                                                                        <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-date"
                                                                                                      itemprop="datePublished"><?=$news[5]?></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>



                                                                            <div class="sppb-col-sm-12">
                                                                                <div class="swiper-container intro-items-slider">
                                                                                    <div class="swiper-wrapper">
                                                                                        <?php
                                                                                        $news = mysqli_fetch_array($result_news);
                                                                                        $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                        $cat = mysqli_fetch_array($category);
                                                                                        ?>
                                                                                        <div class="swiper-slide  sppb-col-sm-0">
                                                                                            <div class="sppb-addon-article "
                                                                                                 style="">
                                                                                                <div class="sppb-article-info-wrap">
                                                                                                    <p class="sppb-meta-category">
                                                                                                        <a href="category.php?id=<?=$news[4]?>"
                                                                                                           itemprop="genre"><?=$cat[0]?></a>
                                                                                                    </p>
                                                                                                    <h3>
                                                                                                        <a href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><?=$news[1]?></a>
                                                                                                    </h3>
                                                                                                    <div class="sppb-article-info-intro-wrap d-flex align-items-center">
                                                                                                        <div>
                                                                                                            <div class="sppb-article-introtext">
                                                                                                                <?=$news[2]?>
                                                                                                            </div>
                                                                                                            <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                                                <div class="sppb-article-meta">
                                                                                                                    <span class="sppb-meta-date"
                                                                                                                          itemprop="datePublished"><?=$news[5]?></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a class="sppb-article-img-wrap"
                                                                                                           href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><img
                                                                                                                    class="sppb-img-responsive"
                                                                                                                    src="../img/<?=$news[3]?>"
                                                                                                                    alt="<?=$news[1]?>"
                                                                                                                    itemprop="thumbnailUrl"></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php
                                                                                        $news = mysqli_fetch_array($result_news);
                                                                                        $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                        $cat = mysqli_fetch_array($category);
                                                                                        ?>
                                                                                        <div class="swiper-slide  sppb-col-sm-0">
                                                                                            <div class="sppb-addon-article "
                                                                                                 style="">
                                                                                                <div class="sppb-article-info-wrap">
                                                                                                    <p class="sppb-meta-category">
                                                                                                        <a href="category.php?id=<?=$news[4]?>"
                                                                                                           itemprop="genre"><?=$cat[0]?></a>
                                                                                                    </p>
                                                                                                    <h3>
                                                                                                        <a href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><?=$news[1]?></a>
                                                                                                    </h3>
                                                                                                    <div class="sppb-article-info-intro-wrap d-flex align-items-center">
                                                                                                        <div>
                                                                                                            <div class="sppb-article-introtext">
                                                                                                                <?=$news[2]?>
                                                                                                            </div>
                                                                                                            <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                                                <div class="sppb-article-meta">
                                                                                                                    <span class="sppb-meta-date"
                                                                                                                          itemprop="datePublished"><?=$news[5]?></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a class="sppb-article-img-wrap"
                                                                                                           href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><img
                                                                                                                class="sppb-img-responsive"
                                                                                                                src="../img/<?=$news[3]?>"
                                                                                                                alt="<?=$news[1]?>"
                                                                                                                itemprop="thumbnailUrl"></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php
                                                                                        $news = mysqli_fetch_array($result_news);
                                                                                        $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                        $cat = mysqli_fetch_array($category);
                                                                                        ?>
                                                                                        <div class="swiper-slide  sppb-col-sm-0">
                                                                                            <div class="sppb-addon-article "
                                                                                                 style="">
                                                                                                <div class="sppb-article-info-wrap">
                                                                                                    <p class="sppb-meta-category">
                                                                                                        <a href="category.php?id=<?=$news[4]?>"
                                                                                                           itemprop="genre"><?=$cat[0]?></a>
                                                                                                    </p>
                                                                                                    <h3>
                                                                                                        <a href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><?=$news[1]?></a>
                                                                                                    </h3>
                                                                                                    <div class="sppb-article-info-intro-wrap d-flex align-items-center">
                                                                                                        <div>
                                                                                                            <div class="sppb-article-introtext">
                                                                                                                <?=$news[2]?>
                                                                                                            </div>
                                                                                                            <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                                                <div class="sppb-article-meta">
                                                                                                                    <span class="sppb-meta-date"
                                                                                                                          itemprop="datePublished"><?=$news[5]?></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a class="sppb-article-img-wrap"
                                                                                                           href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><img
                                                                                                                class="sppb-img-responsive"
                                                                                                                src="../img/<?=$news[3]?>"
                                                                                                                alt="<?=$news[1]?>"
                                                                                                                itemprop="thumbnailUrl"></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php
                                                                                        $news = mysqli_fetch_array($result_news);
                                                                                        $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                        $cat = mysqli_fetch_array($category);
                                                                                        ?>
                                                                                        <div class="swiper-slide  sppb-col-sm-0">
                                                                                            <div class="sppb-addon-article "
                                                                                                 style="">
                                                                                                <div class="sppb-article-info-wrap">
                                                                                                    <p class="sppb-meta-category">
                                                                                                        <a href="category.php?id=<?=$news[4]?>"
                                                                                                           itemprop="genre"><?=$cat[0]?></a>
                                                                                                    </p>
                                                                                                    <h3>
                                                                                                        <a href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><?=$news[1]?></a>
                                                                                                    </h3>
                                                                                                    <div class="sppb-article-info-intro-wrap d-flex align-items-center">
                                                                                                        <div>
                                                                                                            <div class="sppb-article-introtext">
                                                                                                                <?=$news[2]?>
                                                                                                            </div>
                                                                                                            <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                                                <div class="sppb-article-meta">
                                                                                                                    <span class="sppb-meta-date"
                                                                                                                          itemprop="datePublished"><?=$news[5]?></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a class="sppb-article-img-wrap"
                                                                                                           href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><img
                                                                                                                class="sppb-img-responsive"
                                                                                                                src="../img/<?=$news[3]?>"
                                                                                                                alt="<?=$news[1]?>"
                                                                                                                itemprop="thumbnailUrl"></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php
                                                                                        $news = mysqli_fetch_array($result_news);
                                                                                        $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                        $cat = mysqli_fetch_array($category);
                                                                                        ?>
                                                                                        <div class="swiper-slide  sppb-col-sm-0">
                                                                                            <div class="sppb-addon-article "
                                                                                                 style="">
                                                                                                <div class="sppb-article-info-wrap">
                                                                                                    <p class="sppb-meta-category">
                                                                                                        <a href="category.php?id=<?=$news[4]?>"
                                                                                                           itemprop="genre"><?=$cat[0]?></a>
                                                                                                    </p>
                                                                                                    <h3>
                                                                                                        <a href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><?=$news[1]?></a>
                                                                                                    </h3>
                                                                                                    <div class="sppb-article-info-intro-wrap d-flex align-items-center">
                                                                                                        <div>
                                                                                                            <div class="sppb-article-introtext">
                                                                                                                <?=$news[2]?>
                                                                                                            </div>
                                                                                                            <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                                                <div class="sppb-article-meta">
                                                                                                                    <span class="sppb-meta-date"
                                                                                                                          itemprop="datePublished"><?=$news[5]?></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a class="sppb-article-img-wrap"
                                                                                                           href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><img
                                                                                                                class="sppb-img-responsive"
                                                                                                                src="../img/<?=$news[3]?>"
                                                                                                                alt="<?=$news[1]?>"
                                                                                                                itemprop="thumbnailUrl"></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php
                                                                                        $news = mysqli_fetch_array($result_news);
                                                                                        $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                        $cat = mysqli_fetch_array($category);
                                                                                        ?>
                                                                                        <div class="swiper-slide  sppb-col-sm-0">
                                                                                            <div class="sppb-addon-article "
                                                                                                 style="">
                                                                                                <div class="sppb-article-info-wrap">
                                                                                                    <p class="sppb-meta-category">
                                                                                                        <a href="category.php?id=<?=$news[4]?>"
                                                                                                           itemprop="genre"><?=$cat[0]?></a>
                                                                                                    </p>
                                                                                                    <h3>
                                                                                                        <a href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><?=$news[1]?></a>
                                                                                                    </h3>
                                                                                                    <div class="sppb-article-info-intro-wrap d-flex align-items-center">
                                                                                                        <div>
                                                                                                            <div class="sppb-article-introtext">
                                                                                                                <?=$news[2]?>
                                                                                                            </div>
                                                                                                            <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                                                <div class="sppb-article-meta">
                                                                                                                    <span class="sppb-meta-date"
                                                                                                                          itemprop="datePublished"><?=$news[5]?></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a class="sppb-article-img-wrap"
                                                                                                           href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><img
                                                                                                                class="sppb-img-responsive"
                                                                                                                src="../img/<?=$news[3]?>"
                                                                                                                alt="<?=$news[1]?>"
                                                                                                                itemprop="thumbnailUrl"></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php
                                                                                        $news = mysqli_fetch_array($result_news);
                                                                                        $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                        $cat = mysqli_fetch_array($category);
                                                                                        ?>
                                                                                        <div class="swiper-slide  sppb-col-sm-0">
                                                                                            <div class="sppb-addon-article "
                                                                                                 style="">
                                                                                                <div class="sppb-article-info-wrap">
                                                                                                    <p class="sppb-meta-category">
                                                                                                        <a href="category.php?id=<?=$news[4]?>"
                                                                                                           itemprop="genre"><?=$cat[0]?></a>
                                                                                                    </p>
                                                                                                    <h3>
                                                                                                        <a href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><?=$news[1]?></a>
                                                                                                    </h3>
                                                                                                    <div class="sppb-article-info-intro-wrap d-flex align-items-center">
                                                                                                        <div>
                                                                                                            <div class="sppb-article-introtext">
                                                                                                                <?=$news[2]?>
                                                                                                            </div>
                                                                                                            <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                                                <div class="sppb-article-meta">
                                                                                                                    <span class="sppb-meta-date"
                                                                                                                          itemprop="datePublished"><?=$news[5]?></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a class="sppb-article-img-wrap"
                                                                                                           href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><img
                                                                                                                class="sppb-img-responsive"
                                                                                                                src="../img/<?=$news[3]?>"
                                                                                                                alt="<?=$news[1]?>"
                                                                                                                itemprop="thumbnailUrl"></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php
                                                                                        $news = mysqli_fetch_array($result_news);
                                                                                        $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                        $cat = mysqli_fetch_array($category);
                                                                                        ?>
                                                                                        <div class="swiper-slide  sppb-col-sm-0">
                                                                                            <div class="sppb-addon-article "
                                                                                                 style="">
                                                                                                <div class="sppb-article-info-wrap">
                                                                                                    <p class="sppb-meta-category">
                                                                                                        <a href="category.php?id=<?=$news[4]?>"
                                                                                                           itemprop="genre"><?=$cat[0]?></a>
                                                                                                    </p>
                                                                                                    <h3>
                                                                                                        <a href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><?=$news[1]?></a>
                                                                                                    </h3>
                                                                                                    <div class="sppb-article-info-intro-wrap d-flex align-items-center">
                                                                                                        <div>
                                                                                                            <div class="sppb-article-introtext">
                                                                                                                <?=$news[2]?>
                                                                                                            </div>
                                                                                                            <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                                                <div class="sppb-article-meta">
                                                                                                                    <span class="sppb-meta-date"
                                                                                                                          itemprop="datePublished"><?=$news[5]?></span>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <a class="sppb-article-img-wrap"
                                                                                                           href="view_news.php?id=<?=$news[0]?>&category=<?=$news[4]?>"
                                                                                                           itemprop="url"><img
                                                                                                                class="sppb-img-responsive"
                                                                                                                src="../img/<?=$news[3]?>"
                                                                                                                alt="<?=$news[1]?>"
                                                                                                                itemprop="thumbnailUrl"></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="thumb-slider-nav swiper-button-next"></div>
                                                                                    <div class="thumb-slider-nav swiper-button-prev"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sppb-col-md-3" id="column-wrap-id-1573711718215">
                                                <div id="column-id-1573711718215" class="sppb-column">
                                                    <div class="sppb-column-addons president" >
                                                        <div id="section-id-1574157062618"
                                                             class="sppb-section newsberg-card">
                                                            <div class="sppb-container-inner">
                                                                <div class="sppb-row">
                                                                    <div class="sppb-col-md-12"
                                                                         id="column-wrap-id-1574157062619">
                                                                        <div id="column-id-1574157062619"
                                                                             class="sppb-column">
                                                                            <div class="sppb-column-addons" style="">
                                                                                <div id="sppb-addon-wrapper-1573712171080"
                                                                                     class="sppb-addon-wrapper">
                                                                                    <div id="sppb-addon-1573712171080"
                                                                                         class="clearfix ">
                                                                                        <div class="sppb-addon sppb-addon-header sppb-text-left">
                                                                                            <h2 class="sppb-addon-title">
                                                                                                President of the Republic of Tajikistan
                                                                                            </h2></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="sppb-addon-wrapper-1574765554041"
                                                                                     class="sppb-addon-wrapper">
                                                                                    <div id="sppb-addon-1574765554041" class="clearfix ">
                                                                                        <div class="sppb-addon sppb-addon-module home-ad-banner">
                                                                                            <div class="sppb-addon-content">
                                                                                                <div class="bannergroup">
                                                                                                    <div class="banneritem">
                                                                                                        <a href="http://www.president.tj/"
                                                                                                           target="_blank"
<!--                                                                                                           rel="noopener noreferrer"-->
                                                                                                           <title="President of the Republic of Tajikistan">
                                                                                                            <img src="../img/president.jpg"
                                                                                                                 alt="president.jpg" style="border: none;"/>
                                                                                                        </a>
                                                                                                        <div class="clr"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="section-id-1574157062618"
                                                             class="sppb-section newsberg-card who_is">
                                                            <div class="sppb-container-inner">
                                                                <div class="sppb-row">
                                                                    <div class="sppb-col-md-12"
                                                                         id="column-wrap-id-1574157062619">
                                                                        <div id="column-id-1574157062619"
                                                                             class="sppb-column">
                                                                            <div class="sppb-column-addons">
                                                                                <div id="sppb-addon-wrapper-1573712171080"
                                                                                     class="sppb-addon-wrapper">
                                                                                    <div id="sppb-addon-1573712171080"
                                                                                         class="clearfix ">
                                                                                        <div class="sppb-addon sppb-addon-header sppb-text-left">
                                                                                            <h2 class="sppb-addon-title">
                                                                                                Who what?</h2></div>
                                                                                    </div>
                                                                                </div>

                                                                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                                                    <div class="carousel-inner">
                                                                                        <?php
                                                                                        $result = $dbOperation->getWhoIs('en');
                                                                                        $who_is = mysqli_fetch_array($result)
                                                                                        ?>
                                                                                        <div class="carousel-item active">
                                                                                            <img src="../img/<?=$who_is[3]?>" alt="<?=$who_is[1]?>" style="width:100%;">
                                                                                            <div class="carousel-caption d-none d-md-block" style="margin-bottom:  0px; padding-bottom: 0px;">
                                                                                                <h2 class="display-4" style="margin-bottom:  0px;font-size: 18px;"><?=$who_is[1]?></h2>
                                                                                                <p class="lead" style="margin-bottom:  0px; font-size: 14px;"><?=$who_is[2]?></p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php if(mysqli_num_rows($result)>0) {
                                                                                        while ($who_is = mysqli_fetch_array($result)) {
                                                                                            ?>
                                                                                            <div class="carousel-item">
                                                                                                <img
                                                                                                    src="../img/<?= $who_is[3] ?>"
                                                                                                    alt="<?= $who_is[1] ?>"
                                                                                                    style="width:100%;">
                                                                                                <div
                                                                                                        class="carousel-caption d-none d-md-block"
                                                                                                    style="margin-bottom:  0px; padding-bottom: 0px;">
                                                                                                    <h2 class="display-4"
                                                                                                        style="margin-bottom:  0px;font-size: 18px;"><?= $who_is[1] ?></h2>
                                                                                                    <p class="lead"
                                                                                                       style="margin-bottom:  0px; font-size: 14px;"><?= $who_is[2] ?></p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <?php
                                                                                        }}?>

                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section id="section-id-1574064817276" class="sppb-section">
                                    <div class="sppb-row-container">
                                        <div class="sppb-row">
                                            <div class="sppb-col-md-9" id="column-wrap-id-1574064817275">
                                                <div id="column-id-1574064817275" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-wrapper-1573711718259"
                                                             class="sppb-addon-wrapper">
                                                            <div id="sppb-addon-1573711718259" class="clearfix ">
                                                                <div class="sppb-addon sppb-addon-header heading-arrow sppb-text-left">
                                                                    <h2 class="sppb-addon-title">News</h2></div>
                                                            </div>
                                                        </div>
                                                        <div id="sppb-addon-wrapper-1574765774388"
                                                             class="sppb-addon-wrapper">
                                                            <div id="sppb-addon-1574765774388" class="clearfix ">
                                                                <div class="sppb-addon sppb-addon-articles-layout layout-liberica  ">
                                                                    <div class="sppb-addon-content">
                                                                        <div class="sppb-row">
                                                                            <div class="leading-item  sppb-col-sm-12">

                                                                                <?php
                                                                                $news = mysqli_fetch_array($result_news);
                                                                                $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                $cat = mysqli_fetch_array($category);
                                                                                ?>
                                                                                <div class="sppb-addon-article "
                                                                                     style="">
                                                                                    <div class="bg-img-wrapper"
                                                                                         style="background-image: url(../img/<?=$news[3]?>);"></div>
                                                                                    <div class="sppb-article-info-wrap">
                                                                                        <p class="sppb-meta-category"><a
                                                                                                    href="index.php/business-blog.html"
                                                                                                    itemprop="genre"><?=$cat[0]?></a>
                                                                                        </p>
                                                                                        <h3>
                                                                                            <a href="index.php/business-blog/what-sick-desperation-in-your-laugh-we-have.html"
                                                                                               itemprop="url"><?=$news[1]?></a></h3>
                                                                                        <div class="sppb-article-introtext">
                                                                                            <?=$news[2]?>
                                                                                        </div>
                                                                                        <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                            <div class="sppb-article-meta">
                                                                                                <span class="sppb-meta-date"
                                                                                                      itemprop="datePublished"><?=$news[5]?></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sppb-row">
                                                                                <div class="sppb-col-sm-8 subleading-items">
                                                                                    <div>
                                                                                        <?php
                                                                                        $news = mysqli_fetch_array($result_news);
                                                                                        $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                        $cat = mysqli_fetch_array($category);
                                                                                        ?>
                                                                                        <div class="subleading-item  sppb-col-sm-12">
                                                                                            <div class="sppb-addon-article "
                                                                                                 style=""><a
                                                                                                        class="sppb-article-img-wrap"
                                                                                                        href="index.php/entertainment/what-sick-desperation-in-your-laugh-we-have.html"
                                                                                                        itemprop="url"><img
                                                                                                            class="sppb-img-responsive"
                                                                                                            src="../img/<?=$news[3]?>"
                                                                                                            alt="What sick desperation in your laugh? We have"
                                                                                                            itemprop="thumbnailUrl"></a>
                                                                                                <div class="sppb-article-info-wrap">
                                                                                                    <p class="sppb-meta-category">
                                                                                                        <a href="index.php/entertainment.html"
                                                                                                           itemprop="genre"><?=$cat[0]?></a>
                                                                                                    </p>
                                                                                                    <h3>
                                                                                                        <a href="index.php/entertainment/what-sick-desperation-in-your-laugh-we-have.html"
                                                                                                           itemprop="url"><?=$news[1]?></a>
                                                                                                    </h3>
                                                                                                    <div class="sppb-article-introtext">
                                                                                                        <?=$news[2]?>
                                                                                                    </div>
                                                                                                    <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                                        <div class="sppb-article-meta">
                                                                                                            <span class="sppb-meta-date"
                                                                                                                  itemprop="datePublished"><?=$news[5]?></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php
                                                                                        $news = mysqli_fetch_array($result_news);
                                                                                        $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                        $cat = mysqli_fetch_array($category);
                                                                                        ?>
                                                                                        <div class="subleading-item  sppb-col-sm-12">
                                                                                            <div class="sppb-addon-article "
                                                                                                 style=""><a
                                                                                                        class="sppb-article-img-wrap"
                                                                                                        href="index.php/entertainment/what-sick-desperation-in-your-laugh-we-have.html"
                                                                                                        itemprop="url"><img
                                                                                                            class="sppb-img-responsive"
                                                                                                            src="../img/<?=$news[3]?>"
                                                                                                            alt="What sick desperation in your laugh? We have"
                                                                                                            itemprop="thumbnailUrl"></a>
                                                                                                <div class="sppb-article-info-wrap">
                                                                                                    <p class="sppb-meta-category">
                                                                                                        <a href="index.php/entertainment.html"
                                                                                                           itemprop="genre"><?=$cat[0]?></a>
                                                                                                    </p>
                                                                                                    <h3>
                                                                                                        <a href="index.php/entertainment/what-sick-desperation-in-your-laugh-we-have.html"
                                                                                                           itemprop="url"><?=$news[1]?></a>
                                                                                                    </h3>
                                                                                                    <div class="sppb-article-introtext">
                                                                                                        <?=$news[2]?>
                                                                                                    </div>
                                                                                                    <div class="sppb-article-spbookmark-wrap d-flex">
                                                                                                        <div class="sppb-article-meta">
                                                                                                            <span class="sppb-meta-date"
                                                                                                                  itemprop="datePublished"><?=$news[5]?></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="sppb-col-sm-4 intro-items"
                                                                                     has-scrollbar>

                                                                                    <?php
                                                                                    $news = mysqli_fetch_array($result_news);
                                                                                    $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                    $cat = mysqli_fetch_array($category);
                                                                                    ?>
                                                                                    <div class="intro-item  sppb-col-sm-12">
                                                                                        <div class="sppb-addon-article "
                                                                                             style="">
                                                                                            <div class="sppb-article-info-wrap">
                                                                                                <p class="sppb-meta-category">
                                                                                                    <a href="index.php/sports.html"
                                                                                                       itemprop="genre"><?=$cat[0]?></a>
                                                                                                </p>
                                                                                                <h3>
                                                                                                    <a href="index.php/sports/what-sick-desperation-in-your-laugh-we-have.html">
                                                                                                       <?=$news[1]?></a></h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <?php
                                                                                    $news = mysqli_fetch_array($result_news);
                                                                                    $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                    $cat = mysqli_fetch_array($category);
                                                                                    ?>
                                                                                    <div class="intro-item  sppb-col-sm-12">
                                                                                        <div class="sppb-addon-article "
                                                                                             style="">
                                                                                            <div class="sppb-article-info-wrap">
                                                                                                <p class="sppb-meta-category">
                                                                                                    <a href="index.php/sports.html"
                                                                                                       itemprop="genre"><?=$cat[0]?></a>
                                                                                                </p>
                                                                                                <h3>
                                                                                                    <a href="index.php/sports/what-sick-desperation-in-your-laugh-we-have.html">
                                                                                                        <?=$news[1]?></a></h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <?php
                                                                                    $news = mysqli_fetch_array($result_news);
                                                                                    $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                    $cat = mysqli_fetch_array($category);
                                                                                    ?>
                                                                                    <div class="intro-item  sppb-col-sm-12">
                                                                                        <div class="sppb-addon-article "
                                                                                             style="">
                                                                                            <div class="sppb-article-info-wrap">
                                                                                                <p class="sppb-meta-category">
                                                                                                    <a href="index.php/sports.html"
                                                                                                       itemprop="genre"><?=$cat[0]?></a>
                                                                                                </p>
                                                                                                <h3>
                                                                                                    <a href="index.php/sports/what-sick-desperation-in-your-laugh-we-have.html">
                                                                                                        <?=$news[1]?></a></h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <?php
                                                                                    $news = mysqli_fetch_array($result_news);
                                                                                    $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                    $cat = mysqli_fetch_array($category);
                                                                                    ?>
                                                                                    <div class="intro-item  sppb-col-sm-12">
                                                                                        <div class="sppb-addon-article "
                                                                                             style="">
                                                                                            <div class="sppb-article-info-wrap">
                                                                                                <p class="sppb-meta-category">
                                                                                                    <a href="index.php/sports.html"
                                                                                                       itemprop="genre"><?=$cat[0]?></a>
                                                                                                </p>
                                                                                                <h3>
                                                                                                    <a href="index.php/sports/what-sick-desperation-in-your-laugh-we-have.html">
                                                                                                        <?=$news[1]?></a></h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <?php
                                                                                    $news = mysqli_fetch_array($result_news);
                                                                                    $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                    $cat = mysqli_fetch_array($category);
                                                                                    ?>
                                                                                    <div class="intro-item  sppb-col-sm-12">
                                                                                        <div class="sppb-addon-article "
                                                                                             style="">
                                                                                            <div class="sppb-article-info-wrap">
                                                                                                <p class="sppb-meta-category">
                                                                                                    <a href="index.php/sports.html"
                                                                                                       itemprop="genre"><?=$cat[0]?></a>
                                                                                                </p>
                                                                                                <h3>
                                                                                                    <a href="index.php/sports/what-sick-desperation-in-your-laugh-we-have.html">
                                                                                                        <?=$news[1]?></a></h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <?php
                                                                                    $news = mysqli_fetch_array($result_news);
                                                                                    $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                    $cat = mysqli_fetch_array($category);
                                                                                    ?>
                                                                                    <div class="intro-item  sppb-col-sm-12">
                                                                                        <div class="sppb-addon-article "
                                                                                             style="">
                                                                                            <div class="sppb-article-info-wrap">
                                                                                                <p class="sppb-meta-category">
                                                                                                    <a href="index.php/sports.html"
                                                                                                       itemprop="genre"><?=$cat[0]?></a>
                                                                                                </p>
                                                                                                <h3>
                                                                                                    <a href="index.php/sports/what-sick-desperation-in-your-laugh-we-have.html">
                                                                                                        <?=$news[1]?></a></h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <?php
                                                                                    $news = mysqli_fetch_array($result_news);
                                                                                    $category = $dbOperation->getCategoryByID($news[4],'en');
                                                                                    $cat = mysqli_fetch_array($category);
                                                                                    Opinions        ?>
                                                                                    <div class="intro-item  sppb-col-sm-12">
                                                                                        <div class="sppb-addon-article "
                                                                                             style="">
                                                                                            <div class="sppb-article-info-wrap">
                                                                                                <p class="sppb-meta-category">
                                                                                                    <a href="index.php/sports.html"
                                                                                                       itemprop="genre"><?=$cat[0]?></a>
                                                                                                </p>
                                                                                                <h3>
                                                                                                    <a href="index.php/sports/what-sick-desperation-in-your-laugh-we-have.html">
                                                                                                        <?=$news[1]?></a></h3>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="sppb-col-md-3" id="column-wrap-id-1573711718215">
                                                <div id="column-id-1573711718215" class="sppb-column">
                                                    <div class="sppb-column-addons visitors">
                                                        <div id="section-id-1574157062618"
                                                             class="sppb-section newsberg-card">
                                                            <div class="sppb-container-inner">
                                                                <div class="sppb-row">
                                                                    <div class="sppb-col-md-12"
                                                                         id="column-wrap-id-1574157062619">
                                                                        <div id="column-id-1574157062619"
                                                                             class="sppb-column">
                                                                            <div class="sppb-column-addons">
                                                                                <div id="sppb-addon-wrapper-1573712171080"
                                                                                     class="sppb-addon-wrapper">
                                                                                    <div id="sppb-addon-1573712171080"
                                                                                         class="clearfix ">
                                                                                        <div class="sppb-addon sppb-addon-header sppb-text-left">
                                                                                            <h2 class="sppb-addon-title">
                                                                                                Exchange Rates</h2></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="sppb-addon-wrapper-1574765554041"
                                                                                     class="sppb-addon-wrapper">
                                                                                    <div id="sppb-addon-1574765554041" class="clearfix ">
                                                                                        <div class="sppb-addon sppb-addon-module home-ad-banner">
                                                                                            <div class="sppb-addon-content">
                                                                                                <div class="bannergroup">
                                                                                                    <div class="banneritem">
                                                                                                        <!--Currency Converter widget by FreeCurrencyRates.com -->

                                                                                                        <div id='gcw_mainFa5IhQ87T' class='gcw_mainFa5IhQ87T'></div>
                                                                                                        <script>function reloadFa5IhQ87T(){ var sc = document.getElementById('scFa5IhQ87T');if (sc) sc.parentNode.removeChild(sc);sc = document.createElement('script');sc.type = 'text/javascript';sc.charset = 'UTF-8';sc.async = true;sc.id='scFa5IhQ87T';sc.src = 'https://freecurrencyrates.com//widget-vertical-editable?iso=TJS-USD-RUB-EUR-UZS-GBP-CNY&df=1&p=Fa5IhQ87T&v=fits&source=fcr&width=225&width_title=0&firstrowvalue=1.00&thm=A6C9E2,FCFDFD,4297D7,5C9CCC,FFFFFF,C5DBEC,FCFDFD,2E6E9E,000000&title=%20&tzo=-300';var div = document.getElementById('gcw_mainFa5IhQ87T');div.parentNode.insertBefore(sc, div);} reloadFa5IhQ87T(); </script>

                                                                                                        <div class="clr"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="section-id-1574157062618"
                                                             class="sppb-section newsberg-card">
                                                            <div class="sppb-container-inner">
                                                                <div class="sppb-row">
                                                                    <div class="sppb-col-md-12"
                                                                         id="column-wrap-id-1574157062619">
                                                                        <div id="column-id-1574157062619"
                                                                             class="sppb-column">
                                                                            <div class="sppb-column-addons">
                                                                                <div id="sppb-addon-wrapper-1573712171080"
                                                                                     class="sppb-addon-wrapper">
                                                                                    <div id="sppb-addon-1573712171080"
                                                                                         class="clearfix ">
                                                                                        <div class="sppb-addon sppb-addon-header sppb-text-left">
                                                                                            <h2 class="sppb-addon-title">
                                                                                                Visitors</h2></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="sppb-addon-wrapper-1574765554041"
                                                                                     class="sppb-addon-wrapper">
                                                                                    <div id="sppb-addon-1574765554041" class="clearfix ">
                                                                                        <div class="sppb-addon sppb-addon-module">
                                                                                            <div class="sppb-addon-content">


                                                                                                        <?php

                                                                                                        $result = $dbOperation->getTodayStatistic();
                                                                                                        $today = mysqli_fetch_array($result);
                                                                                                        $result = $dbOperation->getWEEKStatistic();
                                                                                                        $week = mysqli_fetch_array($result);
                                                                                                        $result = $dbOperation->getMONTHStatistic();
                                                                                                        $month = mysqli_fetch_array($result);
                                                                                                        $result = $dbOperation->getYearStatistic();
                                                                                                        $year = mysqli_fetch_array($result);
                                                                                                        $result = $dbOperation->getAllStatistic();
                                                                                                        $all = mysqli_fetch_array($result);
                                                                                                        echo "<ul class=\"categories-module mod-list\" >
                                                                                                    <li>
                                                                                                        <h4>
                                                                                                            <i class=\"fa fa-user-circle\"></i> Today: $today[0]
                                                                                                        </h4>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <h4>
                                                                                                            <i class=\"fa fa-user-circle\"></i> This week: $week[0]
                                                                                                        </h4>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <h4>
                                                                                                            <i class=\"fa fa-user-circle\"></i> This month: $month[0]
                                                                                                        </h4>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <h4>
                                                                                                            <i class=\"fa fa-user-circle\"></i> This year: $year[0]
                                                                                                        </h4>
                                                                                                    </li>
                                                                                                    <li>
                                                                                                        <h4>
                                                                                                            <i class=\"fa fa-user-circle\"></i> All: $all[0]
                                                                                                        </h4>
                                                                                                    </li>
                                                                                                </ul>";
                                                                                                        ?>

                                                                                                        <div class="clr"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>








                                        </div>
                                    </div>
                                </section>
                                <?php
                                require_once ('include/video.php');
                                ?>
                                <section id="section-id-1574849226297" class="sppb-section">
                                    <div class="sppb-row-container">
                                        <div class="sppb-row">
                                            <?php
                                            require_once ('include/gallery.php');
                                            ?>
                                            <div class="sppb-col-md-3" id="column-wrap-id-1574849226298">
                                                <div id="column-id-1574849226298" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-wrapper-1574849903522"
                                                             class="sppb-addon-wrapper">
                                                            <div id="sppb-addon-1574849903522" class="clearfix ">
                                                                <div class="sppb-addon sppb-addon-module ">
                                                                    <div class="sppb-addon-content">
                                                                        <div class="mod-sppagebuilder  sp-page-builder"
                                                                             data-module_id="124">
                                                                            <div class="page-content">
                                                                                <div id="section-id-1574411095389"
                                                                                     class="sppb-section">
                                                                                    <div class="sppb-container-inner">
                                                                                        <div class="sppb-row">
                                                                                            <div class="sppb-col-md-12"
                                                                                                 id="column-wrap-id-1574411095391">
                                                                                                <div id="column-id-1574411095391"
                                                                                                     class="sppb-column">
                                                                                                    <div class="sppb-column-addons">
                                                                                                        <div id="section-id-1574411095392"
                                                                                                             class="sppb-section newsberg-card">
                                                                                                            <div class="sppb-container-inner">
                                                                                                                <div class="sppb-row">
                                                                                                                    <div class="sppb-col-md-12"
                                                                                                                         id="column-wrap-id-1574411095393">
                                                                                                                        <div id="column-id-1574411095393"
                                                                                                                             class="sppb-column">
                                                                                                                            <div class="sppb-column-addons">
                                                                                                                                <div id="sppb-addon-wrapper-1574411095394"
                                                                                                                                     class="sppb-addon-wrapper">
                                                                                                                                    <div id="sppb-addon-1574411095394"
                                                                                                                                         class="clearfix ">
                                                                                                                                        <div class="sppb-addon sppb-addon-header sppb-text-left">
                                                                                                                                            <h2 class="sppb-addon-title">
                                                                                                                                                Structural units
                                                                                                                                            </h2>
                                                                                                                                        </div>
                                                                                                                                        <style type="text/css">#sppb-addon-1574411095394 {
                                                                                                                                                box-shadow: 0 0 0 0 #ffffff;
                                                                                                                                            }

                                                                                                                                            #sppb-addon-1574411095394 .sppb-addon-title {
                                                                                                                                                font-size: 27px;
                                                                                                                                                line-height: 27px;
                                                                                                                                                line-height: 38px;
                                                                                                                                            }

                                                                                                                                            @media (min-width: 768px) and (max-width: 991px) {
                                                                                                                                                #sppb-addon-1574411095394 {
                                                                                                                                                }
                                                                                                                                            }

                                                                                                                                            @media (max-width: 767px) {
                                                                                                                                                #sppb-addon-1574411095394 {
                                                                                                                                                }

                                                                                                                                                #sppb-addon-1574411095394 .sppb-addon-title {
                                                                                                                                                    font-size: 20px;
                                                                                                                                                    line-height: 20px;
                                                                                                                                                    line-height: 24px;
                                                                                                                                                }
                                                                                                                                            }</style>
                                                                                                                                        <style type="text/css">#sppb-addon-1574411095394 h2.sppb-addon-title {
                                                                                                                                                margin: 10px 0px 0px 0px;
                                                                                                                                                text-transform: none;
                                                                                                                                            }

                                                                                                                                            @media (max-width: 767px) {
                                                                                                                                                #sppb-addon-1574411095394 h2.sppb-addon-title {
                                                                                                                                                    margin: 0px 0px 5px 0px;
                                                                                                                                                }
                                                                                                                                            }</style>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div id="sppb-addon-wrapper-1574411095398"
                                                                                                                                     class="sppb-addon-wrapper">
                                                                                                                                    <div id="sppb-addon-1574411095398"
                                                                                                                                         class="clearfix ">
                                                                                                                                        <div class="sppb-addon sppb-addon-module ">
                                                                                                                                            <div class="sppb-addon-content">
                                                                                                                                                <ul class="categories-module mod-list" >
                                                                                                                                                    <li>
                                                                                                                                                        <h4 style="font-size: 10pt;">
                                                                                                                                                            <a href="index.php/categories/explore/today-s-issue.html">
                                                                                                                                                                Assembly of People's Deputies </a>
                                                                                                                                                        </h4>
                                                                                                                                                    </li>
                                                                                                                                                    <li>
                                                                                                                                                        <h4 style="font-size: 10pt;">
                                                                                                                                                            <a href="index.php/categories/explore/good-weekend.html">
                                                                                                                                                                Executive agency</a>
                                                                                                                                                        </h4>
                                                                                                                                                    </li>
                                                                                                                                                    <li>
                                                                                                                                                        <h4 style="font-size: 10pt;">
                                                                                                                                                            <a href="index.php/categories/explore/editorial.html">
                                                                                                                                                                Facilities </a>
                                                                                                                                                        </h4>
                                                                                                                                                    </li>
                                                                                                                                                    <li>
                                                                                                                                                        <h4 style="font-size: 10pt;">
                                                                                                                                                            <a href="index.php/categories/explore/today-s-cartoon.html">
                                                                                                                                                                Suburban and rural jamoats</a>
                                                                                                                                                        </h4>
                                                                                                                                                    </li>
                                                                                                                                                    <li>
                                                                                                                                                        <h4  style="font-size: 10pt;">
                                                                                                                                                            <a href="index.php/categories/explore/today-s-weather.html">
                                                                                                                                                                Industries  </a>
                                                                                                                                                        </h4>
                                                                                                                                                    </li>
                                                                                                                                                </ul>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                        <style type="text/css">#sppb-addon-1574411095398 {
                                                                                                                                                box-shadow: 0 0 0 0 #ffffff;
                                                                                                                                            }

                                                                                                                                            @media (min-width: 768px) and (max-width: 991px) {
                                                                                                                                                #sppb-addon-1574411095398 {
                                                                                                                                                }
                                                                                                                                            }

                                                                                                                                            @media (max-width: 767px) {
                                                                                                                                                #sppb-addon-1574411095398 {
                                                                                                                                                }
                                                                                                                                            }</style>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <style type="text/css">.sp-page-builder .page-content #section-id-1574411095389 {
                                                                                                                padding-top: 0px;
                                                                                                                padding-right: 0px;
                                                                                                                padding-bottom: 0px;
                                                                                                                padding-left: 0px;
                                                                                                                margin-top: 0px;
                                                                                                                margin-right: 0px;
                                                                                                                margin-bottom: 0px;
                                                                                                                margin-left: 0px;
                                                                                                            }

                                                                                                            @media (max-width: 767px) {
                                                                                                                .sp-page-builder .page-content #section-id-1574411095389 {
                                                                                                                    padding-top: 17px;
                                                                                                                    padding-right: 0px;
                                                                                                                    padding-bottom: 0px;
                                                                                                                    padding-left: 0px;
                                                                                                                }
                                                                                                            }

                                                                                                            #column-id-1574411095391 {
                                                                                                                box-shadow: 0 0 0 0 #fff;
                                                                                                            }

                                                                                                            .sp-page-builder .page-content #section-id-1574411095392 {
                                                                                                                padding-top: 20px;
                                                                                                                padding-right: 20px;
                                                                                                                padding-bottom: 10px;
                                                                                                                padding-left: 20px;
                                                                                                                margin-top: 0px;
                                                                                                                margin-right: 0px;
                                                                                                                margin-bottom: 0px;
                                                                                                                margin-left: 0px;
                                                                                                                background-color: #fff;
                                                                                                            }

                                                                                                            #column-id-1574411095393 {
                                                                                                                box-shadow: 0 0 0 0 #fff;
                                                                                                            }</style>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <style type="text/css">.sp-page-builder .page-content #section-id-1574411095389 {
                                                                                        padding-top: 0px;
                                                                                        padding-right: 0px;
                                                                                        padding-bottom: 0px;
                                                                                        padding-left: 0px;
                                                                                        margin-top: 0px;
                                                                                        margin-right: 0px;
                                                                                        margin-bottom: 0px;
                                                                                        margin-left: 0px;
                                                                                    }

                                                                                    @media (max-width: 767px) {
                                                                                        .sp-page-builder .page-content #section-id-1574411095389 {
                                                                                            padding-top: 17px;
                                                                                            padding-right: 0px;
                                                                                            padding-bottom: 0px;
                                                                                            padding-left: 0px;
                                                                                        }
                                                                                    }

                                                                                    #column-id-1574411095391 {
                                                                                        box-shadow: 0 0 0 0 #fff;
                                                                                    }

                                                                                    .sp-page-builder .page-content #section-id-1574411095392 {
                                                                                        padding-top: 20px;
                                                                                        padding-right: 20px;
                                                                                        padding-bottom: 10px;
                                                                                        padding-left: 20px;
                                                                                        margin-top: 0px;
                                                                                        margin-right: 0px;
                                                                                        margin-bottom: 0px;
                                                                                        margin-left: 0px;
                                                                                        background-color: #fff;
                                                                                    }

                                                                                    #column-id-1574411095393 {
                                                                                        box-shadow: 0 0 0 0 #fff;
                                                                                    }</style>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </section>
        <?php
        require_once('include/footer.php');
        ?>
    </div>
</div>

</body>

</html>