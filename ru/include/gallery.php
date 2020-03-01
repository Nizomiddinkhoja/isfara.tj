<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../gallary/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="../gallary/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
<link href="../gallary/css/style.css" rel="stylesheet">


<div class="sppb-col-md-9" id="column-wrap-id-1574849226296">
    <div id="sppb-addon-1574765723526" class="clearfix ">
        <div class="sppb-addon sppb-addon-header heading-arrow sppb-text-left">
            <h2 class="sppb-addon-title"><a href="./gallery.php?ru">Галерая</a> </h2></div>
    </div>
<section id="portfolio" style="padding: 20px;">


        <div class="row portfolio-container">
            <?php
            $k=0;
            $gallery = $dbOperation->getGallery('ru');
            if(mysqli_num_rows($gallery)> 0){
while (($gal = mysqli_fetch_array($gallery)) && $k!=9){

    echo
    '            
            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                <div class="portfolio-wrap">
                    <figure>
                        
                        <a href="../img/'.$gal[2].'" data-lightbox="portfolio" data-title="'.$gal[1].'" class="link-preview" style="left: calc(0% ); top: calc(0% ); visibility: inherit; border-radius: inherit; width: 100%; background: 0; */"><img src="../img/'.$gal[2].'" class="img-fluid" alt="" style="    max-width: 100%;  max-height: 900%; margin:0 auto;display: table; height: 700%;    max-height: 700%;"></a>

                    </figure>

                    <div class="portfolio-info" style="height: inherit; padding: 10px; margin-bottom: 1px;">
                        <h4 style="line-height: normal;"><a href="#">'.$gal[1].'</a></h4>
                        <p>'.$gal[3].'</p>
                    </div>
                </div>
            </div>
            ';
    $k++;}}
    ?>

        </div>

</section>
</div>

<script src="../gallary/lib/lightbox/js/lightbox.min.js"></script>