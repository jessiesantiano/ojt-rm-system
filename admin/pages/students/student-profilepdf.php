<?php 

require_once ("../../../connection.php");
// Include the main TCPDF library (search for installation path).
require_once('../../TCPDF-main/tcpdf.php');

if (isset($_GET['generate_id'])) {
    $id = $_GET['id'];
    $studentID = $_GET['studentID'];
    $getStudent = mysqli_query($db, "SELECT * FROM students WHERE id=$id");
    while($row = mysqli_fetch_array($getStudent)){
      	$Sname = $row['Sname'];
        $Smname = $row['Smname'];
        $Slname = $row['Slname'];
        $Scourse = $row['Scourse'];
        $Syear = $row['Syear'];
        $Sblock = $row['Sblock'];
        $studentID = $row['studentID'];
        $Semail = $row['Semail'];
        $Sstreet = $row['Sstreet'];
        $Scity = $row['Scity'];
        $Sstate = $row['Sstate'];
        $Szipcode = $row['Szipcode'];
        $Sbday = $row['Sbday'];
        $Sage = $row['Sage'];
        $Sgender = $row['Sgender'];
        $Snumber = $row['Snumber'];
        $Sphoto = $row['Sphoto'];
        $Sinsurance = $row['Sinsurance'];
        $Sph = $row['Sph'];
        $Sparentph = $row['Sparentph'];
        $Sphnumber = $row['Sphnumber'];
        $Svax = $row['Svax'];
        $S1dose = $row['S1dose'];
        $S2dose = $row['S2dose'];
        $Sbooster = $row['Sbooster'];
        $Svaxbooster = $row['Svaxbooster'];
        $Swstatus = $row['Swstatus'];
        $Swname = $row['Swname'];
        $Swcompany = $row['Swcompany'];
        $Swnumber = $row['Swnumber'];
        $Swlocation = $row['Swlocation'];
        $Swemployer = $row['Swemployer'];
        $Swcontact = $row['Swcontact'];
        $Swcontact = $row['Swcontact'];
        $courseCode = $row['courseCode'];
    }
}    
// set default header data
class PDF extends TCPDF
{
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
$pdf = new PDF('p', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator('OJT RECORD MONITORING SYSTEM');
$pdf->SetAuthor('Administrator');
$pdf->SetTitle('Student Profile');
$pdf->SetSubject('General Report of Student Profile');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');


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


// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('helvetica', '', 12, '', true);



// Add a page
// This method has several options, check the source code documentation for more information.


// add a page
$pdf->AddPage();
// Start First Page Group
$pdf->startPageGroup();
// $pdf->Ln(10);
// $pdf->SetFont('helvetica', 'B', 12);
// $pdf->Cell(180, 3, 'Student Profile Report', 0, 1, 'C');
// $pdf->SetFont('times', '', 12);
$html = '
<style>
body{
    font-style: "Times New Roman" ;
    font-size:12px;
    margin: 0;
    padding:0;
}

</style>

<body>
<center><h4 style="text-align:center;">Student Information Report</h4></center>

<div style="  text-align: center;
margin: 24px 0 12px 0;" class="imgcontainer">
  <img style="  width: 70px;
  height: 70px;
  border-radius: 50%;" src=src="../../../student/image/'.$Sphoto.'" alt="Avatar" class="avatar">
</div>

<p><b>Name:</b> <span>'.$Sname.' '.$Smname.' '.$Slname.'</span> </p>
<p><b>Student ID:</b> <span>'.$studentID.'</span> </p>
<p><b>Course:</b> <span>'.$Scourse.' '.$Syear.' '.$Sblock.'</span> </p>
<p><b>Email:</b> <span>'.$Semail.'</span> </p>
<p><b>Contact no.:</b> <span>'.$Snumber.'</span> </p>
<p><b>Address:</b> <span>'.$Sstreet.', '.$Scity.', '.$Sstate.', '.$Szipcode.' </span> </p>
<p><b>Gender:</b> <span>'.$Sgender.'</span> </p>
<p><b>Birthday:</b> <span>'.$Sbday.'</span> </p>
<p><b>Age:</b> <span>'.$Sage.'</span> </p>
<p></p>
<p></p>

<center><h4 style="text-align:center;">Health Student Information</h4></center>
<p><b>Vaccine:</b> <span>'.$Svax.'</span> </p>
<p><b>First Dose:</b> <span>'.$S1dose.'</span> </p>
<p><b>Second Dose:</b> <span>'.$S2dose.'</span> </p>
<p><b>Booster:</b> <span>'.$Sbooster.'</span> </p>
<p><b>Type of Booster:</b> <span>'.$Svaxbooster.'</span> </p>
<p></p>
<p></p>

<center><h4 style="text-align:center;">On-the-Job Training (OJT) Information</h4></center>
<p><b>Name of Company/School:</b> <span>'.$Swcompany.'</span> </p>
<p><b>No. of hours to complete:</b> <span>'.$Swnumber.'</span> </p>
<p><b>Company/School Address:</b> <span>'.$Swlocation.'</span> </p>
<p><b>Name of Supervisor:</b> <span>'.$Swemployer.'</span> </p>
<p><b>Contact no.:</b> <span>'.$Swcontact.'</span> </p>
<p></p>
<p></p>
<p></p>



<h3 style="text-align:center;margin-to">On-the-Job Training (OJT) Documents</h3>

<table border="1"  align="center"  cellpadding="1">
 <tr nobr="true">
  <th colspan="3"><h3>List of Documents Before OJT</h3></th>
 </tr>
 <tr nobr="true">
  <th><b>Name of Document</b></th>
  <th><b>Name of File</b></th>
  <th><b>Date Uploaded</b></th>
 </tr>';

 $getStudent = mysqli_query($db, "SELECT * FROM documents WHERE studentID ='" . $_GET['studentID'] . "' AND destination='Before OJT Requirements'");
while ($row = mysqli_fetch_array($getStudent)) {
    $title = $row['title'];
    $name = $row['name'];
    $date = $row['date'];

 $html .='
 <tr nobr="true">
  <td>'.$title.'</td>
  <td>'.$name.'</td>
  <td>'.$date.'</td>
 </tr>';
}

 $html .='

</table>
<p></p>


<table border="1"  align="center"  cellpadding="1">
 <tr nobr="true">
  <th colspan="3"><h3>List of Documents After OJT</h3></th>
 </tr>
 <tr nobr="true">
  <th><b>Name of Document</b></th>
  <th><b>File name</b></th>
  <th><b>Date Uploaded</b></th>
 </tr>';

 $getStudent = mysqli_query($db, "SELECT * FROM documents WHERE studentID ='" . $_GET['studentID'] . "' AND destination='After OJT Requirements'");
while ($row = mysqli_fetch_array($getStudent)) {
    $title = $row['title'];
    $name = $row['name'];
    $date = $row['date'];

 $html .='
 <tr nobr="true">
  <td>'.$title.'</td>
  <td>'.$name.'</td>
  <td>'.$date.'</td>
 </tr>';
}

 $html .='

</table>

<p></p>
<p></p>
<h3 style="text-align:center;margin-to">On-the-Job Training (OJT) Reports</h3>

<table border="1"  align="center" cellpadding="3" >
 <tr nobr="true">
  <th colspan="4"><h3>List of Reports</h3></th>
 </tr>
 <tr nobr="true">
  <th><b>Name of Report</b></th>
  <th><b>File name</b></th>
  <th><b>Date Uploaded</b></th>
  <th><b>Status</b></th>
 </tr>';

 $getStudent = mysqli_query($db, "SELECT * FROM reports WHERE studentID ='" . $_GET['studentID'] . "'");
while ($row = mysqli_fetch_array($getStudent)) {
    $title = $row['title'];
    $name = $row['name'];
    $date = $row['date'];
    $status = $row['status'];

 $html .='
 <tr nobr="true">
  <td>'.$title.'</td>
  <td>'.$name.'</td>
  <td>'.$date.'</td>
  <td>'.$status.'</td>
 </tr>';
}

 $html .='

</table>

</body>
</html>';






$pdf->writeHTML($html, true, false, true, false, '');
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');
