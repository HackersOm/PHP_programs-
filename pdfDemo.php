 <?php
    require('fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',20);
    $pdf->Cell(40,40,"This is working ");
    $pdf->Image("Dragon.jpg",30,40);
    $pdf->Output();
?>  
