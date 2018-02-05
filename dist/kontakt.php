<?php
include "include_pages/head.php";
$english = false;

if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];

    if ($lang == "eng") {
        $english = true;
    }

}

?> <!DOCTYPE html><html lang="en"><head><meta name="description" content="Klimator homepage"><title>Klimator</title><script>window.viewportUnitsBuggyfill.init({
            // ignore browser capability, run this puppy everywhere
            force: true,
            // milliseconds to delay between updates of viewport-units
            // caused by orientationchange, pageshow, resize events
            refreshDebounceWait: 250,
            hacks: window.viewportUnitsBuggyfillHacks
        });</script></head><body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"> <?php include "include_pages/nav.php"?> <section class="intro kontaktabild" id="pagek0"> <?php
    if ($english) {
        $title = "We who work here";
    } else {
        $title = "Vi som arbetar här";
    }
    ?> <div class="intro-body"><div class="container-fluid"><div class="row"><div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-2"><h2 class="fade-in fade-delay-05"><?php echo $title; ?></h2><a href="#pagek1" class="btn btn-circle page-scroll fade-in fade-delay-1"><img class="logo-button" src="img/logo/icon-r.svg" alt="logo"></a></div></div></div></div></section><section id="pagek1" class="person"><div id="person-container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-fluid row full-height"><div class="col-xs-6 persons fade-in"><img class="center-hori-css" src="img/Personer/Jorgen Bogren.jpg" alt="Bild på Jörgen Bogren"><h4 class="purple-selection">Jörgen Bogren</h4><h5></h5><strong><p>0709 170 251</p><p>jorgen.bogren@klimator.se</p></strong></div><div class="col-xs-6 persons fade-in fade-delay-1"><img class="center-hori-css" src="img/Personer/Torbjorn Gustavsson.jpg" alt="Bild på Thorbjörn Gustavsson"><h4 class="purple-selection">Torbjörn Gustavsson</h4><h5>VD</h5><strong><p>0709 170 252</p><p>torbjorn.gustavsson@klimator.se</p></strong></div><div class="col-md-4 col-xs-6 persons fade-in"><img class="center-hori-css" src="img/Personer/Silke%20Schau.jpg" alt="Bild på Peter Hagberg"><h4 class="purple-selection">Silke Schau</h4><h5></h5><strong><p>0708 178 341</p><p>silke.schau@klimator.se</p></strong></div><div class="col-md-4 col-xs-6 persons fade-in fade-delay-1"><img class="center-hori-css" src="img/Personer/Esben%20Almkvist.jpg" alt="Bild på Erik Zachrisson"><h4 class="purple-selection">Esben Almkvist</h4><h5></h5><strong><p>0708 467 217</p><p>esben.almkvist@klimator.se</p></strong></div><div class="col-md-4 col-xs-6 persons fade-in fade-delay-2"><img class="center-hori-css" src="img/Personer/Peter Hagberg.jpg" alt="Bild på Peter Hagberg"><h4 class="purple-selection">Peter Hagberg</h4><h5></h5><strong><p>0739 197 414</p><p>peter.hagberg@klimator.se</p></strong></div><div class="col-md-4 col-xs-6 persons fade-in"><img class="center-hori-css" src="img/Personer/Eric Zachrisson.jpg" alt="Bild på Erik Zachrisson"><h4 class="purple-selection">Eric Zachrisson</h4><h5></h5><strong><p>0733 109 102</p><p>eric.zachrisson@klimator.se</p></strong></div><div class="col-md-4 col-xs-6 persons fade-in fade-delay-1"><img class="center-hori-css" src="img/Personer/Anders Bjork.jpg" alt="Bild på Anders Björk"><h4 class="purple-selection">Anders Björk</h4><h5></h5><strong><p>0701 090 230</p><p>anders.bjork@klimator.se</p></strong></div><div class="col-md-4 col-xs-6 persons fade-in fade-delay-2"><img class="center-hori-css" src="img/Personer/johan-johansson.jpg" alt="Johan Johansson"><h4 class="purple-selection">Johan Johansson</h4><h5>Computers and Programming</h5><strong><p>0735 736 987</p><p>johan.johansson@klimator.se</p></strong></div><div class="col-md-4 col-xs-6 persons fade-in"><img class="center-hori-css" src="img/Personer/viktoria.jpg" alt="viktoria bogren"><h4 class="purple-selection">Viktoria Bogren</h4><h5>Bachelor of Science</h5><strong><p></p><p>viktoria.bogren@klimator.se</p></strong></div><div class="col-md-4 col-xs-6 persons fade-in fade-delay-1"><img class="center-hori-css" src="img/Personer/pontus.jpg" alt="Bild på Anders Björk"><h4 class="purple-selection">Pontus Andersson</h4><h5>Computers and Programming</h5><strong><p></p><p>pontus.andersson@klimator.se</p></strong></div><div class="col-md-4 col-xs-6 persons fade-in fade-delay-1"><img class="center-hori-css" src="img/Personer/oliver-gustavsson.jpg" alt="oliver gustavsson"><h4 class="purple-selection">Oliver Gustavsson</h4><h5>Computers and Programming</h5><strong><p>0722 159 494</p><p>oliver.gustavsson@klimator.se</p></strong></div></div></section><section id="pagek2"> <?php
    if ($english) {
        $title = "Contact us";
        $subtitle = "Do you have any questions or are you looking to work with us?";
        $map_text = "Click here to open the map";
    } else {
        $title = "Kontakta oss";
        $subtitle = "Har du några frågor eller vill du arbeta med oss?";
        $map_text = "Klicka för att öppna kartan";
    }

    ?> <div class="container-fluid full-height"><div class="row full-height"><div class="col-lg-12 footer full-height"><div class="footer-triangle"><img class="triangle col-lg-12" src="img/triangel-w.svg" alt="triangel"></div><div class="empty-5 hidden-xs hidden-sm"></div><div class="footer-top fade-in"><h1> <?php echo $title; ?> </h1><p> <?php echo $subtitle; ?></p></div><div class="empty-5 hidden-xs hidden-sm"></div><div class="footer-top-contact fade-in"><div class="footer-contact"><p><strong><em>Jörgen Bogren</em></strong></p><p>+46 709170251</p><p>jorgen.bogren@klimator.se</p></div><div class="footer-contact"><p><strong><em>Torbjörn Gustavsson</em></strong></p><p>+46 709170252</p><p>torbjorn.gustavsson@klimator.se</p></div><div class="footer-contact"><p><strong>Chalmers Innovation Center</strong></p><p>Holtermansgatan 1A</p><p>411 29 Göteborg</p></div><div class="footer-contact"><p><strong>Geovetarcentrum</strong></p><p>Box 460</p><p>405 30 Göteborg</p></div></div><!--Map saker--><div class="footer-mid"><div id="map"></div><div id="map-cover"><h1 class="center-vertical"><i class="fa fa-map-marker fa-5x map-cover-icon"></i><br> <?php echo $map_text; ?> </h1></div></div><!--copyright--><div class="footer-bot"><p class="center-vertical-css">&copy Klimator 2016<br>Produced by <a href="http://www.treelineweb.com/">Treeline UF</a></p></div></div></div></div></section></body></html>