<?php
session_start();

// Verificăm dacă utilizatorul este autentificat
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}

require 'config.php';

$sql = "SELECT * FROM client ORDER BY Nume_Cli ASC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Clienti</title>
    <link rel="stylesheet" href="style.css" media="screen">
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
                <a href="home.php">Vip Travel</a>
            </h1>
            <h2 class="art-slogan">Realize Your Travel Dreams With Us</h2>
            <nav class="art-nav">
                <ul class="art-hmenu">
                    <li><a href="home.php" class="active">Home</a></li>
                    <li><a href="contract.php">Contract</a></li>
                    <li><a href="destinatie.php">Destinatie</a></li>
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
                                <div class="art-postcontent art-postcontent-0 clearfix">
                                    <h2>Clienti</h2>
                                    <?php
                                    if ($result->num_rows > 0) {
                                        echo "<table>";
                                        echo "<tr><th>ID</th><th>Nume</th><th>Prenume</th><th>Telefon</th></tr>";
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr><td>" . $row["Id_CNP"] . "</td><td>" . $row["Nume_Cli"] . "</td><td>" . $row["Prenume_Cli"] . "</td><td>" . $row["Telefon_Cli"] . "</td></tr>";
                                        }
                                        echo "</table>";
                                    } else {
                                        echo "Nu există clienți.";
                                    }
                                    $conn->close();
                                    ?>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="art-footer">
            <div class="art-footer-inner">
                <div style="position:relative;display:inline-block;padding-left:138px;padding-right:138px">
                    <p><a href="#">Terms of use</a> | <a href="#">Privacy Policy</a> | <a href="#">Advertise With Us</a>&nbsp;</p>
                    <p>All Rights Reserved.</p>
                </div>
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
