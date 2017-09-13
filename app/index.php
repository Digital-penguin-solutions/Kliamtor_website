<!DOCTYPE html>
<?php
$english = false;

if(isset($_COOKIE['lang'])){
    $lang = $_COOKIE['lang'];

    if ($lang == "eng") {
        $english = true;
    }
}
?>
<?include "include_pages/head.php"?>
<html lang="en">
<head>
    <meta name="description" content="Klimator homepage">
    <title>Klimator</title>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<?php include "include_pages/nav.php"?>

<!--=============================================== Section 0.5 about klimator ===============================================-->

<section id="page0-5">
    <?php
    if($english){
        $welcome = "Welcome to Klimator";
        $info = "Klimator is a knowledge based company linked to the University of Gothenburg. Since 1999 we have been working with consultancy work within applied climatology. Our goal is to provide increased knowledge in this field for our customers. We are especially focusing on projects within traffic safety, climate mapping and forecasting of road conditions.We work both in Sweden and internationally with the development of new solutions for road climate monitoring, intelligent transport solutions using ITS and projects related to an increased energy efficiency and sustainability. We are also working in the field of urban design with special focus on comfort climate, wind issues and environmental factors.";
    }
    else
    {
        $welcome = "Välkommen till Klimator";
        $info = "Klimator är ett kunskapsföretag vid Göteborgs universitet.
					Sedan 1999 har vi arbetat med konsultverksamhet inom klimatologi med målsättningen att bidra med kunskap inom tillämpningar som trafiksäkerhet, bebyggelse och miljö. Vi har verksamhet i Sverige och internationellt där vi bland annat arbetar med att designa och utveckla vägklimatsystem, bidra till framtida transportlösningar mot bakgrund av energi- kostnad och säkerhetskrav.";
    }
    ?>
    <div class="container-fluid full-height">
        <div class="row full-height">
            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs abote full-height slide-in slide-in-delay-2 slide-in-left"> <img class="col-lg-12 col-md-12 col-sm-12 hidden-xs center-hori-css" src="img/logo/icon-r.svg" alt="logo"> </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 center-vertical abote fade-in fade-in-delay-1">
                <h1 class="col-sm-offset-1 col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo $welcome; ?></h1>
                <p class="col-sm-offset-1 col-lg-12 col-md-12 col-sm-12 col-xs-12"> <?php echo $info; ?></p>
            </div>
        </div>
    </div>
</section>

