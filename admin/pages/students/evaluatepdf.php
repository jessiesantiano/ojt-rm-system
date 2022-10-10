<?php 
session_start();
// Include the main TCPDF library (search for installation path).
require_once ("../../../connection.php");
require_once('../../TCPDF-main/tcpdf.php');

date_default_timezone_set("Asia/Manila");
    $date = date("D M d, Y h:i: A");

    // if (isset($_GET['evaluate'])) {
    //     $section1 = $_GET['section1'];
    //     echo $section1;
    // }
            $evaluator = $_SESSION['name'];
           if (isset($_GET['evaluate'])) {
                // profile info
                $id = $_GET['id'];
                $getStudent = mysqli_query($db, "SELECT * FROM students WHERE id=$id");
                while($row = mysqli_fetch_array($getStudent)){
                    $Sname = $row['Sname'];
                    $Smname = $row['Smname'];
                    $Slname = $row['Slname'];
                    $Scourse = $row['Scourse'];
                    $midterm = $row['midterm'];
                }

                // section 1 -planning
                $s1rate1 = $_GET['s1-rate1'];
                $s1rate2 = $_GET['s1-rate2'];
                $s1rate3 = $_GET['s1-rate3'];
                $s1rate4 = $_GET['s1-rate4'];
                $s1rate5 = $_GET['s1-rate5'];
                $s1rate6 = $_GET['s1-rate6'];
                $s1rate7 = $_GET['s1-rate7'];
                // section 2 - teaching approach
                $s2rate1 = $_GET['s2-rate1'];
                $s2rate2 = $_GET['s2-rate2'];
                $s2rate3 = $_GET['s2-rate3'];
                $s2rate4 = $_GET['s2-rate4'];
                $s2rate5 = $_GET['s2-rate5'];
                $s2rate6 = $_GET['s2-rate6'];
                $s2rate7 = $_GET['s2-rate7'];
                // section 3 - evaluation
                $s3rate1 = $_GET['s3-rate1'];
                $s3rate2 = $_GET['s3-rate2'];
                $s3rate3 = $_GET['s3-rate3'];
                $s3rate4 = $_GET['s3-rate4'];
                $s3rate5 = $_GET['s3-rate5'];
                $s3rate6 = $_GET['s3-rate6'];

                $s1total = $s1rate1 + $s1rate2 + $s1rate3 + $s1rate4 + $s1rate5 + $s1rate6 + $s1rate7;
                $s2total = $s2rate1 + $s2rate2 + $s2rate3 + $s2rate4 + $s2rate5 + $s2rate6 + $s2rate7;
                $s3total = $s3rate1 + $s3rate2 + $s3rate3 + $s3rate4 + $s3rate5 + $s3rate6;

                // subtotal
                $subTotal = $s1total + $s2total +$s3total;

                // formula
                // stotal/100x50+50 = average
                 $Average = $subTotal/100*50+50;
                 if ($midterm == NULL) {
                     mysqli_query($db, "UPDATE students SET midterm='$Average' WHERE id=$id");

                 }else{
                     mysqli_query($db, "UPDATE students SET final='$Average' WHERE id=$id");

                 }


            }


