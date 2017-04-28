<!DOCTYPE html> <?php

$english = false;

if(isset($_COOKIE['lang'])){
    $lang = $_COOKIE['lang'];

    if ($lang == "eng") {
        $english = true;
    }

}

?> <html lang="en"><head><meta name="description" content="Klimator homepage"><title>Klimator</title><!--======================================= CSS =====================================================--><link href="css/style.css" rel="stylesheet"><!-- Latest compiled and minified CSS --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"><!-- Optional theme --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"><!--======================================= /*CSS =====================================================--><!--======================================= Font =====================================================--><!--Font awsome--><link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,400italic,700italic,900,900italic" rel="stylesheet" type="text/css"><!--======================================= Font =====================================================--><!--======================================= jq =====================================================--><!--Lates compatibel jq--><script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script><!-- Latest compiled and minified JavaScript --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script><!--Ajax script--><script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script><!-- Google maps API --><script src="https://maps.googleapis.com/maps/api/js"></script><!-- Custom Theme JavaScript --><script src="js/velocity.js"></script><script src="js/jquery.velocity.min.js"></script><script src="js/velocity.ui.js"></script><script src="js/scripts.js"></script><script src="js/backgroundslider.js"></script><script src="js/jquery.appear.js"></script><script src="js/jquery.easing.min.js"></script><script src="js/fade.in.js"></script><script src="js/slide.in.js"></script><script src="js/fix.scroll.js"></script><!-- JS plugin to make vw unit work in older browsers and Safari--><script src="js/viewport-units-buggyfill.js"></script><script src="js/viewport-units-buggyfill.hacks.js"></script><script>window.viewportUnitsBuggyfill.init({
            // ignore browser capability, run this puppy everywhere
            force: true,
            // milliseconds to delay between updates of viewport-units
            // caused by orientationchange, pageshow, resize events
            refreshDebounceWait: 250,
            hacks: window.viewportUnitsBuggyfillHacks
        });</script><!--======================================= /*jq =====================================================--><!--icon--><link rel="shortcut icon" href="img/logo/icon-r2.png" type="image/x-icon"></head><body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"><!--=============================================== DESTKOP-NAV Start==================================--><nav class="navbar navbar-custom navbar-fixed-top hidden-xs hidden-sm" role="navigation"><!--Svenska eller engelska --> <?php
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
    ?> <div class="container-fluid nav-container"><div class="navbar-header"><a class="navbar-brand page-scroll" href="index.php"><img id="logo-white" class="logo" src="img/logo/Klimator-white.svg" alt="Klimator logo"> <img id="logo-dark" class="logo" src="img/logo/Klimator-dark.svg" alt="Klimator logo"></a></div><!-- Collect the nav links, forms, and other content for toggling --><div class="collapse navbar-collapse navbar-right navbar-main-collapse hidden-xs hidden-sm"><ul class="nav navbar-nav hidden-xs hidden-sm"><!-- Hidden li included to remove active class from about link when scrolled up past about section --><li class="hidden page-scroll"></li><li><a class="page-scroll nav-text" href="index.php"><?php echo $index; ?></a></li><li><div class="dropdown"><div class="dropdown-toggle" type="button"><a class="dropdown-link page-scroll nav-text" href="affarsomrade.php"><?php echo $affar; ?></a></div><ul class="dropdown-menu dropdown-menu-css"><li><a href="affarsomrade.php#pagea1"><?php echo $affar1; ?></a></li><li><a href="affarsomrade.php#pagea2"><?php echo $affar2; ?></a></li><li><a href="affarsomrade.php#pagea3"><?php echo $affar3; ?></a></li><li><a href="affarsomrade.php#pagea4"><?php echo $affar4; ?></a></li><li><a href="affarsomrade.php#pagea5"><?php echo $affar5; ?></a></li><li><a href="affarsomrade.php#pagea6"><?php echo $affar6; ?></a></li></ul></div></li><li><a class="page-scroll nav-text" href="kontakt.php"><?php echo $kont; ?></a></li><!-- These two will give some extra space between the links--><li><a class="page-scroll nav-text" href=""></a></li><li><a class="page-scroll nav-text" href=""></a></li><li><a class="page-scroll nav-text" href="set_lang.php?lang=<?php echo $link; ?>"><strong><?php echo $out; ?></strong></a></li></ul></div></div></nav><!--=============================================== NAV END ===================================================--><!--=============================================== NAV(tabet) start ==========================================--><div class="tablet-nav hidden-lg hidden-md"><div class="overlay-navigation"><nav role="navigation"><ul><li><a href="index.php"><?php echo $index; ?></a></li><li><a href="affarsomrade.php"><?php echo $affar;?></a></li><li><a href="kontakt.php"><?php echo $kont; ?></a></li></ul></nav><div class="hidden-lg hidden-md tablet-lang"><a class="" href="set_lang.php?lang=<?php echo $link; ?>"><strong><?php echo $out; ?></strong></a></div></div></div><section class="home"><div class="open-overlay center-vertical"><span class="bar-top"></span> <span class="bar-middle"></span> <span class="bar-bottom"></span></div></section><!--=============================================== NAV(tabet) End ==========================================--><!--=============================================== page 0 start ==========================================--><section class="intro" id="page0"> <?php
    if($english){
        $intro = "Business Fields";
    }
    else
    {
        $intro = "Affärsområden";
    }
    ?> <div class="background-slider"></div><div class="intro-body"><div class="container-fluid"><div class="row"><div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-2 col-lg-offset-2"><h1 class="brand-heading fade-in fade-delay-05 affarsomrade-intro"><?php echo $intro; ?></h1><a href="#pagea1" class="btn btn-circle page-scroll fade-in fade-delay-1"><img class="logo-button" src="img/logo/icon-r.svg" alt="logo"></a></div></div></div></div></section><!--=============================================== page 1 start ==========================================--><section id="pagea1"> <?php
    $title = "RSI";

    if($english){

        $paragraph1 = "RSI, Road Status Information, is a world leading service that describes the road weather conditions in real time as well as in the future. RSI helps winter maintenance entrepreneurs to effectively prevent, treat and stop slippery conditions from developing. This in turn increases traffic flow and decreases the risk of weather related accidents.";
        $paragraph2 = "By utilizing vehicle data collected by the road users, and combining it with other types of information like RWIS, the foundation is set for a detailed picture of the prevailing road conditions as well as a detailed forecast of the future conditions. Using RSI, salt usage can be more effectively managed, maintenance resources streamlined and environmental impact minimized. RSI also gives road authorities the ability to evaluate and effectively do follow-up on taken maintenance actions. Furthermore road users can be informed about the present and future road weather situation. ";
        $subtitle = "Information sources used in RSI: ";
        $paragraph3 = "● <strong>RWIS: </strong>Road Weather information system: Weather stations recording, road surface temperature, air temperature, moisture, precipitation type and amounts, wind speed and wind direction.
					<br><br>
					● <strong>Weather information: </strong> Weather forecasts, radar and satellite images.
					<br><br>
					● <strong>GIS-system: </strong> Collection, storage, analysis and presentation of data.
					<br><br>
					● <strong>Climate model: </strong>The model is based on a proven road weather model that calculates the surface temperature and road surface conditions for road segments.
					<br><br>
					● <strong>Maintenance data: </strong> GPS information about when, where and what type of actions has been made.
					<br><br>
					● <strong>MDSS: </strong>Management decision support system is a central part in RSI, it combines all available information to present a real time road status, and what types of maintenance actions are advisable.
					<br><br>
					● <strong>FCD (Floating Car Data): </strong>RSI uses a multitude of datatypes from vehicles. Primarily data concerning the road weather conditions and road friction. At the forefront of this is Vovlo’s RFE – Road Friction Estimate.
					<br><br>
					● <strong>GUI: </strong>A state of the art graphical user interface lets the user assess the present and future road conditions with ease and can take confident actions accordingly.
					<br><br>";

        $read_more1 = "READ MORE";
    }
    else{
        $paragraph1 = "Road Status Information, är en världsledande teknisk tjänst som beskriver vinterväglaget i realtid och framtid. RSI underlättar för att driftsentreprenörer effektivt ska kunna förebygga, bekämpa och därmed förhindra halka. Det i sin tur kan förbättra trafikflödet och minska olycksrisken.";

        $paragraph2 = "RSI möjliggörs genom att trafikanter ute på vägarna samlar in data, här läggs grunden – tillsammans med bland annat väderinformationen VViS– för en detaljerad bild av hur vägklimatet ser ut i realtid, men också detaljerade prognoser om kommande väglag. Genom att använda RSI kan saltanvändningen regleras, resurser effektiviseras och miljö sparas. RSI ger dessutom beställaren underlag att följa upp och utvärdera entreprenörens insatser. Därutöver uppmärksammas trafikanter på rådande förhållanden och framtida omständigheter i väglaget.";
        $subtitle = "NEDANSTÅENDE INFORMATIONSKÄLLOR INGÅR I RSI:";
        $paragraph3 = "● <strong>VVIS: </strong>Stationer som visar vägytans temperatur, lufttemperatur, luftfuktighet, nederbördstyp, mängd, vindhastighet och riktning 
					<br><br>
					● <strong>Väderinformation: </strong>Väderprognoser, Väderprognoser, satellitdata och radarbilder.
					<br><br>
					● <strong>GIS-system: </strong>Insamling, lagring, analys och presentation av data. 
					<br><br>
					● <strong>Klimatmodell: </strong>Modellen bygger på en välbeprövad vägvädermodell som beräknar yttertemperaturer och väglag för vägsträckor utifrån VViS. 
					<br><br>
					● <strong>Åtgärdsdata från entreprenör: </strong> GPS-baserad information om vad, var och när åtgärder har utförts i en driftentreprenörs område. Informationen används direkt av modellen för att räkna ut fryspunkt på vägen och väglaget. För beslutsfattaren ges en tydlig bild på om åtgärd har utförts av förarna och vilken effekt den fått. 
					<br><br>
					● <strong>Klimattolk: </strong>Central del i RSI – tar in och väger samman all tillgänglig information för att kunna räkna fram en nulägesstatus och presenteras. En liknande teknik används för att förutsäga när och var som tjällossning kan orsaka problem. 
					<br><br>
					● <strong>FCD (Floating Car Data): </strong>Realtidsdata från bilar. Två olika typer av data används; dels realtidsdata från fordonen som hjälper till att beskriva rådande väder och väglag och dels RFE-¬‐data som är ett mått på aktuell friktion som bilen uppmäter. 
					<br><br>
					● <strong>GUI: </strong>Användaren får, med RSI, ett lättläst verktyg och kan bedöma aktuellt¬ och kommande väderläge.
					<br><br>";
        $read_more1 = "LÄS MER";
    }
    ?> <div class="container-fluid full-height"><div class="row full-height"><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 afarsomraden keep-scroll fade-in fade-delay-0"><h1 class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><?php echo $title; ?></h1><!--<img class="hidden-md hidden-lg col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 mobile-height-60" src="img/rsi.jpg" alt="rsi"> --><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph1; ?></p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph2;?></p><h2 class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><?php echo $subtitle; ?></h2><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph3; ?> </p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><a target="_blank" href="http://www.roadstatus.info/"><br><?php echo $read_more1; ?></a></p></div><div class="col-lg-6 col-md-6 hidden-sm hidden-xs afarsomraden half-height fix-to-parent fix-half-width"><img class="col-lg-12 col-md-12 col-sm-12" src="img/rsi.jpg" alt="rsi"></div></div></div></section><!--=============================================== page 2 start ==========================================--><section id="pagea2"> <?php
    $title = "BIFI";

    if($english){
        $paragraph1 = "The system generates forecasted, real-time and post-season information about the load bearing capacity on gravel roads. It does this by using a sensor equipped vehicle fleet to collect data on gravel roads within the chosen area. The collected data is merged with information from a spring thaw weather model that gets input from weather forecasts and RWIS-stations. The information is presented on a map and in form of forecasts or real-time information.";
        $paragraph2 = "In conjunction with the spring thaw and larger precipitation events there can be a decrease in bearing capacity in gravel roads. In these cases some parts of the road network cannot take heavy loads without the destruction of the road and/or the vehicle as a result. Traditionally, weight restrictions and closure of roads for extended periods of time has been the standard method for dealing with the problem. Load restrictions and closures on the public roads are calculated to costs the lumber industry ca. 600 million SEK annually.";
        $paragraph3 = "BiFi can shorten the duration of these restrictions and make the system and the method for dealing with reduced bearing capacity more flexible and effective. BiFi is a cost-effective tool that enables easier planning of transports during spring thaw season without risking damage to roads or vehicles. The system also provides relevant information to road authorities when dealing with weight restrictions, closure of roads and temporary permits.";
        $read_more2 = "READ MORE";
    }
    else
    {
        $paragraph1 = "BiFi genererar prognos, realtids och historisk information om bärighetskapaciteten på grusvägar. BiFi skapar detta genom att kombinera information från en fordonsflotta utrustade med sensorer som samlar information från valda grusvägar och en modell för tjällossning. Fordonsinformationen behandlas tillsammans med tjälmodellen i en tolkmodell som ger en nulägesbild och en prognos som presenteras i en karta.";
        $paragraph2 = "I samband med tjällossningen och större nederbördshändelser sker en bärighetsnedsättning av vägnätet. Vissa vägavsnitt klarar då inte tunga transporter utan risk för större skador på väg och fordon. För att förhindra skador och fastkörningar använder sig Trafikverket traditionellt sig av avstängningar och viktrestriktioner. Avstängningarna på det allmänna vägnätet leder till en merkostnad för skogsindustrin som beräknas uppgå till ca 600 miljoner kronor årligen.";
        $paragraph3 = "Med BiFi går det att korta ner dessa avstängningar och göra systemet och hanteringen av bärighetsnedsättningar mer flexibel. BiFi är ett kostnadseffektivt verktyg som tillåter enklare planering av transporter i tjällossningstider utan att riskera fastkörningar eller skador på fordon. Samtidigt underlättar systemet driftsentreprenörers arbete med dispenser och hantering av avstängningar och viktrestriktioner.";
        $read_more2 = "LÄS MER";
    }
    ?> <div class="container-fluid full-height"><div class="row full-height"><div class="col-lg-6 col-md-6 hidden-sm hidden-xs afarsomraden half-height fix-to-parent"><img class="col-lg-12 col-md-12 col-sm-12" src="img/bifi.jpg" alt="Bifi"></div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 afarsomraden keep-scroll fix-half-width fade-in fade-delay-0"><h1 class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><?php echo $title; ?></h1><!--<img class="hidden-md hidden-lg col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 mobile-height-60" src="img/rsi.jpg" alt="rsi"> --><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph1; ?></p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph2; ?></p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph3; ?></p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><a target="_blank" href="http://bifi.se/"><br><?php echo $read_more2; ?></a></p></div></div></div></section><!--=============================================== page 3 start ==========================================--><section id="pagea3"> <?php


    if($english){
        $title = "Road Stability";
        $paragraph1 = "Klimator&#39;s method of road monitoring is expected to greatly simplify and improve detection of damaged roads and general road quality supervision. The method offers a practical and consistent tool for road maintenance. The system can be implemented on any road where data collection from moving vehicles is possible. Klimator has developed specialized technology to continuously monitor the in-vehicle acceleration in three dimensions. The accelerometer signals are filtered using sophisticated signal processing and the result is delivered as a road quality index. Using GPS, the value for road quality is geo- tagged and with this information a map of road quality can be generated.";
        $paragraph2 = "Klimator has developed specialized technology to continously monitor the invehicle acceleration in three dimensions. The accelerometer signals are filtered using sophisticated signal processing and the result is delivered as a road quality index. Using GPS, the value for road quality is geo-tagged and with this information a map of road quality can be generated. <br>
					<br> <br><strong>Klimator’s method facilitates development of maintenance tools which supplies information which can be applied on:</strong>";
        $paragraph3 = "
					● General road quality monitoring
					<br><br>
					● Monitoring of the effect of heavy traffic on roads 
					<br><br>
					● Study of degeneration and degradation of roads over time
					<br><br>";
        $read_more3 = "READ MORE";
    }
    else{
        $title = "Vägstabilitet";

        $paragraph1 = "Klimators metod att övervaka vägarna förväntas dramatiskt förenkla och förbättra övervakning av vägar generellt samt även detektion av skadade vägpartier. Metoden är lättanvänd och repeterbar och kan implementeras på alla vägar där datainsamling från rullande fordon är möjlig.";
        $paragraph2 = "Det utvecklade systemet används för att kontinuerligt övervaka accelerationen som påverkar ett fordon i tre riktningar med hjälp av speciellt avsedda accelerometrar. Signalerna från accelerometrarna signalbehandlas och resultatet presenteras i form av ett kvalitetsindex gällande det senast körda vägpartiet. Med hjälp av GPS så märks resultatet med geografisk position och alla mätresultat kan sammanställas i en karta över vägkvalitet. <br> 
					<br> <br> <strong>Exempel på användningsområden är:</strong>";
        $paragraph3 = "
					● Allmän övervakning av vägkvalitet
					<br><br>
					● Övervakning av vägpåverkan från tunga fordon
					<br><br>
					● Studier av succesiv nedbrytning av vägar over tid
					<br><br>
					Informationen från systemet kan med fördel presenteras i ett grafiskt interface för enkel och tydlig överblick.
					";
        $read_more3 = "LÄS MER";
    }
    ?> <div class="container-fluid full-height"><div class="row full-height"><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 afarsomraden keep-scroll fade-in fade-delay-0"><h1 class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><?php echo $title; ?></h1><!--<img class="hidden-md hidden-lg col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 mobile-height-60" src="img/rsi.jpg" alt="rsi"> --><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><?php echo $paragraph1; ?> </p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph2; ?> </p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><?php echo  $paragraph3; ?></p><p></p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><a target="_blank" href="http://www.roadstatus.info/app/"><br><?php echo $read_more3; ?></a></p></div><div class="col-lg-6 col-md-6 hidden-sm hidden-xs afarsomraden half-height fix-to-parent fix-half-width"><img class="col-lg-12 col-md-12 col-sm-12" src="img/vagstabilitet.jpg" alt="affarsomraden"></div></div></div></section><!--=============================================== page 4 start ==========================================--><section id="pagea4"> <?php
    if($english){
        $title = "Road Surface Forecast";
        $paragraph1 = "Road status forecasts are produced by combining data from weather stations, weather forecasts and maintenance vehicles. Typically weather forecasts are made for larger areas, but for this application the information is downscaled to road level. The downscaling is possible thanks to local area knowledge and Geographical Information System (GIS) analysis. The forecast model is very flexible and is available in several quality levels depending on the amount of available input data. The precision of the model will increase as you supply more data sources. In the simplest version the model can be run for just about any area on earth and provide an adequate forecast that will aid the road maintenance crews in their work. By supplying RWIS-station data and vehicle data, the model will give a high quality forecast that will help the maintenance crews optimize their activities. In-data:";
        $paragraph2 = "The forecast model is very flexible and is available i several quality levels epending on the amount of available input data. The precision of the model will increase as you supply more data sources. In the simplest version the model can be run for just about any area on earth and provide an adequate forecast that will aid the road maintenance crews in their work. By supplying RWIS-station data and vehicle data, the model will give a high quality forecast that will help the maintenance crews optimize their activities.";
        $paragraph3 = "<strong>In-data:<br><br></strong>
							● Numerical weather forecast
							<br><br>
							● Synop Stations RWIS-stations
							<br><br>
							● Vehicle data
							<br><br>
							● GIS
							<br><br>
							<br>
							<strong>Output:<br> <br></strong>
							● Road status
							<br><br>
							● Road Temperature and other relevant meteorological variables
							<br><br>
							● Appropriate maintenance action
							<br> <br>
							";
    }
    else{
        $title = "Väglagsprognos";
        $paragraph1 = "Väglagsprognoser görs genom att kombinera data från väderstationer, väderprognoser och väghållningsfordon. Väderprognoser gäller normalt för större områden, men för denna typ av applikation nedskalas informationen till väg nivå. Nedskalningen möjliggörs genom god lokalkännedom och analys av GIS (Geografiska Informations System).";
        $paragraph2 = "Prognosmodellen är mycket flexibel och är tillgängligt i olika kvalitetsnivåer beroende på mängden tillgänglig indata. Precisionen ökar då man förser modellen med fler datakällor. I det enklaste utförandet kan modellen i princip köras för vilken plats som helst på jorden och förse väghållare med en god prognos som är till stor hjälp i deras arbete. Genom att tillföra data från väderstationer och fordon ger modellen en högkvalitativ prognos som hjälper väghållarna att optimera sin väghållning.";
        $paragraph3 = "<strong>Indata:<br> <br></strong>
							● Numerisk väderprognos
							<br><br>
							● Meteorologiska Stationer VVIS-stationer
							<br><br>
							● Fordonsdata
							<br><br>
							● GIS
							<br><br>
							<br>
							<strong>Utdata:<br> <br></strong>
							● Vägstatus
							<br><br>
							● Vägtemperatur och andra relevanta meteorologiska variabler
							<br><br>
							● Lämpliga väghållningsåtgärder
							<br> <br>
							";

    }
    ?> <div class="container-fluid full-height"><div class="row full-height"><div class="col-lg-6 col-md-6 hidden-sm hidden-xs afarsomraden half-height fix-to-parent"><img class="col-lg-12 col-md-12 col-sm-12" src="img/vaglagsprognos.jpg" alt="Väglagsprognos"></div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 afarsomraden keep-scroll fix-half-width fade-in fade-delay-0"><h1 class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><?php echo $title; ?></h1><!--<img class="hidden-md hidden-lg col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 mobile-height-60" src="img/rsi.jpg" alt="rsi"> --><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph1; ?></p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph2; ?></p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph3; ?></p></div></div></div></section><!--=============================================== page 5 start ==========================================--><section id="pagea5"> <?php
    if($english){
        $title = "MDSS";
        $paragraph1 = "Klimator’s MDSS-system gives you a good overview of the present and future road surface conditions, and in relation to this the needs for winter maintenance actions. The information is presented for the present conditions as well as a forecast for the coming 24 hours.";
        $paragraph2 = "<strong>Klimator’s MDSS-system gives you information about:<br><br></strong>
							● Present weather and road conditions in your area 
							<br><br>
							● A forecast for the coming 24 hours 
							<br><br>
							● Needs for Winter maintenace such as plowing or salting
							<br><br>
							";

        $paragraph3 = "<strong>By use of Klimator’s MDSS system it is possible to:<br><br></strong>
							● Plan your work related to winter maintenance in a better way
							<br><br>
							● Possible to save and optimize the salt usage
							<br><br>
							● Save time and resources by being better prepared
							<br><br>
							";

        $paragraph4 = "<strong>The MDSS-system developed by Klimator is available in three different versions:<br><br></strong>
							● Forecast for temperature and road conditions along roads and in maintenance districts
							<br><br>
							● Information that shows the need for salting and plowing in relation to the weather development
							<br><br>
							● GPS-based information that gives the possibility for selective salting
							<br><br>
							";


    }
    else{
        $title = "Beslutsstödssystem";
        $paragraph1 = "Klimators beslutstödsmodell ger användaren en god översikt av aktuellt och kommande väderläge och i förhållande till detta ett noggrant avvägt förslag om vilka åtgärder som behöver genomföras nu och under de kommande 24 timmarna. ";
        $paragraph2 = "<strong>Klimators beslutstödsmodell ger dig information om:<br><br></strong>
							● Rådande väder och väglag i ditt arbetsområde
							<br><br>
							● En prognos för de kommande 24 timmarna
							<br><br>
							● Behov av saltning & plogning
							<br><br>
							";

        $paragraph3 = "<strong>Genom Klimators beslutstödsmodell blir det möjligt att:<br><br></strong>
							● Bättre planera arbetet vad det gäller vinterväghållning
							<br><br>
							● Möjlighet till att spara och optimera saltanvändningen
							<br><br>
							● Spara tid och resurser genom att vara bättre förberedd
							<br><br>
							";

        $paragraph4 = "<strong>Klimatos beslutstödsmodell finns i tre utföranden:<br><br></strong>
							● Prognos för temperatur och halka för vägar och arbetsområden
							<br><br>
							● Modell som visar på behov av saltning och plogning i förhållande till väderutvecklingen
							<br><br>
							● GPS-baserad information som ger möjlighet till selektiv halkbekämpning
							<br><br>
							";
    }
    ?> <div class="container-fluid full-height"><div class="row full-height"><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 afarsomraden keep-scroll fade-in fade-delay-0"><h1 class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><?php echo $title; ?></h1><!--<img class="hidden-md hidden-lg col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 mobile-height-60" src="img/rsi.jpg" alt="rsi"> --><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph1; ?></p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph2; ?></p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph3; ?></p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo $paragraph4; ?></p></div><div class="col-lg-6 col-md-6 hidden-sm hidden-xs afarsomraden half-height fix-to-parent fix-half-width"><img class="col-lg-12 col-md-12 col-sm-12" src="img/beslut.jpg" alt="afarsomraden"></div></div></div></section><!--=============================================== page 6 start ==========================================--><section id="pagea6"> <?php
    if($english){
        $title = "Variable Speed";

        $paragraph1 = "Variable Speed model enables effective speed limit management based on prevailing road conditions, reducing the risk of accidents and smoothing traffic flow. The model classifies the road conditions into different risk levels, where each level has a recommended speed, or reduction of speed related to the normal speed.";
        $paragraph2 = "<strong>Klimator´s Weather model for speed regulation is a dynamic system enabling:<br><br></strong>
							● Speed regulation only when necessary since only 25% of Winter days have risk of slipperiness
							<br><br>
							● Reduces the risk of too high speed during dangerous driving conditions
							<br><br>
							● Benefit of high speed during good conditions
							<br><br>
							● Increased information can reduce the number of accidents
							<br><br>";

        $paragraph3 = "<strong>The weather model consists of several integrated parts:<br><br></strong>
							● Input from RWS
							<br><br>
							● Adaptation of RWS data to segments along the route
							<br><br>
							● Benefit of high speed during good conditions
							<br><br>
							● Processing of criteria in the weather model generating output for regulation of speed 
							<br><br>";


    }
    else{
        $title = "Väderstyrd väg";

        $paragraph1 = "Väderstyrd väg betyder att väder och väglag påverkar vilken hastighet som är tillåten. Dynamisk hastighetsreglering är en av Klimators produkter som ger många fördelar för trafiksäkerhet och trygghet på vägen. Hastigheter som är relevanta för rådande väglag ger motiverade trafikanter och bättre flöde i trafiken. ";
        $paragraph2 = "<strong>Klimators vädermodell för hastighetsreglering kopplar rådande väglag till hastighet.  Fördelarna är flera::<br><br></strong>
							● Hastighetssänkning  bara när väglaget är dåligt. Normalt är det bara svårt väglag ca 25% av tiden under vintern.
							<br><br>
							● Minskar risken för höga hastigheter vid svåra väglagsförhållanden.
							<br><br>
							● Fördel av att normal hastighet kan visas under bra väglagsförhållanden oavsett årstid.
							<br><br>
							● Dynamisk hastighetsreglering minskar olycksrisken.
							<br><br>";

        $paragraph3 = "<strong>Vädermodellen består av flera integrerade delar:<br><br></strong>
							● Indata från VViS
							<br><br>
							● Tillpassning av VViS data till segment längs vägsträckor
							<br><br>
							● beräkning av vilken hastighet som skall råda i förhållande till väder och utförda åtgärd.
							<br><br>
							Fördelar med Klimators modell är att väglaget klassificeras i olika risknivåer. Varje risknivå har en rekommenderad hastighet eller en reducering av hastigheten relaterad till den ”normala” hastigheten.
							";
    }
    ?> <div class="container-fluid full-height"><div class="row full-height"><div class="col-lg-6 col-md-6 hidden-sm hidden-xs afarsomraden half-height fix-to-parent"><img class="col-lg-12 col-md-12 col-sm-12" src="img/vaderstyrd.jpg" alt="afarsomraden"></div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 afarsomraden keep-scroll fix-half-width fade-in fade-delay-0"><h1 class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"><?php echo $title; ?></h1><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo$paragraph1;?></p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo$paragraph2;?></p><p class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1"> <?php echo$paragraph3;?></p></div></div></div></section><!--======================================Footer===================================--><section id="pagea7"> <?php
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