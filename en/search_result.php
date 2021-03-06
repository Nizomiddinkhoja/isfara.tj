<?php
include("../management/sql/DBOperations.php");
$dbOperations = new DBOperations();

if (isset($_POST["submit"])) {
    $searchText = $_POST["search_text"];

    $result = $dbOperations->search($searchText);


}
?>
<!doctype html>
<html lang="ru" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Результаты поиска</title>
    <link href="../img/favicon.ico" rel="shortcut icon"/>
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
            background-color: #000000;
        }
    </style>
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
        jQuery(window).on('load', function () {
            new JCaption('img.caption');
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
    </script>
</head>
<body class="site helix-ultimate com-content view-category layout-default task-none itemid-220 en-gb ltr sticky-header layout-fluid offcanvas-init offcanvs-position-left">
<div class="body-wrapper">
    <div class="body-innerwrapper">
        <?php
        include ("include/header.php");
        ?>
        <section id="sp-section-3">
            <div class="row">
                <div id="sp-title" class="col-lg-12 ">
                    <div class="sp-column "></div>
                </div>
            </div>
        </section>
        <section id="sp-main-body">
            <div class="container">
                <div class="container-inner">
                    <div class="row">
                        <main id="sp-component" class="col-lg-12 " role="main">
                            <div class="sp-column ">
                                <div id="system-message-container">
                                </div>
                                <div class="blog">
                                    <h3 class="newsberg-blog-title">Result</h3>
                                    <div class="items-row row-0 row clearfix">
                                        <?php
                                        while ($row = mysqli_fetch_array($result)) {

                                            switch ($row[0]){
                                                case "category":
                                                    $link = "/$row[4]/category.php?id=1";

                                                    break;
                                                case "news":
                                                    $category = mysqli_fetch_array($dbOperations->getCategoryID($row[1]));
                                                    $link = "/$row[4]/view_news.php?id=$row[1]&category=$category[0]";
                                                                    ?>

                                                    <div class="col-sm-4">
                                                        <article class="item column-1">
                                                            <div class="article-body">
                                                                <div class="article-header">
                                                                    <h2>
                                                                        <a href="<?=$link?>">
                                                                            <?=$row[2]?></a>
                                                                    </h2>
                                                                </div>
                                                                <div class="newsberg-article-content">
                                                                    <div class="newsberg-article-introtext">
                                                                        <p><?=$row[3]?></p>
                                                                        <div class="newsberg-article-introtext-bottom">
                                                                            <div class="article-info">
<!--                                                                                <img class="img-responsive author-img"-->
<!--                                                                                     src="../img/--><?//=$category[2]?><!--">-->
<!--                                                                                <span class="category-name"-->
<!--                                                                                      title="Категория: ">-->
<!--                                                                                        <a href="http://demo2.joomshaper.com/2019/newsberg/index.php/categories/newsberg/technology">Technology</a>-->
<!--                                                                                </span>-->
                                                                                <span class="published"
                                                                                      title="Опубликовано: <?=$category[1]?>">
                                                                                <time><?=$category[1]?></time>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="newsberg-article-image itemtype-standard">
                                                                        <a href="<?=$link?>">
                                                                            <div class="article-intro-image">
                                                                                <img src="../img/<?=$category[2]?>">
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>

                                                    </div>
                                                    <?php
                                                                    break;
                                            }
                                        }
                                        ?>
                                    </div>




<!--                                    <div class="pagination-wrapper">-->
<!--                                        <ul class="pagination">-->
<!--                                            <li class="page-item active"><a class="page-link">1</a></li>-->
<!--                                            <li class="page-item"><a class="page-link "-->
<!--                                                                     href="http://demo2.joomshaper.com/2019/newsberg/index.php/categories/newsberg/technology?start=10"-->
<!--                                                                     title="2">2</a></li>-->
<!--                                            <li class="page-item"><a class="page-link next"-->
<!--                                                                     href="http://demo2.joomshaper.com/2019/newsberg/index.php/categories/newsberg/technology?start=10"-->
<!--                                                                     title="Next">Next</a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include ("include/footer.php");
        ?>
    </div>
</div>

<div class="offcanvas-overlay"></div>
<div class="offcanvas-menu">
    <a href="#" class="close-offcanvas"><span class="fa fa-remove"></span></a>
    <div class="offcanvas-inner">
        <div class="sp-module ">
            <div class="sp-module-content">
                <ul class="menu">
                    <li class="item-101 menu-deeper menu-parent"><a
                                href="http://demo2.joomshaper.com/2019/newsberg/index.php">Home<span
                                    class="menu-toggler"></span></a>
                        <ul class="menu-child">
                            <li class="item-219"><a
                                        href="http://demo2.joomshaper.com/2019/newsberg/index.php/home/news-bulletin">News
                                    Bulletin</a></li>
                            <li class="item-245"><a href="http://demo2.joomshaper.com/2019/newsberg/index.php">Business
                                    Insight (Default)</a></li>
                        </ul>
                    </li>
                    <li class="item-115"><a href="http://demo2.joomshaper.com/2019/newsberg/index.php/business-blog">Business</a>
                    </li>
                    <li class="item-222"><a href="http://demo2.joomshaper.com/2019/newsberg/index.php/food">Food</a>
                    </li>
                    <li class="item-223"><a href="http://demo2.joomshaper.com/2019/newsberg/index.php/sports">Sports</a>
                    </li>
                    <li class="item-224"><a href="http://demo2.joomshaper.com/2019/newsberg/index.php/entertainment">Entertainment</a>
                    </li>
                    <li class="item-217"><a
                                href="http://demo2.joomshaper.com/2019/newsberg/index.php/authors">Authors</a></li>
                    <li class="item-121"><a href="#">Mega</a></li>
                    <li class="item-108 menu-deeper menu-parent"><a href="#">Pages<span class="menu-toggler"></span></a>
                        <ul class="menu-child">
                            <li class="item-218"><a
                                        href="http://demo2.joomshaper.com/2019/newsberg/index.php/pages/bookmarks">Bookmarks</a>
                            </li>
                            <li class="item-113"><a
                                        href="http://demo2.joomshaper.com/2019/newsberg/index.php/pages/contact">Contact</a>
                            </li>
                            <li class="item-109"><a
                                        href="http://demo2.joomshaper.com/2019/newsberg/index.php/pages/login">Login</a>
                            </li>
                            <li class="item-110"><a
                                        href="http://demo2.joomshaper.com/2019/newsberg/index.php/pages/registration">Registration</a>
                            </li>
                            <li class="item-111"><a
                                        href="http://demo2.joomshaper.com/2019/newsberg/index.php?Itemid=404">404</a>
                            </li>
                            <li class="item-112"><a href="http://demo2.joomshaper.com/2019/newsberg/?tmpl=comingsoon">Coming
                                    Soon</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<a href="#" class="sp-scroll-up" aria-label="Scroll Up"><span class="fa fa-chevron-up" aria-hidden="true"></span></a>
</body>
</html>