class PDF extends TCPDF{
    public function Header(){
        $imageFile = K_PATH_IMAGES.'logo.jpg';
        $this->Image($imageFile, 40, 10, 20, '', 'JPG', '', 'T', false, 300, '', false, false,
        0, false, false, false);
        $this->Ln(0);

        $this->SetFont('helvetica', '', 8,);
        $this->Cell(180, 3, 'Republic of the Philippines', 0, 1, 'C');
        $this->Cell(180, 3, 'Commision on Higher Education', 0,1, 'C');
        $this->Cell(180, 3, 'Region V', 0,1, 'C');
        $this->SetFont('helvetica', 'B', 11);
        $this->Cell(180, 3, 'LIGAO COMMUNITY COLLEGE', 0, 1, 'C');
        $this->SetFont('helvetica', '', 8,);
        $this->Cell(180, 3, 'Soledad Street, Guilid, Ligao City, 4505', 0, 1, 'C');
        $this->SetFont('helvetica', 'B', 11);
        $this->Cell(180, 1, '________________________________________________________________________________', 0, 1, 'C');
    }

}
// create new PDF document
$pdf = new PDF('p', 'mm', 'LEGAL', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Administrator');
$pdf->SetTitle('Evaluation Result');
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
$pdf->SetFont('dejavusans', '', 14, 'L', true);


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
        <p style="background-color: #f8f8ff;">Trainee: <b>'.$Sname.' '.$Smname.' '.$Slname.'</b></p>
        <p style="background-color: #f8f8ff;">Evaluate by: <b>'.$evaluator.'</b></p>
        <p style="background-color: #f8f8ff;">DATE: '.$date.'</p>
	</div>
    <div>
		<b><i>
			5 means, Excellent/Outstanding: 4 means, very
			satisfactory: 3 means, Satisfactory: 2 means Unsatisfactory: and 1 means Poor.
		</i></b>
                    <div>
                        <h6>Section 1 - PLANNING</h6>
                        <p>1. Course Long Term Plan – logical flow,content sufficient and appropriate to level. = <b>'.$s1rate1.'</b></p>
                        <p>2. Lesson Plan – accurate content and activities flow smoothly. Easily referenced. = <b>'.$s1rate2.'</b></p>
                        <p>3. Demonstrates clear understanding of methodology or strategy being taught. = <b>'.$s1rate3.'</b></p>
                        <p>4. Opportunities for candidate evaluation throughout. = <b>'.$s1rate4.'</b></p>
                        <p>5. Appropriate and accurate use of resources. = <b>'.$s2rate5.'</b></p>
                        <p>6. Able to plan different kinds of lessons. = <b>'.$s2rate6.'</b></p>
                        <p>7. Understands and identifies differences in learning and performance. = <b>'.$s2rate7.'</b></p>
                        <b>Total/Average = '.$s1total.'</b>
                    </div>
                    <div>
                        <h6>Section 2 – TEACHING APPROACH</h6>
                        <p>1. Teaching methods chosen are appropriate and effective for topic/skill and encourages maximum class participation = <b>'.$s2rate1.'</b></p>
                        <p>2. Voice is clear and audible, keeps directions short and simple = <b>'.$s2rate2.'</b></p>
                        <p>3. Visual and tactile communication used when appropriate = <b>'.$s2rate3.'</b></p>
                        <p>4. Teaching of topic/skill done in logical manageable chunks. = <b>'.$s2rate4.'</b></p>
                        <p>5. Maximum participant practice time is allotted and is realistic and specific to topic/skill = <b>'.$s2rate5.'</b></p>
                        <p>6. Portrays Professional image at all times. = <b>'.$s2rate6.'</b></p>
                        <p>7. Uses teaching resources, curriculum materials, and content area standards. = <b>'.$s2rate7.'</b></p>
                        <b>Total/Average = '.$s2total.'</b>
                    </div>
                    <div>
                        <h6>Section 3 – EVALUATION</h6>
                        <p>1. Recognizes the need for and provides
                        immediate, specific and constructive feedback
                        during practice attempts, varies approach as
                        needed for success. = <b>'.$s3rate1.'</b></p>
                        <p>2. Demonstrates ongoing evaluation and
                        references performance award must sees. = <b>'.$s3rate2.'</b></p>
                        <p>3. Uses a variety of corrective techniques and
                        breaks down skill when correcting. = <b>'.$s3rate3.'</b></p>
                        <p>4. Understands and demonstrates principles of
                        evaluation and evaluation standards. = <b>'.$s3rate4.'</b></p>
                        <p>5. Identifies which skill error needs to be corrected first. = <b>'.$s3rate5.'</b></p>
                        <p>6. Encourages self-assurance in all students. = <b>'.$s3rate6.'</b></p>
                        <b>Total/Average = '.$s3total.'</b>
                    </div>
                    <div style="margin: 24px 0 12px 0;" class="imgcontainer">
                    </div>
                    <div style="margin-top: 204px;" class="imgcontainer">
                        <h5>Total = '.$Average.'</h5>
                        <h6>Equivalent Rating</h6>
                        <div>
                            1.0 – 99 -100%; 1.1 – 98%; 1.2 – 97%; 1.3 – 96%; 1.4 – 95% (Outstanding); 1.5 – 94%; 1.6 – 93%;
                            1.7 – 92% (Superior); 1.8 – 91%; 1.9 – 90%; 2.0 – 89%; 2.1 – 88%; 2.2 – 87%; 2.3 – 86%; 2.4 –
                            85% (Very Satisfactory); 2.5 – 84%; 2.6 – 82-83%; 2.7 – 80-81% (Satisfactory); 2.8 – 78-79%; 2.9
                            – 76-77%; 3.0 – 75% (Fair); 3.1-4.0 CONDITIONAL FAILURE (Lowest Possible Rating)
                            5.0 – Failure; INC - INCOMPLETE
                        </div>
                        <div style="margin: 24px 0 12px 0;" class="imgcontainer">
                            <img style="width: 70px; height: 70px;" src="" alt="Avatar" class="avatar">
                        </div>
                        <p>
                            Evaluator Signature
                        </p>
                    </div>
</body>
</html>';
     $pdf->writeHTML($html, true, false, true, false, '');

// END

$pdf->Output(''.$Slname.' Evaluation Result-.pdf', 'I');
?>