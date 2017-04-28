<!DOCTYPE html> <?php

$english = false;

if(isset($_COOKIE['lang'])){
    $lang = $_COOKIE['lang'];

    if ($lang == "eng") {
        $english = true;
    }
}
?> <html lang="en"> <?php include "include_pages/head.php";?> <head><meta name="description" content="Klimator contact page"><title>Klimator contact uss</title></head><body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"> <?php include "include_pages/nav.php"?> <!--=============================================== NAV(tabet) End ==========================================--><section class="intro kontaktabild" id="pagek0"> <?php
    if($english){
        $title = "We who work here";
    }
    else{
        $title = "Vi som arbetar här";
    }
    ?> <div class="intro-body"><div class="container-fluid"><div class="row"><div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-2"><h2 class="fade-in fade-delay-05"><?php echo $title; ?></h2><a href="#pagek1" class="btn btn-circle page-scroll fade-in fade-delay-1"><img class="logo-button" src="img/logo/icon-r.svg" alt="logo"></a></div></div></div></div></section><!--============================ Personer ===================================--><section id="pagek1" class="person"><div id="person-container" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container-fluid row full-height"><div class="col-lg-6 col-md-6 col-xs-6 persons fade-in"><img class="center-hori-css" src="img/Personer/Jorgen Bogren.jpg" alt="Bild på Jörgen Bogren"><h4 class="purple-selection">Jörgen Bogren</h4><h5></h5><strong><p>0709 170 251</p><p>jorgen.bogren@klimator.se</p></strong></div><div class="col-lg-6 col-md-6 col-xs-6 persons fade-in fade-delay-1"><img class="center-hori-css" src="img/Personer/Torbjorn Gustavsson.jpg" alt="Bild på Thorbjörn Gustavsson"><h4 class="purple-selection">Torbjörn Gustavsson</h4><h5>VD</h5><strong><p>0709 170 252</p><p>torbjorn.gustavsson@klimator.se</p></strong></div><div class="col-lg-4 col-md-4 col-xs-6 persons fade-in"><img class="center-hori-css" src="img/Personer/Silke Schau.jpg" alt="Bild på Silke Schau"><h4 class="purple-selection">Silke Schau</h4><h5></h5><strong><p>0708 178 341</p><p>silke.schau@klimator.se</p></strong></div><div class="col-lg-4 col-md-4 col-xs-6 persons fade-in fade-delay-1"><img class="center-hori-css" src="img/Personer/Esben Almkvist.jpg" alt="Bild på Esben Almkvist"><h4 class="purple-selection">Esben Almkvist</h4><h5></h5><strong><p>0708 467 217</p><p>esben.almkvist@klimator.se</p></strong></div><div class="col-lg-4 col-md-4 col-xs-6 persons fade-in fade-delay-2"><img class="center-hori-css" src="img/Personer/Johan Edblad.jpg" alt="Bild på Johan Edblad"><h4 class="purple-selection">Peter Hagberg</h4><h5></h5><strong><p>0739 197 414</p><p>peter.hagberg@klimator.se</p></strong></div><div class="col-lg-6 col-md-6 col-xs-6 persons fade-in"><img class="center-hori-css" src="img/Personer/Eric Zachrisson.jpg" alt="Bild på Erik Zachrisson"><h4 class="purple-selection">Eric Zachrisson</h4><h5></h5><strong><p>0733 109 102</p><p>eric.zachrisson@klimator.se</p></strong></div><div class="col-lg-6 col-md-6 col-xs-6 persons fade-in fade-delay-2"><img class="center-hori-css" src="img/Personer/Anders Bjork.jpg" alt="Bild på Anders Björk"><h4 class="purple-selection">Anders Björk</h4><h5></h5><strong><p>0701 090 230</p><p>anders.bjork@klimator.se</p></strong></div></div></section> <?php include "include_pages/footer.php";?> </body></html>