<!--============================================== Section1 start ==============================================-->
<section id="page1" class="content-section text-center presentation">
    <?php
    if($english){
        $title = "Business Fields";
        $business_info = "";

        $affar_description1 = "RSI, Road Status Information, is the world leading technology that will enable winter maintenance entrepreneurs to work preemptively and act before slippery situations occur. The information can also be used to inform the public about the prevailing road conditions.";
        $affar_description2 = "BiFi – Bearing information through vehicle intelligence is a tool which aims to give road administrators, entrepreneurs, the transport and logging industry relevant and high quality information concerning the bearing capacity of the gravel road network. ";
        $affar_description3 = "Supervision of roads for repair and maintenance on damaged roads is today often performed by manual inspections or done using very expensive and advanced instruments.";
        $affar_description4 = "Forecasts for road surface conditions are calculated by downscaling weather forecasts to road level. This provides relevant information to the road user and to road maintenance crews. With Klimators specialist knowledge base we produce higher accuracy than normal weather forecasts, which is critical for this type of application.";
        $affar_description5 = "The MDSS-system developed by Klimator gives you information about when a road needs to be salted or plowed. The Road weather Information Systems together with weather forecast and radar pictures gives you a lot of information that needs to be taken into account to be able to conduct effective winter maintenance.";
        $affar_description6 = "Weather controlled road means that weather and road surface conditions determine what the speed limit is at any given time. Klimator´s dynamic speed limit control reduces accident risks and smoothes traffic flow.";
    }
    else{
        $title = "Affärsområden";
        $business_info = "Affärsområden som vi arbetar med";

        $affar_description1 = "RSI, Road Status Information, är en världsledande teknisk tjänst som beskriver vinterväglaget i realtid och framtid. RSI underlättar för att driftsentreprenörer effektivt ska kunna förebygga, bekämpa och därmed förhindra halka. Det i sin tur kan förbättra trafikflödet och minska olycksrisken.";
        $affar_description2 = "BiFi – Bärighetsinformation genom Fordons-intelligens är ett verktyg för att ge väghållare, Trafikverket och transportföretag / skogsindustrin relevant och högkvalitativ information om bärighetsläget på det obelagda vägnätet. ";
        $affar_description3 = "Klimator erbjuder automatiserad mobil detektion av beläggning och vägstabilitet.";
        $affar_description4 = "Prognoser av väglag beräknas genom nedskalning av en väderprognos till vägnivå som ger information vilken är relevant för trafikanter och väghållare. Med Klimators specialkunskaper uppnår vi högre precision än normala väderprognoser, vilket krävs för denna typ av tillämpning.";
        $affar_description5 = "Klimators Beslutsstödsmodell (MDSS) hjälper entreprenörer i beslut om när en väg ska saltas eller plogas? Dagens vägvädersystem genererar mycket data som tillsammans med väderprognoser, radarbilder och manuella observationer ska integreras ihop till ett beslut om åtgärd är nödvändig eller ej.";
        $affar_description6 = "Väderstyrd väg betyder att väder och väglag påverkar vilken hastighet som är tillåten. Dynamisk hastighetsreglering är en av Klimators produkter som ger många fördelar. Trafikanter får direkt information om rådande väglag via den hastighet som visas på de dynamiska skyltarna.";
    }


    ?>
    <div class="container-fluid">
        <div class="row fade-in">
            <div class = "fade-in affarsomraden-text">
                <h1 class="text-center col-lg-8 col-xs-12 col-sm-12 col-md-8 col-sm-offset-0 col-xs-offset-0 col-md-offset-2 col-lg-offset-2"> <?php echo $title; ?> </h1>
                <h4 class="hidden-sm hidden-xs col-lg-8 col-xs-12 col-sm-12 col-md-10 col-sm-offset-0 col-xs-offset-0"> <?php echo $business_info; ?></h4>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="content">
                    <div class = "hidden-lg hidden-md center-vertical">
                        <div class = "col-xs-12 col-sm-12 tablet-Arbetsomrade-index"> <img class= "col-sm-offset-1 col-xs-offset-1 col-sm-10 col-xs-10 mobile-height-40 tablet-height-40 no-padding" src="img/Arbetsomrade1.jpg " alt="Arbetsomrade1"/>
                            <div class = "tablet-description col-sm-offset-1 col-xs-offset-1 col-sm-10 col-xs-10 mobile-height-5 tablet-height-5"> <a class = "center-vertical-css"><?php echo $affar1; ?></a> </div>
                        </div>
                        <div class = "col-xs-12 col-sm-12 tablet-Arbetsomrade-index"> <img class= "col-sm-offset-1 col-xs-offset-1 col-sm-10 col-xs-10 mobile-height-40 tablet-height-40 no-padding" src="img/Arbetsomrade2.jpg " alt="Arbetsomrade2"/>
                            <div class = "tablet-description col-sm-offset-1 col-xs-offset-1 col-sm-10 col-xs-10 mobile-height-5 tablet-height-5"> <a class = "center-vertical-css"><?php echo $affar2; ?></a> </div>
                        </div>
                        <div class = "col-xs-12 col-sm-12 tablet-Arbetsomrade-index"> <img class= "col-sm-offset-1 col-xs-offset-1 col-sm-10 col-xs-10 mobile-height-40 tablet-height-40 no-padding" src="img/Arbetsomrade3.jpg " alt="Arbetsomrade3"/>
                            <div class = "tablet-description col-sm-offset-1 col-xs-offset-1 col-sm-10 col-xs-10 mobile-height-5 tablet-height-5"> <a class = "center-vertical-css"><?php echo $affar3; ?></a> </div>
                        </div>
                        <div class = "col-xs-12 col-sm-12 tablet-Arbetsomrade-index"> <img class= "col-sm-offset-1 col-xs-offset-1 col-sm-10 col-xs-10 mobile-height-40 tablet-height-40 no-padding" src="img/Arbetsomrade4.jpg " alt="Arbetsomrade4"/>
                            <div class = "tablet-description col-sm-offset-1 col-xs-offset-1 col-sm-10 col-xs-10 mobile-height-5 tablet-height-5"> <a class = "center-vertical-css"><?php echo $affar4; ?></a> </div>
                        </div>
                        <div class = "col-xs-12 col-sm-12 tablet-Arbetsomrade-index"> <img class= "col-sm-offset-1 col-xs-offset-1 col-sm-10 col-xs-10 mobile-height-40 tablet-height-40 no-padding" src="img/Arbetsomrade5.jpg " alt="Arbetsomrade5"/>
                            <div class = "tablet-description col-sm-offset-1 col-xs-offset-1 col-sm-10 col-xs-10 mobile-height-5 tablet-height-5"> <a class = "center-vertical-css"><?php echo $affar5; ?></a> </div>
                        </div>
                        <div class = "col-xs-12 col-sm-12 tablet-Arbetsomrade-index"> <img class= "col-sm-offset-1 col-xs-offset-1 col-sm-10 col-xs-10 mobile-height-40 tablet-height-40 no-padding" src="img/Arbetsomrade6.jpg " alt="Arbetsomrade6"/>
                            <div class = "tablet-description col-sm-offset-1 col-xs-offset-1 col-sm-10 col-xs-10 mobile-height-5 tablet-height-5"> <a class = "center-vertical-css"><?php echo $affar6; ?></a> </div>
                        </div>
                    </div>
                    <!-- Container for desktop-->
                    <div class = "hidden-xs hidden-sm">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 grid fade-in affarsomrade">
                            <h2 class = "hidden-xs"><?php echo $affar1; ?></h2>
                            <figure class="effect-zoe"> <img class="height-45 mobile-height-15 tablet-height-25" src="img/Arbetsomrade1.jpg " alt="Arbetsomrade1"/>
                                <figcaption>
                                    <h2 class = "center-hori"> <a class="reed-more-afar" href="affarsomrade.php#pagea1">Läs mer <i class="fa fa-external-link"></i></a></h2>
                                    <p class="description"><?php echo $affar_description1; ?></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 grid grid fade-in fade-delay-1 affarsomrade">
                            <h2 class = "hidden-xs"><?php echo $affar2; ?></h2>
                            <figure class="effect-zoe"> <img class="height-45 mobile-height-15 tablet-height-25" src="img/Arbetsomrade2.jpg " alt="Arbetsomrade1"/>
                                <figcaption>
                                    <h2 class = "center-hori"> <a class="reed-more-afar" href="affarsomrade.php#pagea2">Läs mer <i class="fa fa-external-link"></i></a></h2>
                                    <p class="description"><?php echo $affar_description2; ?></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 grid grid fade-in fade-delay-2 affarsomrade">
                            <h2 class = "hidden-xs"><?php echo $affar3; ?></h2>
                            <figure class="effect-zoe"> <img class="height-45 mobile-height-15 tablet-height-25" src="img/Arbetsomrade3.jpg " alt="Arbetsomrade1"/>
                                <figcaption>
                                    <h2 class = "center-hori"> <a class="reed-more-afar" href="affarsomrade.php#pagea3">Läs mer <i class="fa fa-external-link"></i></a></h2>
                                    <p class="description"><?php echo $affar_description3; ?></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 grid grid fade-in affarsomrade">
                            <h2 class = "hidden-xs"><?php echo $affar4; ?></h2>
                            <figure class="effect-zoe"> <img class="height-45 mobile-height-15 tablet-height-25" src="img/Arbetsomrade4.jpg " alt="Arbetsomrade1"/>
                                <figcaption>
                                    <h2 class = "center-hori"> <a class="reed-more-afar" href="affarsomrade.php#pagea4">Läs mer <i class="fa fa-external-link"></i></a></h2>
                                    <p class="description"><?php echo $affar_description4; ?></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 grid grid fade-in fade-delay-1 affarsomrade">
                            <h2 class = "hidden-xs"><?php echo $affar5; ?></h2>
                            <figure class="effect-zoe"> <img class="height-45 mobile-height-15 tablet-height-25" src="img/Arbetsomrade5.jpg " alt="Arbetsomrade1"/>
                                <figcaption>
                                    <h2 class = "center-hori"> <a class="reed-more-afar" href="affarsomrade.php#pagea5">Läs mer <i class="fa fa-external-link"></i></a></h2>
                                    <p class="description"><?php echo $affar_description5; ?></p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 grid grid fade-in fade-delay-2 affarsomrade">
                            <h2 class = "hidden-xs"><?php echo $affar6; ?></h2>
                            <figure class="effect-zoe"> <img class="height-45 mobile-height-15 tablet-height-25" src="img/Arbetsomrade6.jpg " alt="Arbetsomrade1"/>
                                <figcaption>
                                    <h2 class = "center-hori"> <a class="reed-more-afar" href="affarsomrade.php#pagea6">Läs mer <i class="fa fa-external-link"></i></a></h2>
                                    <p class="description"><?php echo $affar_description6; ?></p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="page1-5">
    <h1 class = "fade-in eu-header">Project for better road maintenance</h1>
    <p class = "fade-in fade-in-delay-1 eu-about">Private cars account for 73% of the passenger traffic in the EU, and 44% of all goods in the EU are transported by road. Therefore, proper road maintenance is crucial to ensure traffic flow and safety for all road users. Especially during winter, adverse weather conditions are the primary cause in many road accidents. Currently, road maintenance contractors take decisions on their interventions mostly based on their experience and low-resolution data from meteorological forecasts and stationary weather stations, resulting in inefficient resource management and excessive application of salt/de-icing chemicals. High-quality data to accurately assess and forecast road status during winter conditions can help to increase the operational efficiency and reduce the environmental impact of winter services. Klimator-RSI addresses this challenge by bringing into the market a disruptive tool to monitor road status and assist decision-making in winter services based. The novelty of Klimator-RSI relies on the establishment of our own mobile sensor infrastructure to collect continuous and accurate road status data over large geographic areas, and to provide detailed information about friction and road surface properties. In addition, the collected data is integrated with “traditional” road weather data from RWIS stations and meteorological forecasts, and then processed in our unique climate model and interpreter. Although our service primarily aims to serve road authorities & maintenance, the data can also improve traffic flow and safety for road users. Klimator-RSI has already been successfully tested in operational environment in Sweden showing that costs of winter road maintenance can be reduced by 20-30%. We foresee a potential accumulated revenue for the period 2020-2022 of up to €4.7 M, and the creation of 12 new job positions in our company.</p>
