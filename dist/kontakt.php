<!DOCTYPE html> <?php

$english = false;

if(isset($_COOKIE['lang'])){
    $lang = $_COOKIE['lang'];

    if ($lang == "eng") {
        $english = true;
    }

}

?> <html lang="en"><head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="author" content="Klimator"><meta name="description" content="Klimator homepage"><title>Klimator</title><!--======================================= CSS =====================================================--><link href="css/style.css" rel="stylesheet"><!-- Latest compiled and minified CSS --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"><!-- Optional theme --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"><!--======================================= /*CSS =====================================================--><!--======================================= Font =====================================================--><!--Font awsome--><link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,400italic,700italic,900,900italic" rel="stylesheet" type="text/css"><!--======================================= /'Font =====================================================--><!--======================================= jq =====================================================--><!--Lates compatibel jq--><script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script><!-- Latest compiled and minified JavaScript --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script><!--Ajax script--><script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script><!-- Google maps API --><script src="https://maps.googleapis.com/maps/api/js"></script><!-- Custom Theme JavaScript --><script src="js/velocity.js"></script><script src="js/jquery.velocity.min.js"></script><script src="js/velocity.ui.js"></script><script src="js/scripts.js"></script><script src="js/backgroundslider.js"></script><script src="js/jquery.appear.js"></script><script src="js/jquery.easing.min.js"></script><script src="js/fade.in.js"></script><script src="js/slide.in.js"></script><!-- JS plugin to make vw unit work in older browsers and Safari--><script src="js/viewport-units-buggyfill.js"></script><script src="js/viewport-units-buggyfill.hacks.js"></script><script>window.viewportUnitsBuggyfill.init({
            // ignore browser capability, run this puppy everywhere
            force: true,
            // milliseconds to delay between updates of viewport-units
            // caused by orientationchange, pageshow, resize events
            refreshDebounceWait: 250,
            hacks: window.viewportUnitsBuggyfillHacks
        });</script><!--======================================= /*jq =====================================================--><!--icon--><link rel="shortcut icon" href="img/logo/icon-r2.png" type="image/x-icon"></head><body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"><!--=============================================== DESTKOP-NAV Start==================================--><nav class="navbar navbar-custom navbar-fixed-top hidden-xs hidden-sm" role="navigation"> <?php
    $link = "";
    if($english)
    {
        $out = "Svenska?";
        $link = "swe";
        $index = "Home";
        $affar = "Business Fields";
        $kont = "Contact us";


        $affar1 = "RSI";
        $affar2 = "BiFi";
        $affar3 = "Road Stability";
        $affar4 = "Road Surface Forecast";
        $affar5 = "MDSS";
        $affar6 = "Variable Speed";
    }
    else{
        $out = "English?";
        $link = "eng";
        $index = "Hem";
        $affar = "Affärsområden";
        $kont = "Kontakta oss";

        $affar1 = "RSI";
        $affar2 = "BiFi";
        $affar3 = "Vägstabilitet";
        $affar4 = "Väglagsprognos";
        $affar5 = "Beslutsstödssystem";
        $affar6 = "Väderstyrd väg";
    }
    ?> <div class="container-fluid nav-container"><div class="navbar-header"><a class="navbar-brand page-scroll" href="index.php"><img id="logo-white" class="logo" src="img/logo/Klimator-white.svg" alt="Klimator logo"> <img id="logo-dark" class="logo" src="img/logo/Klimator-dark.svg" alt="Klimator logo"></a></div><!-- Collect the nav links, forms, and other content for toggling --><div class="collapse navbar-collapse navbar-right navbar-main-collapse hidden-xs hidden-sm"><ul class="nav navbar-nav hidden-xs hidden-sm"><!-- Hidden li included to remove active class from about link when scrolled up past about section --><li class="hidden page-scroll"></li><li><a class="page-scroll nav-text" href="index.php"><?php echo $index; ?></a></li><li><div class="dropdown"><div class="dropdown-toggle" type="button"><a class="dropdown-link page-scroll nav-text" href="affarsomrade.php"><?php echo $affar; ?></a></div><ul class="dropdown-menu dropdown-menu-css"><li><a href="affarsomrade.php#pagea1"><?php echo $affar1; ?></a></li><li><a href="affarsomrade.php#pagea2"><?php echo $affar2; ?></a></li><li><a href="affarsomrade.php#pagea3"><?php echo $affar3; ?></a></li><li><a href="affarsomrade.php#pagea4"><?php echo $affar4; ?></a></li><li><a href="affarsomrade.php#pagea5"><?php echo $affar5; ?></a></li><li><a href="affarsomrade.php#pagea6"><?php echo $affar6; ?></a></li></ul></div></li><li><a class="page-scroll nav-text" href="kontakt.php"><?php echo $kont; ?></a></li><!-- These two will give some extra space between the links--><li><a class="page-scroll nav-text" href=""></a></li><li><a class="page-scroll nav-text" href=""></a></li><li><a class="page-scroll nav-text" href="set_lang.php?lang=<?php echo $link; ?>"><strong><?php echo $out; ?></strong></a></li></ul></div></div></nav><!--=============================================== NAV END ===================================================--><!--=============================================== NAV(tabet) start ==========================================--><div class="tablet-nav hidden-lg hidden-md"><div class="overlay-navigation"><nav role="navigation"><ul><li><a href="index.php"><?php echo $index; ?></a></li><li><a href="affarsomrade.php"><?php echo $affar;?></a></li><li><a href="kontakt.php"><?php echo $kont; ?></a></li></ul></nav><div class="hidden-lg hidden-md tablet-lang"><a class="" href="set_lang.php?lang=<?php echo $link; ?>"><strong><?php echo $out; ?></strong></a></div></div></div><section class="home"><div class="open-overlay center-vertical"><span class="bar-top"></span> <span class="bar-middle"></span> <span class="bar-bottom"></span></div></section><!--=============================================== NAV(tabet) End ==========================================--><section class="intro kontaktabild" id="pagek0"> <?php
    if($english){
        $title = "We who work here";
    }
    else{
        $title = "Vi som arbetar här";
    }
    ?> <div class="intro-body"><div class="container-fluid"><div class="row"><div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-2"><h2 class="fade-in fade-delay-05"><?php echo $title; ?></h2><a href="#pagek1" class="btn btn-circle page-scroll fade-in fade-delay-1"><img class="logo-button" src="img/logo/icon-r.svg" alt="logo"></a></div></div></div></div></section><!--============================ Personer ===================================--><section id="pagek1" class="person"><div id="person-container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-fluid row full-height"><div class="col-lg-6 col-md-6 col-xs-6 persons fade-in"><img class="center-hori-css" src="img/Personer/Jorgen Bogren.jpg" alt="Bild på Jörgen Bogren"><h4 class="purple-selection">Jörgen Bogren</h4><h5></h5><strong><p>0709 170 251</p><p>jorgen.bogren@klimator.se</p></strong></div><div class="col-lg-6 col-md-6 col-xs-6 persons fade-in fade-delay-1"><img class="center-hori-css" src="img/Personer/Torbjorn Gustavsson.jpg" alt="Bild på Thorbjörn Gustavsson"><h4 class="purple-selection">Torbjörn Gustavsson</h4><h5>VD</h5><strong><p>0709 170 252</p><p>torbjorn.gustavsson@klimator.se</p></strong></div><div class="col-lg-4 col-md-4 col-xs-6 persons fade-in"><img class="center-hori-css" src="img/Personer/Silke Schau.jpg" alt="Bild på Silke Schau"><h4 class="purple-selection">Silke Schau</h4><h5></h5><strong><p>0708 178 341</p><p>silke.schau@klimator.se</p></strong></div><div class="col-lg-4 col-md-4 col-xs-6 persons fade-in fade-delay-1"><img class="center-hori-css" src="img/Personer/Esben Almkvist.jpg" alt="Bild på Esben Almkvist"><h4 class="purple-selection">Esben Almkvist</h4><h5></h5><strong><p>0708 467 217</p><p>esben.almkvist@klimator.se</p></strong></div><div class="col-lg-4 col-md-4 col-xs-6 persons fade-in fade-delay-2"><img class="center-hori-css" src="img/Personer/Johan Edblad.jpg" alt="Bild på Johan Edblad"><h4 class="purple-selection">Peter Hagberg</h4><h5></h5><strong><p>0739 197 414</p><p>peter.hagberg@klimator.se</p></strong></div><div class="col-lg-6 col-md-6 col-xs-6 persons fade-in"><img class="center-hori-css" src="img/Personer/Eric Zachrisson.jpg" alt="Bild på Erik Zachrisson"><h4 class="purple-selection">Eric Zachrisson</h4><h5></h5><strong><p>0733 109 102</p><p>eric.zachrisson@klimator.se</p></strong></div><div class="col-lg-6 col-md-6 col-xs-6 persons fade-in fade-delay-2"><img class="center-hori-css" src="img/Personer/Anders Bjork.jpg" alt="Bild på Anders Björk"><h4 class="purple-selection">Anders Björk</h4><h5></h5><strong><p>0701 090 230</p><p>anders.bjork@klimator.se</p></strong></div></div></section><section id="pagek2"> <?php
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

    ?> <div class="container-fluid full-height"><div class="row full-height"><div class="col-lg-12 footer full-height"><div class="footer-triangle"><img class="triangle col-lg-12" src="img/triangel-w.svg" alt="triangel"></div><div class="empty-5 hidden-xs hidden-sm"></div><div class="footer-top fade-in"><h1> <?php echo $title; ?> </h1><p> <?php echo $subtitle; ?></p></div><div class="empty-5 hidden-xs hidden-sm"></div><div class="footer-top-contact fade-in"><div class="footer-contact"><p><strong><em>Jörgen Bogren</em></strong></p><p>+46 709170251</p><p>jorgen.bogren@klimator.se</p></div><div class="footer-contact"><p><strong><em>Torbjörn Gustavsson</em></strong></p><p>+46 709170252</p><p>torbjorn.gustavsson@klimator.se</p></div><div class="footer-contact"><p><strong>Chalmers Innovation Center</strong></p><p>Holtermansgatan 1A</p><p>411 29 Göteborg</p></div><div class="footer-contact"><p><strong>Geovetarcentrum</strong></p><p>Box 460</p><p>405 30 Göteborg</p></div></div><!--Map saker--><div class="footer-mid"><div id="map"></div><div id="map-cover"><h1 class="center-vertical"><i class="fa fa-map-marker fa-5x map-cover-icon"></i><br> <?php echo $map_text; ?> </h1></div></div><!--copyright--><div class="footer-bot"><p class="center-vertical-css">&copy Klimator 2016<br>Produced by <a href="http://www.treelineweb.com/">Treeline UF</a></p></div></div></div></div></section></body></html>