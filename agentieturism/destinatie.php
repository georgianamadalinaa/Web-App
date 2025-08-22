<?php
session_start();

// Verificăm dacă utilizatorul este autentificat
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Destinatii</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="style.responsive.css" media="all">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
</head>
<body>
<div id="art-main">
<header class="art-header">
    <div class="art-shapes">
        <div class="art-object0"></div>
        <div class="art-object2057248001"></div>
    </div>
    <h1 class="art-headline"><a href="/">Vip Travel</a></h1>
    <h2 class="art-slogan">Realize Your Travel Dreams With Us</h2>
    <nav class="art-nav">
        <ul class="art-hmenu">
            <li><a href="home.php">Home</a></li>
            <li><a href="contract.php" >Contract</a></li>
            <li><a href="destinatie.php" class="active">Destinatie</a></li>
            <li><a href="client.php">Client</a></li>
        </ul>
    </nav>
</header>
<div class="art-sheet clearfix">
    <div class="art-layout-wrapper">
        <div class="art-content-layout">
            <div class="art-content-layout-row">
                <div class="art-layout-cell art-content">
                    <article class="art-post art-article">
                        <h2 class="art-postheader">Destinatii</h2>
                        <div class="art-postcontent art-postcontent-0 clearfix">
                            <ul>
                                <li><a href="destinatie_inserare.php">Inserare Destinatie</a></li>
            <li><a href="destinatie_cautare.php">Cautare Destinatie</a></li>
            <li><a href="destinatie_modificare.php">Modificare Destinatie</a></li>
            <li><a href="destinatie_stergere.php">Stergere Destinatie</a></li>                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="art-footer">
    <div class="art-footer-inner">
        <p><a href="#">Terms of use</a> | <a href="#">Privacy Policy</a> | <a href="#">Advertise With Us</a></p>
        <p>All Rights Reserved.</p>
        <p class="art-page-footer">
            <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
        </p>
    </div>
</footer>
</div>
<div class="logout">
    <p><a href="logout.php">Deconectare</a></p>
</div>
</body>
</html>
