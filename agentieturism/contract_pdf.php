<?php
session_start();

// Verificăm dacă utilizatorul este autentificat
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit();
}

require('fpdf/fpdf.php');
require 'config.php';

class PDF extends FPDF
{
    // Header
    function Header()
    {
        // Select Arial bold 15
        $this->SetFont('Helvetica', 'B', 15);
        // Move to the right
        $this->Cell(80);
        // Framed title
        $this->Cell(30, 10, 'Contracte', 0, 1, 'C');
        // Line break
        $this->Ln(10);
    }

    // Footer
    function Footer()
    {
        // Go to 1.5 cm from bottom
        $this->SetY(-15);
        // Select Arial italic 8
        $this->SetFont('Helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    // Load data
    function LoadData($conn)
    {
        $data = [];
        $sql = "SELECT * FROM contract";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    // Table
    function FancyTable($header, $data)
    {
        // Colors, line width and bold font
        $this->SetFillColor(255, 0, 0);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B');
        // Header
        $w = [10, 40, 40, 30, 20, 40, 30];
        for ($i = 0; $i < count($header); $i++)
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = false;
        foreach ($data as $row) {
            $this->Cell($w[0], 6, $row['Nr_Contract'], 'LR', 0, 'L', $fill);
            $this->Cell($w[1], 6, $row['Id_CNP'], 'LR', 0, 'L', $fill);
            $this->Cell($w[2], 6, $row['Id_destinatie'], 'LR', 0, 'L', $fill);
            $this->Cell($w[3], 6, $row['Data_plecare'], 'LR', 0, 'L', $fill);
            $this->Cell($w[4], 6, $row['Nr_nopti'], 'LR', 0, 'L', $fill);
            $this->Cell($w[5], 6, date('Y-m-d', strtotime($row['Data_plecare'] . ' + ' . $row['Nr_nopti'] . ' days')), 'LR', 0, 'L', $fill);
            $this->Cell($w[6], 6, $row['Suma_plata'], 'LR', 0, 'L', $fill);
            $this->Ln();
            $fill = !$fill;
        }
        // Closing line
        $this->Cell(array_sum($w), 0, '', 'T');
    }
}

$pdf = new PDF();
// Column headings
$header = ['ID', 'Client ID', 'Destinatie ID', 'Data Plecare', 'Nr. Zile', 'Data Sfarsit', 'Suma Totala'];
// Data loading
$data = $pdf->LoadData($conn);
$pdf->SetFont('Helvetica', '', 14);
$pdf->AddPage();
$pdf->FancyTable($header, $data);
$pdf->Output();
?>

