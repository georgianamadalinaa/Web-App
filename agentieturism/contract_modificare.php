<?php
session_start();

// Verificăm dacă utilizatorul este autentificat
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nr_contract = $_POST['nr_contract'];
    $id_angajat = $_POST['id_angajat'];
    $id_cnp = $_POST['id_cnp'];
    $id_destinatie = $_POST['id_destinatie'];
    $data_plecare = $_POST['data_plecare'];
    $nr_nopti = $_POST['nr_nopti'];
    $transport = $_POST['transport'];
    $suma_plata = $_POST['suma_plata'];

    $sql = "UPDATE Contract 
            SET id_angajat='$id_angajat', Id_CNP='$id_cnp', Id_Destinatie='$id_destinatie', Data_plecare='$data_plecare', Nr_nopti='$nr_nopti', Transport='$transport', Suma_plata='$suma_plata'
            WHERE Nr_Contract='$nr_contract'";

    if ($conn->query($sql) === TRUE) {
        echo "Contractul a fost modificat cu succes!";
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
    <meta charset="utf-8">
    <title>Inserare Contract</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato&amp;subset=latin">

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

<h1 class="art-headline">
    <a href="/">Vip Travel</a>
</h1>
<h2 class="art-slogan">Realize Your Travel Dreams With Us</h2>



<nav class="art-nav">
    <ul class="art-hmenu">
        <li><a href="home.html" class="active">Home</a>
                    </li>
        <li><a href="contract.php">Contract</a>
            <ul>
                <li><a href="contract_inserare.php">Inserare</a></li>
                <li><a href="contract_cautare.php">Cautare</a></li>
                <li><a href="contract_modificare.php">Modificare</a></li>
                <li><a href="contract_stergere.php">Stergere</a></li>
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
            </ul>
        </li>
    </ul>
</nav>



                    
</header>

<body>
    <div class="container">
        <h2>Modificare Contract</h2>
        <form method="post" action="">
            <label for="nr_contract">Număr Contract:</label>
            <input type="text" id="nr_contract" name="nr_contract" required><br>

            <label for="id_angajat">ID Angajat:</label>
            <input type="text" id="id_angajat" name="id_angajat" required><br>

            <label for="id_cnp">ID CNP:</label>
            <input type="text" id="id_cnp" name="id_cnp" required><br>

            <label for="id_destinatie">ID Destinatie:</label>
            <input type="text" id="id_destinatie" name="id_destinatie" required><br>

            <label for="data_plecare">Data Plecare:</label>
            <input type="date" id="data_plecare" name="data_plecare" required><br>

            <label for="nr_nopti">Nr. Nopți:</label>
            <input type="number" id="nr_nopti" name="nr_nopti" required><br>

            <label for="transport">Transport:</label>
            <input type="text" id="transport" name="transport" required><br>

            <label for="suma_plata">Suma Plata:</label>
            <input type="number" id="suma_plata" name="suma_plata" required><br>

            <button type="submit">Modificare</button>
        </form>
    </div>
</body>
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

</div>


</html>
