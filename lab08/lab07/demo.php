<?php
require('mysql.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
    //Title
    $this->SetFont('Arial','',18);
    $this->Cell(0,6,'Staff',0,1,'C');
    $this->Ln(10);
    //Ensure table header is output
    parent::Header();
}
}

//Connect to database
mysql_connect('localhost','root','');
mysql_select_db('dreamhome');

$pdf=new PDF();
$pdf->AddPage();
//First table: put all columns automatically
$pdf->Table('SELECT client.clientno, client.fname, client.lname, viewing.viewdate FROM client INNER JOIN viewing ON client.clientno = viewing.clientno');
$pdf->Output();
?>
