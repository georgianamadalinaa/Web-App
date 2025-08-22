<?php
$servername = "localhost"; // Sau adresa serverului MySQL
$username = "root"; // Utilizatorul MySQL
$password = ""; // Parola utilizatorului MySQL
$dbname = "agentieturism"; // Numele bazei de date

// Crearea conexiunii
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificarea conexiunii
if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}
?>
