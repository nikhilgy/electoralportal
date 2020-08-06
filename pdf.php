<?php 

session_start();
include('connection.php');
$new_email =$_SESSION["email"] ;




$query = "SELECT * FROM ELECTOR WHERE email ='$new_email'";

$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

require('fpdf182/fpdf.php');


class PDF extends FPDF
{
	protected $col = 0; // Current column
protected $y0;    
// Page header
function Header()
{
    // Logo
    $this->Image('images/logo.png',50,8,15);
    // Arial bold 15
    $this->SetFont('Arial','B',15);

    // Move to the right
 //   $this->Cell(55);
    // Title
    $this->SetFillColor(194,194,194);
    $this->Cell(0,12,'National Electoral Portal',1,0,'C','TRUE');
        $this->Image('images/logo.png',50,8,15);

     //
    //$this->SetDrawColor(0,80,180);

    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',15);
    $this->SetFillColor(194,194,194);
    // Page number
    $this->Cell(0,12,'Voter ID- Right To Vote',1,0,'C','TRUE');
}
}




// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();

$pdf->AddPage();
$pdf->Image($result['photo'],10,40,70);
$pdf->SetFont('Times','',12);

$pdf->Output();
?>




 ?>