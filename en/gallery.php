<?php
include("../management/sql/DBOperations.php");
$dbOperations = new DBOperations();
include("../counter.php");


?>
<!doctype html>
<html lang="ru" dir="ltr">

<!-- Mirrored from demo2.joomshaper.com/2019/newsberg/index.php/business-blog/for-you-what-being-clever-great-keep-it-up by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 09:15:58 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical"
          href="http://demo2.joomshaper.com/2019/newsberg/index.php/business-blog/for-you-what-being-clever-great-keep-it-up">
    <base/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="Kawshar Ahmed"/>
    <meta name="generator" content="Joomla! - Open Source Content Management"/>
    <title>Gallery</title>
    <link href="templates/newsberg/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
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
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../gallary/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../gallary/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="../gallary/css/style.css" rel="stylesheet">
    <style type="text/css">
        .sp-page-builder .page-content #section-id-1573800678987 {
            padding-top: 10px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
        }

        #column-id-1573800678986 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1573808445338 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573808445338 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573808445338 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573808445338 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1573804434946 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573804434946 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573804434946 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573804434946 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1573808545532 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573808545532 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1573808545532 .sppb-addon-title {
            color: #98979c;
            font-size: 14px;
            line-height: 14px;
            line-height: 25px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573808545532 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573808545532 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1573804435116 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573804435116 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573804435116 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573804435116 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1573804434694 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573804434694 {
            color: #6b6d83;
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1573804434694 .sppb-addon-title {
            margin-bottom: 20px;
            color: #020b1b;
            font-size: 34px;
            line-height: 34px;
            line-height: 45px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573804434694 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1573804434694 .sppb-addon-title {
                font-size: 25px;
                line-height: 25px;
                line-height: 30px;
                margin-bottom: 10px;
            }

            #sppb-addon-wrapper-1573804434694 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1573804434694 {
            font-size: 16px;
            line-height: 32px;
        }

        @media (max-width: 767px) {
            #sppb-addon-1573804434694 {
                font-size: 16px;
                line-height: 26px;
            }
        }

        #sppb-addon-wrapper-1573804435149 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573804435149 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573804435149 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573804435149 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1573804435127 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573804435127 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573804435127 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573804435127 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-wrapper-1573804435138 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1573804435138 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1573804435138 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1573804435138 {
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
        jQuery(function ($) {
            initTooltips();
            $("body").on("subform-row-add", initTooltips);

            function initTooltips(event, container) {
                container = container || document;
                $(container).find(".hasTooltip").tooltip({"html": true, "container": "body"});
            }
        });
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
        jQuery(document).ready(function ($) {
            var articleSlider = new Swiper("#sppb-addon-1575467171374 .intro-items-slider", {
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
            var articleSlider = new Swiper("#sppb-addon-1575467041907 .intro-items-slider", {
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
    </script>
</head>
<body class="site helix-ultimate com-content view-article layout-blog task-none itemid-115 en-gb ltr sticky-header layout-fluid offcanvas-init offcanvs-position-left">
<div class="body-wrapper">
    <div class="body-innerwrapper">
        <?php
        include("include/header.php");
        ?>
        <section id="sp-section-3">
            <div class="row">
                <div id="sp-title" class="col-lg-12 ">
                    <div class="sp-column ">
                        <div class="sp-page-title">
                            <div class="container" style="text-align: center;"><h2 class="sp-page-title-heading" >Галерея</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php

                                                        $limit = 9;
                                                        $targetpage = "gallery.php?ru";

                                                        $countGallery = $dbOperations->getCountGallery('en');
                                                        $row = mysqli_fetch_array($countGallery);
                                                        $total_pages = $row[0];
                                                        $stages = 3;
                                                        $page = ($_GET['page']);
                                                        if($page){
                                                            $start = ($page - 1) * $limit;
                                                        }else{
                                                            $start = 0;
                                                        }

                                                        $gallery = $dbOperations->getGalleryForPage('en',$start,$limit);
                                                        $gal = mysqli_fetch_array($gallery);


                                                        if ($page <= 0){$page = 1;}
                                                        $prev = $page - 1;
                                                        $next = $page + 1;
                                                        $lastpage = ceil($total_pages/$limit);
                                                        $LastPagem1 = $lastpage - 1;
                                                        ?>
                                                        <section id="sp-main-body">
                                                        <div class="container">
                                                            <div class="container-inner">
                                                                <div class="row">

                                                                                    <div class="col-sm-12">
                                                            <div class="article-info">



                                                <section id="portfolio" style="padding: 20px;">


                                                    <div class="row portfolio-container">
                                                       <?php
                                                            do{

                                                                echo
                                                                    '            
                                                                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                                                                    <div class="portfolio-wrap">
                                                                        <figure>
                                                                            <img src="../img/'.$gal[2].'" class="img-fluid" alt="" style="    max-width: 200%; height: auto;">
                                                                            <a href="../img/'.$gal[2].'" data-lightbox="portfolio" data-title="'.$gal[1].'" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                                    
                                                                        </figure>
                                                    
                                                                        <div class="portfolio-info" style="height: inherit; padding: 10px; margin-bottom: 1px;">
                                                                            <h4 style="line-height: normal;"><a href="#">'.$gal[1].'</a></h4>
                                                                            <p>'.$gal[3].'</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                ';}while ($gal = mysqli_fetch_array($gallery))
                                                        ?>

                                                    </div>

                                                </section>

<div class="col-12">
<div class="row">

    <?php

    $paginate = '';
    if($lastpage > 1)
    {




        $paginate .= "<div class='paginate col-12 col-md-12 col-lg-12' class='pager pagenav'>";
        // Previous
        if ($page > 1){
            $paginate.= "<a href='$targetpage&page=$prev'><</a>";
        }else{
            $paginate.= "<span class='disabled'><</span>";   }



        // Pages
        if ($lastpage < 7 + ($stages * 2))  // Not enough pages to breaking it up
        {
            for ($counter = 1; $counter <= $lastpage; $counter++)
            {
                if ($counter == $page){
                    $paginate.= "<span class='current'>$counter</span>";
                }else{
                    $paginate.= "<a href='$targetpage&page=$counter'>$counter</a>";}
            }
        }
        elseif($lastpage > 5 + ($stages * 2))   // Enough pages to hide a few?
        {
            // Beginning only hide later pages
            if($page < 1 + ($stages * 2))
            {
                for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
                {
                    if ($counter == $page){
                        $paginate.= "<span class='current'>$counter</span>";
                    }else{
                        $paginate.= "<a href='$targetpage&page=$counter'>$counter</a>";}
                }
                $paginate.= "<span id='sp'>...</span>";
                $paginate.= "<a href='$targetpage&page=$LastPagem1'>$LastPagem1</a>";
                $paginate.= "<a href='$targetpage&page=$lastpage'>$lastpage</a>";
            }
            // Middle hide some front and some back
            elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
            {
                $paginate.= "<a href='$targetpage&page=1'>1</a>";
                $paginate.= "<a href='$targetpage&page=2'>2</a>";
                $paginate.= "<span id='sp'>...</span>";
                for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
                {
                    if ($counter == $page){
                        $paginate.= "<span class='current'>$counter</span>";
                    }else{
                        $paginate.= "<a href='$targetpage&page=$counter'>$counter</a>";}
                }
                $paginate.= "<span id='sp'>...</span>";
                $paginate.= "<a href='$targetpage&page=$LastPagem1'>$LastPagem1</a>";
                $paginate.= "<a href='$targetpage&page=$lastpage'>$lastpage</a>";
            }
            // End only hide early pages
            else
            {
                $paginate.= "<a href='$targetpage&page=1'>1</a>";
                $paginate.= "<a href='$targetpage&page=2'>2</a>";
                $paginate.= "<span id='sp'>...</span>";
                for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
                {
                    if ($counter == $page){
                        $paginate.= "<span class='current'>$counter</span>";
                    }else{
                        $paginate.= "<a href='$targetpage&page=$counter'>$counter</a>";}
                }
            }
        }

                // Next
        if ($page < $counter - 1){
            $paginate.= "<a href='$targetpage&page=$next'>></a>";
        }else{
            $paginate.= "<span class='disabled'>></span>";
            }

        $paginate.= "</div>";


} // pagination
 echo $paginate;
    ?>
                                                            </div>
                                                                                    </div>
                                            </div></div></div></div></div></section>

        <?php
        include("include/footer.php");
        ?>
    </div>
</div>

</body>

<script src="../gallary/lib/lightbox/js/lightbox.min.js"></script>
<!-- Mirrored from demo2.joomshaper.com/2019/newsberg/index.php/business-blog/for-you-what-being-clever-great-keep-it-up by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Feb 2020 09:15:58 GMT -->
</html>