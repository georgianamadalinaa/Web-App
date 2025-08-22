<?php
session_start();

// Verificăm dacă utilizatorul este autentificat
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}

// Afișăm numele utilizatorului autentificat
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato&amp;subset=latin">

    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
<meta name="description" content="Description">
<meta name="keywords" content="Keywords">
    <style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
    <body>
<div id="art-main">
<header class="art-header">

    <div class="art-shapes">
        <div class="art-object0"></div>
<div class="art-object2057248001"></div>

            </div>

<h1 class="art-headline">
    <a href="/">Vip Travel</a>
</h1>
<h2 class="art-slogan">Realize Your Travel Dreams With Us</h2>



<nav class="art-nav">
    <ul class="art-hmenu">
        <li><a href="home.php" class="active">Home</a>
                    </li>
        <li><a href="contract.php">Contract</a>
            <ul>
                <li><a href="contract_inserare.php">Inserare</a></li>
                <li><a href="contract_cautare.php">Cautare</a></li>
                <li><a href="contract_modificare.php">Modificare</a></li>
                <li><a href="contract_stergere.php">Stergere</a></li>
                <li><a href="filtrare.php">Filtrare</a></li>
 <li><a href="contract_raport.php">Raport</a></li>
<li><a href="contract_chart.php">Chart</a></li>


            </ul>

        </li>
        <li><a href="destinatie.php">Destinatie</a>
            <ul>
                <li><a href="destinatie_inserare.php">Inserare</a></li>
                <li><a href="destinatie_modificare.php">Modificare</a></li>
                <li><a href="destinatie_cautare.php">Cautare</a></li>
                <li><a href="destinatie_stergere.php">Stergere</a></li>
            </ul>
        </li>
        <li><a href="clienti.php">Client</a>
            <ul>
                <li><a href="client_inserare.php">Inserare</a></li>
                <li><a href="client_modificare.php">Modificare</a></li>
                <li><a href="client_cautare.php">Cautare</a></li>
                <li><a href="client_stergere.php">Stergere</a></li>
                <li><a href="client_filtrare.php">Filtrare</a></li>
            </ul>
        </li>
    </ul>
</nav>

                    
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 50%" >
	<h4 style="text-align: center;"><span style="color: rgb(250, 125, 15);">Best Price:</span> Thailanda</h4>
        <p style="text-align: center;"><img width="250" height="250" alt="" src="images/contentimage1.png" class=""></p>
        <p style="font-size: 20px; text-align: center;">From <span style="font-size: 26px;">$</span><span style="font-size: 28px; color: rgb(48, 180, 207); font-family: Impact;">595<span style="color: rgb(87, 95, 127);">*</span></span></p>
        <p style="text-align: center;">Tarifele pot varia in functie de disponibilitate si perioada de calatorie (in limita locurilor disponibile la momentul efectuarii...
         <span style="color: rgb(149, 168, 180); font-family: Lato, sans-serif; font-size: 14px; text-align: start; background-color: rgb(251, 251, 251);"></span></p>
        <p style="text-align: center;"><a href="#" class="art-button">read more</a></p>
    </div><div class="art-layout-cell layout-item-0" style="width: 50%" >
        <h4 style="text-align: center;"><span style="color: rgb(250, 125, 15);">Best Price:</span> Bora Bora</h4>
        <p style="text-align: center;"><img width="250" height="250" alt="" src="images/contentimage2.png" class=""></p>
        <p style="font-size: 20px; text-align: center;">From <span style="font-size: 26px;">$</span><span style="font-size: 28px; color: rgb(48, 180, 207); font-family: Impact;">1225<span style="color: rgb(87, 95, 127);">*</span></span></p>
        <p style="text-align: center;">Tarifele pot varia in functie de disponibilitate si perioada de calatorie (in limita locurilor disponibile la momentul efectuarii...
         <span style="color: rgb(149, 168, 180); font-family: Lato, sans-serif; font-size: 14px; text-align: start; background-color: rgb(251, 251, 251);"><br></span></p>
        <p style="text-align: center;"><a href="#" class="art-button">read more</a></p>
    </div>
    </div>
</div>
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%" >
        <h1>Unde iti planuiesti sa mergi?</h1>
        <p><img width="300" height="194" alt="" src="images/content-image2.png" style="float: left; margin-right: 10px" class=""></p>
        <p>Imagineaza-ti un loc in care povestile atemporale prind viata ca prin magie. Un loc in care copiii si tinerii de toate varstele isi pot urma visele cele mai indraznete, iar adultii pot retrai clipe din copilarie.</p><p><br></p><p>&nbsp;Fie ca alegi o vacanta intr-unul dintre parcurile Disney, fie o croaziera magica la bordul unei nave Disney Cruise Line, Mickey, Minnie, Goofy si toti prietenii lor, spectacolele si paradele fascinante, atractiile premiate la nivel international, gama inegalabila de experiente culinare Disneylicioase si serviciile de top garanteaza transformarea viselor in realitate.</p>
        <p><a href="#" class="art-button">read more</a></p>
    </div>
    </div>
</div>
</div>
                                
                

</article></div>
                        <div class="art-layout-cell art-sidebar1"><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Top Destinati</h3>
        </div>
        <div class="art-blockcontent"><ul>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Acapulco</a>&nbsp;</span></li>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Aruba</a>&nbsp;</span></li>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Bahamas</a></span></li>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Bali</a>&nbsp;</span></li>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Barbados</a>&nbsp;</span></li>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Belize</a>&nbsp;</span></li>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Bermuda</a></span></li>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Cancun</a>&nbsp;</span></li>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Cap Cana</a>&nbsp;</span></li>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Costa Rica</a>&nbsp;</span></li>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Cozumel</a>&nbsp;</span></li>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Curacao</a>&nbsp;</span></li>
<li><span style="color: rgb(31, 34, 46); line-height: normal;"><a href="#">Hawaii</a></span></li>
</ul>
<p><a href="#"></a></p>
<p><a href="#"></a></p></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Oferta saptamani</h3>
        </div>
        <div class="art-blockcontent"><p style="text-align: center;"><img width="176" height="132" alt="" src="images/boat.jpg" class=""></p>
<p style="text-align: center;">&nbsp;<a href="#" class="art-button">read more&nbsp;</a>&nbsp;<br></p></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Misiunea noastra</h3>
        </div>
        <div class="art-blockcontent"><p style="text-align: center;"><img width="180" height="220" alt="" src="images/shutterstock_12614398.jpg" class=""></p>
<p style="text-align: center;">&nbsp;<a href="#" class="art-button">read more</a>&nbsp;<br></p></div>
</div></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer">
  <div class="art-footer-inner">
<div style="position:relative;display:inline-block;padding-left:138px;padding-right:138px"><a title="RSS" class="art-rss-tag-icon" style="position: absolute; bottom: -10px; left: -6px; line-height: 32px;" href="#"></a>
<p><a href="#">Terms of use</a> | <a href="#">Privacy Policy</a> | <a href="#">Advertise With Us</a>&nbsp;</p>
<p>All Rights Reserved.</p>
</div>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
    </p>
  </div>
</footer>

    <div class="logout">
        <p><a href="logout.php">Deconectare</a></p>
    </div>
</body>
</html>
