<?php
session_start();
// Optionally define the filesystem path to your system fonts
// otherwise tFPDF will use [path to tFPDF]/font/unifont/ directory
//define("_SYSTEM_TTFONTS", "C:/Windows/Fonts/");
require('tfpdf.php');
class PDF extends tFPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('img/logo.png',10,6,30);
    // Arial bold 15
    $this->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
    $this->SetFont('DejaVu','',14);
    // Move to the right
    $this->Cell(70);
    // Title
    $this->Cell(50,10,'Электронный билет',1,0,'C');
    // Line break
    $this->Ln(20);
}
}

// Instanciation of inherited class
$pdf = new PDF();
//$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',14);
$pdf->Ln(10);
$i = 0;
foreach($_SESSION['user'] as $user => $item_count) {
    //echo "user=" . $user . ", Value=" . $item_count;
  $id_user_a[$i] = $item_count;
  $i++;
}
$id_us = $id_user_a[0];
$name_c = $_SESSION['name_concertmy'];
$number_t =$_SESSION['number_ticketmy'];
$pdf->Write(5,'Владелец: '. $id_user_a[2] . ' ' . $id_user_a[1]);
$pdf->Ln(10);
$pdf->Write(5,'Название мероприятия: '. $name_c);
$pdf->Ln(10);
$pdf->Write(5,'Номер билета: '. $number_t);
$pdf->Output();
?>