<div class = "center-hori-css eu-flag-container">
    <img class = "fade-in eu-flag" src = "img/eu-flag.jpg">
    <p class = "fade-in eu-flag-about">This project has received funding from the European Union’s Horizon 2020 research and innovation programme under grant agreement No 774187</p>
</div>

</section>

<!--=================================Forskning============================== -->

<section id="page3">
    <?php
    if($english){
        $text = "Klimator is a knowledge based company linked to the University of Gothenburg where we are involved in research and design with the Road Climate research group at the University.";
        $title = "Research";
        $read_more = "Read more";
    }
    else{
        $text = "Klimator är ett kunskapsföretag vid Göteborgs Universitet och bedriver forsknings- och utvecklingsarbete tillsammans med Vägklimatgruppen vid universitet. Vi har även nära sammarbete med flera universitet och forskningsinstitut i övriga Sverige och runt om i Europa.";
        $title = "Forskning";
        $read_more = "Läs mer";
    }
    ?>
    <div class="container-fluid full-height">
        <div class="row full-height">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-vertical forskning fade-in">
                <h1 class="col-lg-12"><?php echo $title; ?> </h1>
                <p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12"> <?php echo $text; ?> <a target="_blank" href = "http://www.gvc.gu.se/forskning/klimat/vagklimat"><br><?php echo $read_more; ?></a></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs-down forskning full-height hidden-xs"> <img class="col-lg-12 col-md-12 col-sm-12 " src="img/forskning.jpg" alt="forskning"> </div>
        </div>
    </div>
</section>

<?php include "include_pages/footer.php"?>
</body>
</html>
