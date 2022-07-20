<?php


$conn=mysqli_connect('localhost','root','','puro_db');
session_start();

$result="SELECT * FROM `payment`;";

$select=mysqli_query($conn,$result);
$price=0;

while($row=mysqli_fetch_assoc($select))
{
    $price=$row['Total_Pay'];
}

$Name=$_SESSION['name'];

require('fpdf184/fpdf.php');

$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 24);

$pdf->Cell(190,20,'Puro_Bakery_Shop',0,1,'C');

$pdf->SetFont('Arial', 'U', 16);

$pdf->Cell(100,20,'Payment Recipt',0,1,'');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(50,8,'Customer Name : ',1,0,'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(80,8,$Name,1,1,'C');



$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(50,8,'Transaction Amount: ',1,0,'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(80,8,$price,1,1,'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(50,8,'Transaction ID',1,0,'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(80,8,'2E56FNFGKNDDL3356K',1,1,'C');



$pdf->Output('recipt.pdf','D');

?>
