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
    <title>Raport Contracte</title>
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
                                    <h2>Raport Contracte</h2>
                                    <form method="post" action="contract_raport.php">
                                        <label for="start_date">Data început:</label>
                                        <input type="date" id="start_date" name="start_date" required>
                                        <label for="end_date">    Data sfârșit:</label>
                                        <input type="date" id="end_date" name="end_date" required>
                                        <input type="submit" value="Generează Raport">
<a href="contract_pdf.php" class="art-button">Exportă PDF</a>
                                    </form>
                                    
                                    <?php
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                       require 'config.php';

                                        $start_date = $_POST['start_date'];
                                        $end_date = $_POST['end_date'];
                                        // Calculam data de sfârșit a fiecărui contract și verificăm dacă se încadrează în intervalul selectat
                                        $sql = "SELECT *, DATE_ADD(Data_plecare, INTERVAL Nr_nopti DAY) AS data_sfarsit FROM contract 
                                                WHERE Data_plecare BETWEEN '$start_date' AND '$end_date' OR 
                                                      DATE_ADD(Data_plecare, INTERVAL Nr_nopti DAY) BETWEEN '$start_date' AND '$end_date'
                                                ORDER BY Suma_plata ASC";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            echo "<h3>Contracte între $start_date și $end_date:</h3>";
                                            echo "<table>";
                                            echo "<tr><th>ID</th><th>Client ID</th><th>Destinatie ID</th><th>Data Plecare</th><th>Număr de Zile</th><th>Data Sfârșit</th><th>Suma Totală</th></tr>";
                                            while($row = $result->fetch_assoc()) {
                                                echo "<tr><td>" . $row["Nr_Contract"] . "</td><td>" . $row["Id_CNP"] . "</td><td>" . $row["Id_destinatie"] . "</td><td>" . $row["Data_plecare"] . "</td><td>" . $row["Nr_nopti"] . "</td><td>" . $row["data_sfarsit"] . "</td><td>" . $row["Suma_plata"] . "</td></tr>";
                                            }
                                            echo "</table>";
                                        } else {
                                            echo "Nu există contracte în această perioadă.";
                                        }
                                        $conn->close();
                                    }
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
