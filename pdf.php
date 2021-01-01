<?php
    if(!empty($_POST['submit'])){
        // select fields
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

       require("fpdf/fpdf.php");
       $pdf=new FPDF();
       $pdf->AddPage();
       $pdf->SetTextColor(0,0,0);
       $pdf->SetFont('Arial','B',16);
       $pdf->SetTextColor(0,0,255);
       $pdf->Cell(0,10,"Form Data to PDF",0,1);
       $pdf->SetTextColor(0,0,0);
       $pdf->SetFont('Arial','B',10);
       $pdf->Cell(20,10,"First Name:",0,1);
       $pdf->SetFont('Arial','',10);
       $pdf->Cell(20,10,$fname,0,1);
       $pdf->SetFont('Arial','B',10);
       $pdf->Cell(20,10,"Last Name:",0,1);
       $pdf->SetFont('Arial','',10);
       $pdf->Cell(20,10,$lname,0,1);
       

       $file="Your-Data".'.pdf';
       $pdf->output($file,'D');
    }
