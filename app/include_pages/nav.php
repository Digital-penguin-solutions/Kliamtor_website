<nav class="navbar navbar-custom navbar-fixed-top hidden-xs hidden-sm" role="navigation">
    <?php
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
    ?>
    <div class="container-fluid nav-container">
        <div class="navbar-header"> <a class="navbar-brand page-scroll" href="index.php"> <img id = "logo-white" class="logo" src="img/logo/Klimator-white.svg" alt="Klimator logo"> <img id = "logo-dark" class="logo" src="img/logo/Klimator-dark.svg" alt="Klimator logo"> </a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse hidden-xs hidden-sm">
            <ul class="nav navbar-nav hidden-xs hidden-sm">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden page-scroll"></li>
                <li><a class="page-scroll nav-text" href="index.php"><?php echo $index; ?></a></li>
                <li>
                    <div class="dropdown">
                        <div class="dropdown-toggle" type="button"><a class="dropdown-link page-scroll nav-text" href="affarsomrade.php"><?php echo $affar; ?></a></div>
                        <ul class="dropdown-menu dropdown-menu-css">
                            <li><a href="affarsomrade.php#pagea1"><?php echo $affar1; ?></a></li>
                            <li><a href="affarsomrade.php#pagea2"><?php echo $affar2; ?></a></li>
                            <li><a href="affarsomrade.php#pagea3"><?php echo $affar3; ?></a></li>
                            <li><a href="affarsomrade.php#pagea4"><?php echo $affar4; ?></a></li>
                            <li><a href="affarsomrade.php#pagea5"><?php echo $affar5; ?></a></li>
                            <li><a href="affarsomrade.php#pagea6"><?php echo $affar6; ?></a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="page-scroll nav-text" href="kontakt.php"><?php echo $kont; ?></a> </li>
                <!-- These two will give some extra space between the links-->
                <li><a class="page-scroll nav-text" href=""> </a> </li>
                <li><a class="page-scroll nav-text" href=""> </a> </li>
                <li><a class="page-scroll nav-text" href="set_lang.php?lang=<?php echo $link; ?>"><strong><?php echo $out; ?></strong></a> </li>
            </ul>
        </div>
    </div>
</nav>

<div class = "tablet-nav hidden-lg hidden-md">
    <div class="overlay-navigation">
        <nav role="navigation">
            <ul>
                <li><a href="index.php"><?php echo $index; ?></a></li>
                <li><a href="affarsomrade.php"><?php echo $affar;?></a></li>
                <li><a href="kontakt.php"><?php echo $kont; ?></a></li>
            </ul>
        </nav>
        <div class = "hidden-lg hidden-md tablet-lang"> <a class="" href="set_lang.php?lang=<?php echo $link; ?>"><strong><?php echo $out; ?></strong></a> </div>
    </div>
</div>

<section class="home">
    <div class="open-overlay center-vertical"> <span class="bar-top"></span> <span class="bar-middle"></span> <span class="bar-bottom"></span> </div>
</section>
