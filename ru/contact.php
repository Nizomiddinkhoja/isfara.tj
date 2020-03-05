<?php
include ("../management/sql/DBOperations.php");
$dbOperations = new DBOperations();
include("../counter.php");

if (isset($_POST["submit"])){

   $firstName = $_POST["first_name"];
   $lastName = $_POST["last_name"];
   $email = $_POST["email"];
   $phone = $_POST["phone"];
   $title = $_POST["title"];
   $message = $_POST["message"];

   if($dbOperations->addRequest($firstName, $lastName, $email, $phone, $title, $message)){
       $text = "Ваш запрос отправлен!";
   }

}
?>
<!doctype html>
<html lang="ru" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Электронная приемная - Официальный сайт исполнительный орган городского правительства Исфара</title>
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
        .sp-page-builder .page-content #section-id-1575282610866 {
            padding-top: 100px;
            padding-right: 0px;
            padding-bottom: 140px;
            padding-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            margin-left: 0px;
            background-color: #fff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .sp-page-builder .page-content #section-id-1575282610866 {
                padding-top: 50px;
                padding-right: 0px;
                padding-bottom: 50px;
                padding-left: 0px;
            }
        }

        @media (max-width: 767px) {
            .sp-page-builder .page-content #section-id-1575282610866 {
                padding-top: 20px;
                padding-right: 0px;
                padding-bottom: 20px;
                padding-left: 0px;
            }
        }

        #column-id-1575282610864 {
            border-width: 1px;
            border-color: #dee2e9;
            border-style: solid;
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-wrapper-1575964833010 {
            margin: -1px -1px 45px -1px;
        }

        #sppb-addon-1575964833010 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1575964833010 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1575964833010 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1575282768118 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1575282768118 .sppb-addon-title {
            font-size: 27px;
            line-height: 27px;
            line-height: 38px;
        }

        @media (max-width: 767px) {
            #sppb-addon-1575282768118 .sppb-addon-title {
                font-size: 22px;
                line-height: 22px;
                line-height: 30px;
            }
        }

        #sppb-addon-1575282768118 h2.sppb-addon-title {
            margin: 0px 0px 15px 0px;
            text-transform: none;
            padding: 0px 40px 0px 40px;
        }

        @media (max-width: 767px) {
            #sppb-addon-1575282768118 h2.sppb-addon-title {
                margin: 0px 0px 10px 0px;
                padding: 0px 15px 0px 15px;
            }
        }

        #sppb-addon-wrapper-1575282981869 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1575282981869 {
            color: #6b6d83;
            box-shadow: 0 0 0 0 #ffffff;
            padding: 0px 40px 0px 40px;
        }

        #sppb-addon-1575282981869 .sppb-addon-title {
            margin-bottom: 5px;
            color: #020b1b;
            font-size: 18px;
            line-height: 18px;
            line-height: 38px;
        }

        @media (max-width: 767px) {
            #sppb-addon-1575282981869 {
                padding-top: 0px;
                padding-right: 15px;
                padding-bottom: 0px;
                padding-left: 15px;
            }

            #sppb-addon-1575282981869 .sppb-addon-title {
                font-size: 18px;
                line-height: 18px;
                line-height: 30px;
            }

            #sppb-addon-wrapper-1575282981869 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1575282981869 {
            font-size: 16px;
            line-height: 30px;
        }

        #sppb-addon-wrapper-1575282610940 {
            margin: 0px 0px 50px 0px;
        }

        #sppb-addon-1575282610940 {
            color: #6b6d83;
            box-shadow: 0 0 0 0 #ffffff;
            padding: 0px 40px 0px 40px;
        }

        #sppb-addon-1575282610940 .sppb-addon-title {
            margin-bottom: 25px;
            color: #020b1b;
            font-size: 14px;
            line-height: 14px;
            line-height: 25px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1575282610940 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 30px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1575282610940 {
                padding-top: 0px;
                padding-right: 15px;
                padding-bottom: 0px;
                padding-left: 15px;
            }

            #sppb-addon-1575282610940 .sppb-addon-title {
                margin-bottom: 15px;
            }

            #sppb-addon-wrapper-1575282610940 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1575282610940 {
            font-size: 14px;
            line-height: 25px;
        }

        #column-id-1575282610865 {
            box-shadow: 0 0 0 0 #fff;
        }

        .sp-page-builder .page-content #section-id-1575961272860 {
            padding-top: 0px;
            padding-right: 120px;
            padding-bottom: 0px;
            padding-left: 120px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .sp-page-builder .page-content #section-id-1575961272860 {
                padding-top: 30px;
                padding-right: 0px;
                padding-bottom: 0px;
                padding-left: 0px;
            }
        }

        @media (max-width: 767px) {
            .sp-page-builder .page-content #section-id-1575961272860 {
                padding-top: 30px;
                padding-right: 0px;
                padding-bottom: 0px;
                padding-left: 0px;
            }
        }

        #column-id-1575961272861 {
            box-shadow: 0 0 0 0 #fff;
        }

        #sppb-addon-1575285582169 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        #sppb-addon-1575285582169 .sppb-addon-title {
            font-size: 27px;
            line-height: 27px;
            line-height: 38px;
        }

        @media (max-width: 767px) {
            #sppb-addon-1575285582169 .sppb-addon-title {
                font-size: 22px;
                line-height: 22px;
                line-height: 26px;
            }
        }

        #sppb-addon-1575285582169 h2.sppb-addon-title {
            margin: 0px 0px 20px 0px;
            text-transform: none;
        }

        #sppb-addon-wrapper-1575285752396 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1575285752396 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1575285752396 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1575285752396 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 15px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1575285752396 .sppb-btn {
            background-image: linear-gradient(100deg, #316bf3 1%, #2f25ec 108%);
        }

        #sppb-addon-1575285752396 .sppb-addon-content {
            margin: -5px;
        }

        #sppb-addon-1575285752396 .sppb-addon-content .sppb-btn {
            margin: 5px;
        }

        #sppb-addon-1575285752396 #btn-1575285752396.sppb-btn-custom {
            color: #fff;
            padding: 0px 9px 0px 9px;
            font-size: 12px;
        }

        #sppb-addon-1575285752396 #btn-1575285752397.sppb-btn-custom {
            color: #fff;
            padding: 0px 9px 0px 9px;
            font-size: 12px;
        }

        #sppb-addon-1575285752396 #btn-1575285752398.sppb-btn-custom {
            color: #fff;
            padding: 0px 9px 0px 9px;
            font-size: 12px;
        }

        #sppb-addon-wrapper-1575286568024 {
            margin: 0px 0px 20px 0px;
        }

        #sppb-addon-1575286568024 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1575286568024 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1575286568024 {
            font-size: 16px;
            line-height: 25px;
        }

        #sppb-addon-wrapper-1575286725030 {
            margin: 0px 0px 30px 0px;
        }

        #sppb-addon-1575286725030 {
            box-shadow: 0 0 0 0 #ffffff;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-wrapper-1575286725030 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 20px;
                margin-left: 0px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-wrapper-1575286725030 {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }
        }

        #sppb-addon-1575286725030 .sppb-form-group.sppb-form-builder-field-0 {
            width: 100%;
        }

        #sppb-addon-1575286725030 .sppb-form-group.sppb-form-builder-field-1 {
            width: 100%;
        }

        #sppb-addon-1575286725030 .sppb-form-group.sppb-form-builder-field-2 {
            width: 100%;
        }

        #sppb-addon-1575286725030 .sppb-addon-form-builder-form {
            margin-left: -15px;
            margin-right: -15px;
        }

        #sppb-addon-1575286725030 .sppb-form-check, #sppb-addon-1575286725030 .sppb-form-builder-btn {
            margin-left: 15px;
            margin-right: 15px;
        }

        #sppb-addon-1575286725030 .sppb-form-builder-recaptcha, #sppb-addon-1575286725030 .sppb-form-builder-invisible-recaptcha, #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group {
            padding-left: 15px;
            padding-right: 15px;
        }

        #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group {
            margin-bottom: 15px;
        }

        #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group select, #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group input:not([type="checkbox"]):not([type="radio"]) {
            color: #98979c;
            font-size: 14px;
            border-color: #d8d8d8;
            padding: 12px 20px 12px 20px;
            height: 50px;
            transition: .35s;
        }

        #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group textarea {
            color: #98979c;
            font-size: 14px;
            border-color: #d8d8d8;
            padding: 12px 20px 12px 20px;
            height: 160px;
            transition: .35s;
        }

        #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group input::placeholder, #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group textarea::placeholder {
            color: #98979c;
            opacity: 1;
            transition: .35s;
        }

        #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group label:not(.form-builder-radio-label):not(.form-builder-checkbox-label) {
            color: #020b1b;
            font-size: 18px;
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sppb-addon-1575286725030 .sppb-addon-form-builder-form {
                margin-left: -15px;
                margin-right: -15px;
            }

            #sppb-addon-1575286725030 .sppb-form-check, #sppb-addon-1575286725030 .sppb-form-builder-btn {
                margin-left: 15px;
                margin-right: 15px;
            }

            #sppb-addon-1575286725030 .sppb-form-builder-recaptcha, #sppb-addon-1575286725030 .sppb-form-builder-invisible-recaptcha, #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        @media (max-width: 767px) {
            #sppb-addon-1575286725030 .sppb-addon-form-builder-form {
                margin-left: -15px;
                margin-right: -15px;
            }

            #sppb-addon-1575286725030 .sppb-form-check, #sppb-addon-1575286725030 .sppb-form-builder-btn {
                margin-left: 15px;
                margin-right: 15px;
            }

            #sppb-addon-1575286725030 .sppb-form-builder-recaptcha, #sppb-addon-1575286725030 .sppb-form-builder-invisible-recaptcha, #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group {
                padding-left: 15px;
                padding-right: 15px;
            }

            #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group {
                margin-bottom: 10px;
            }

            #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group select, #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group input:not([type="checkbox"]):not([type="radio"]) {
                padding: 6px 10px 6px 10px;
                height: 40px;
            }

            #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group textarea {
                padding: 6px 10px 6px 10px;
                height: 140px;
            }

            #sppb-addon-1575286725030 .sppb-addon-form-builder-form .sppb-form-group label:not(.form-builder-radio-label):not(.form-builder-checkbox-label) {
                font-size: 16px;
                margin: px 0px 0px 0px;
            }
        }

        #sppb-addon-1575286725030 .sppb-form-builder-btn button {
            margin: 10px 0px 0px 0px;
        }

        #sppb-addon-1575286725030 #btn-1575286725030.sppb-btn-primary {
            letter-spacing: 0px;
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

    <script type="text/javascript">
        ;(function ($) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': Joomla.getOptions('csrf.token')
                }
            });
        })(jQuery);
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
</head>
<body class="site helix-ultimate com-sppagebuilder view-page layout-default task-none itemid-113 en-gb ltr sticky-header layout-fluid offcanvas-init offcanvs-position-left">
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
                            <div class="container"><h2 class="sp-page-title-heading" style="text-align: center;">Электронная приемная</h2></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="sp-main-body">
            <div class="row">
                <main id="sp-component" class="col-lg-12 " role="main">
                    <div class="sp-column ">
                        <div id="system-message-container">
                        </div>
                        <div id="sp-page-builder" class="sp-page-builder  page-64">
                            <div class="page-content">
                                <section id="section-id-1575282610866" class="sppb-section">
                                    <div class="sppb-row-container">
                                        <div class="sppb-row">
                                            <div class="sppb-col-md-6" id="column-wrap-id-1575282610864">
                                                <div id="column-id-1575282610864" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="sppb-addon-wrapper-1575964833010"
                                                             class="sppb-addon-wrapper">
                                                            <div id="sppb-addon-1575964833010" class="clearfix ">
                                                                <div class="sppb-addon sppb-addon-single-image sppb-text-center ">
                                                                    <div class="sppb-addon-content">
                                                                        <div class="sppb-addon-single-image-container">
                                                                            <img class="sppb-img-responsive"
                                                                                 src="../img/electronic_queue.png"
                                                                                 alt="Image" title=""></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="sppb-addon-wrapper-1575282768118"
                                                             class="sppb-addon-wrapper">
                                                            <div id="sppb-addon-1575282768118" class="clearfix ">
                                                                <div class="sppb-addon sppb-addon-header link-color sppb-text-left">
                                                                    <h2 class="sppb-addon-title"">Электронная приемная</h2></div>
                                                            </div>
                                                        </div>
                                                        <div id="sppb-addon-wrapper-1575282981869"
                                                             class="sppb-addon-wrapper">
                                                            <div id="sppb-addon-1575282981869" class="clearfix ">
                                                                <div class="sppb-addon sppb-addon-text-block  "><h3
                                                                            class="sppb-addon-title">Уважаемые граждане!</h3>
                                                                    <div class="sppb-addon-content">Вы можете отправить нам любые обращения, воспользовавшись формой.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sppb-col-md-6" id="column-wrap-id-1575282610865">
                                                <div id="column-id-1575282610865" class="sppb-column">
                                                    <div class="sppb-column-addons">
                                                        <div id="section-id-1575961272860" class="sppb-section">
                                                            <div class="sppb-container-inner">
                                                                <div class="sppb-row">
                                                                    <div class="sppb-col-md-12"
                                                                         id="column-wrap-id-1575961272861">
                                                                        <div id="column-id-1575961272861"
                                                                             class="sppb-column">
                                                                            <div class="sppb-column-addons">
                                                                                <div id="sppb-addon-wrapper-1575285582169"
                                                                                     class="sppb-addon-wrapper">
                                                                                    <div id="sppb-addon-1575285582169"
                                                                                         class="clearfix ">
                                                                                        <div class="sppb-addon sppb-addon-header link-color sppb-text-left">
                                                                                            <h2 class="sppb-addon-title">
                                                                                                <?=!empty($text)? $text: ""?></h2>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div id="sppb-addon-wrapper-1575286725030"
                                                                                     class="sppb-addon-wrapper">
                                                                                    <div id="sppb-addon-1575286725030"
                                                                                         class="clearfix ">
                                                                                        <div class="sppb-addon sppb-addon-form-builder">
                                                                                            <div class="sppb-addon-content">
                                                                                                <form class="" method="post">
                                                                                                    <div class="sppb-form-group sppb-form-builder-field-0">
                                                                                                        <label for="sppb-form-builder-field-0">Имя</label>
                                                                                                        <input
                                                                                                                type="text"
                                                                                                                id="sppb-form-builder-field-1"
                                                                                                                name="first_name"
                                                                                                                class="sppb-form-control"
                                                                                                                placeholder="Ваше имя"
                                                                                                                required><span
                                                                                                                class="sppb-form-builder-required">Заполните объязательные поля.</span>
                                                                                                    </div>
                                                                                                    <div class="sppb-form-group sppb-form-builder-field-0">
                                                                                                        <label for="sppb-form-builder-field-0">Фамилия</label>
                                                                                                        <input
                                                                                                                type="text"
                                                                                                                id="sppb-form-builder-field-1"
                                                                                                                name="last_name"
                                                                                                                class="sppb-form-control"
                                                                                                                placeholder="Ваша фамилия"
                                                                                                                required><span
                                                                                                                class="sppb-form-builder-required">Заполните объязательные поля.</span>
                                                                                                    </div>
                                                                                                    <div class="sppb-form-group sppb-form-builder-field-2">
                                                                                                        <label for="sppb-form-builder-field-2">Email</label><input
                                                                                                                type="email"
                                                                                                                id="sppb-form-builder-field-2"
                                                                                                                name="email"
                                                                                                                class="sppb-form-control"
                                                                                                                placeholder="Ваш email"
                                                                                                                required><span
                                                                                                                class="sppb-form-builder-required">Заполните объязательные поля.</span>
                                                                                                    </div>
                                                                                                    <div class="sppb-form-group sppb-form-builder-field-2">
                                                                                                        <label for="sppb-form-builder-field-2">Телефон</label><input
                                                                                                                type="text"
                                                                                                                id="sppb-form-builder-field-2"
                                                                                                                name="phone"
                                                                                                                class="sppb-form-control"
                                                                                                                placeholder="Номер вашего телефона"
                                                                                                                required><span
                                                                                                                class="sppb-form-builder-required">Заполните объязательные поля.</span>
                                                                                                    </div>
                                                                                                    <div class="sppb-form-group sppb-form-builder-field-3">
                                                                                                        <label for="sppb-form-builder-field-3">Тема</label><input
                                                                                                                name="title"
                                                                                                                id="sppb-form-builder-field-3"
                                                                                                                class="sppb-form-control not-resize"
                                                                                                                placeholder="Какой темы касается Ваше обращение?"
                                                                                                                required/><span
                                                                                                                class="sppb-form-builder-required">Какой темы касается Ваше обращение?</span>
                                                                                                    </div>
                                                                                                    <div class="sppb-form-group sppb-form-builder-field-3">
                                                                                                        <label for="sppb-form-builder-field-3">Сообщение</label><textarea
                                                                                                                name="message"
                                                                                                                id="sppb-form-builder-field-3"
                                                                                                                class="sppb-form-control not-resize"
                                                                                                                placeholder="Напишиите текст своего обращения в этом поле"
                                                                                                                required></textarea><span
                                                                                                                class="sppb-form-builder-required"></span>
                                                                                                    </div>
                                                                                                    <div class="sppb-form-builder-btn sppb-text-left ">
                                                                                                        <input  type="submit" name="submit" value="Отправить"/>
                                                                                                    </div>
                                                                                                </form>
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
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </section>
        <?php
        include("include/footer.php");
        ?>
    </div>
</div>

</html>