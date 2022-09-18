<?php 

// Include the main TCPDF library (search for installation path).
require_once('TCPDF/tcpdf.php');

date_default_timezone_set("Asia/Manila");
    $date = date("D M d, Y h:i: A");
class PDF extends TCPDF{
    // PAGE HEADER
    public function Header(){
        $imageFile = K_PATH_IMAGES.'img.png';
        // $this->Image($imageFile, 40, 10, 20, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->Ln(5);
        $this->SetFont('helvetica', 'B', 9);
        // width
        $this->Cell(189, 5, 'Ligao Community College', 0, 1, 'C');
        $this->Cell(189, 5, 'Ligao City, Albay', 0, 1, 'C');
    }


    // PAGE FOOTER
    public function Footer(){
    // test some inline CSS
        $html = '<p style="color:#CC0000;">Note: Invalid without supervisor signature</p>';
        $this->writeHTML($html, true, false, true, false, '');
    }
}

// create new PDF document
$pdf = new PDF('p', 'mm', 'LEGAL', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Administrator');
$pdf->SetTitle('Midterm Evaluation Result');
$pdf->SetSubject('Student Information');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');


// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);


// Add a page
// This method has several options, check the source code documentation for more information.
 $pdf->AddPage();
//  BODY OF THE PAGE
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body style="font-size: 12px;">
    <div>
        <p style="background-color: #f8f8ff;">Trainee: <b>Paul Justine Pintang</b></p>
        <p >DATE: '.$date.'</p>
	</div>
    <div>
		<b><i>
			5 means, Excellent/Outstanding: 4 means, very
			satisfactory: 3 means, Satisfactory: 2 means Unsatisfactory: and 1 means Poor.
		</i></b>
        <div>
            <h6>Section 1 - PLANNING</h6>
            <p>1. Course Long Term Plan – logical flow,content sufficient and appropriate to level. = <b>5</b></p>
            <p>2. Lesson Plan – accurate content and activities flow smoothly. Easily referenced. = <b>5</b></p>
            <p>3. Demonstrates clear understanding of methodology or strategy being taught. = <b>5</b></p>
            <p>4. Opportunities for candidate evaluation throughout. = <b>5</b></p>
        </div>
        <div>
            <h6>Section 2 – TEACHING APPROACH</h6>
            <p>1. Teaching methods chosen are appropriate and effective for topic/skill and encourages maximum class participation = <b>5</b></p>
            <p>2. Voice is clear and audible, keeps directions short and simple = <b>5</b></p>
            <p>3. Visual and tactile communication used when appropriate = <b>5</b></p>
            <p>4. Teaching of topic/skill done in logical manageable chunks. = <b>5</b></p>
        </div>
        <div>
            <h6>Section 3 – EVALUATION</h6>
            <p>1. Recognizes the need for and provides
            immediate, specific and constructive feedback
            during practice attempts, varies approach as
            needed for success. = <b>5</b></p>
            <p>2. Demonstrates ongoing evaluation and
            references performance award must sees. = <b>5</b></p>
            <p>3. Uses a variety of corrective techniques and
            breaks down skill when correcting. = <b>5</b></p>
            <p>4. Understands and demonstrates principles of
            evaluation and evaluation standards. = <b>5</b></p>
        </div>
		<h5>Total = 1.5</h5>

		<h6>Equivalent Rating</h6>
        <div>
            1.0 – 99 -100%; 1.1 – 98%; 1.2 – 97%; 1.3 – 96%; 1.4 – 95% (Outstanding); 1.5 – 94%; 1.6 – 93%;
            1.7 – 92% (Superior); 1.8 – 91%; 1.9 – 90%; 2.0 – 89%; 2.1 – 88%; 2.2 – 87%; 2.3 – 86%; 2.4 –
            85% (Very Satisfactory); 2.5 – 84%; 2.6 – 82-83%; 2.7 – 80-81% (Satisfactory); 2.8 – 78-79%; 2.9
            – 76-77%; 3.0 – 75% (Fair); 3.1-4.0 CONDITIONAL FAILURE (Lowest Possible Rating)
            5.0 – Failure; INC - INCOMPLETE
        </div>

        <p style="margin-top: 20px;">
            Supervisor Signature
        </p>
	</div>
</body>
</html>';
     $pdf->writeHTML($html, true, false, true, false, '');

// END

$pdf->Output('midterm.pdf', 'I');
?>