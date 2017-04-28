<!--======================================Footer===================================-->
<section id="page4">
    <?php
    if($english){
        $title = "Contact us";
        $subtitle = "Do you have any questions or are you looking to work with us?";
        $map_text = "Click here to open the map";
    }
    else{
        $title = "Kontakta oss";
        $subtitle = "Har du några frågor eller vill du arbeta med oss?";
        $map_text = "Klicka för att öppna kartan";
    }

    ?>
    <div class="container-fluid full-height">
        <div class="row full-height">
            <div class="col-lg-12 footer full-height">
                <div class="footer-triangle"> <img class="triangle col-lg-12" src="img/triangel.svg" alt="triangel"> </div>
                <div class="empty-5 hidden-xs hidden-sm"></div>
                <div class="footer-top fade-in">
                    <h1> <?php echo $title; ?> </h1>
                    <p> <?php echo $subtitle; ?></p>
                </div>
                <div class="empty-5 hidden-xs hidden-sm"></div>
                <div class = "footer-top-contact fade-in">
                    <div class = "footer-contact">
                        <p><strong><em>Jörgen Bogren</em></strong></p>
                        <p> +46 709170251</p>
                        <p>jorgen.bogren@klimator.se</p>
                    </div>
                    <div class = "footer-contact">
                        <p><strong><em>Torbjörn Gustavsson</em></strong></p>
                        <p> +46 709170252</p>
                        <p>torbjorn.gustavsson@klimator.se</p>
                    </div>
                    <div class = "footer-contact">
                        <p><strong>Chalmers Innovation Center</strong></p>
                        <p>Holtermansgatan 1A </p>
                        <p>411 29 Göteborg</p>
                    </div>
                    <div class="footer-contact">
                        <p><strong>Geovetarcentrum</strong></p>
                        <p>Box 460</p>
                        <p>405 30 Göteborg</p>
                    </div>
                </div>

                <!--Map saker-->
                <div class="footer-mid">
                    <div id="map"> </div>
                    <div id = "map-cover">
                        <h1 class = "center-vertical"> <i class="fa fa-map-marker fa-5x map-cover-icon"></i><br>
                            <?php echo $map_text; ?> </h1>
                    </div>
                </div>
                <!--copyright-->
                <div class="footer-bot">
                    <p class="center-vertical-css"> &copy Klimator 2016 <br>
                        Produced by <a href="http://www.treelineweb.com/">Treeline UF</a></p>
                </div>
            </div>
        </div>
    </div>
</section>