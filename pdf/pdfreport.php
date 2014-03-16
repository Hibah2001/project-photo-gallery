<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'BEST PHOTO GALLERY
 - Customer details',0,1,'C');
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
mysql_connect('mysql.hostinger.co.uk','u646489498_best','u646489498_best');
mysql_select_db('u646489498_best');

$pdf=new PDF();
$pdf->AddPage();
//First table: put all columns automatically
$pdf->Table('select ID, Firstname, Surname, Username, Password from Customer order by ID');
$pdf->AddPage();
//Second table: specify 3 columns
$pdf->AddCol('Email',90,'','C');
$pdf->AddCol('Password',40,'Password');
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table('select Email, Password from Customer order by ID');
$pdf->Output();
?>
