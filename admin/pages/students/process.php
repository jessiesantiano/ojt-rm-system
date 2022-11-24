<?php

    // connection
    include "../../../connection.php";

    // insert to database
     if(isset($_POST['add'])){
        $Spassword = uniqid();
        $Sname = $_POST['Sname'];
        $Slname = $_POST['Slname'];
        $Smname = $_POST['Smname'];
        $Scourse = $_POST['Scourse'];
        $Syear = $_POST['Syear'];
        $Sblock = $_POST['Sblock'];
        $Sgender = $_POST['Sgender'];
        $Semail = $_POST['Semail'];
        $studentID = $_POST['studentID'];
        $courseCode = $_POST['courseCode'];
        $Swcompany = $_POST['Swcompany'];

        if ($courseCode == 'Education Dept.') {
            $getSupervisor= mysqli_query($db, "SELECT * FROM schools WHERE school = '$Swcompany'");
        }else{
            $getSupervisor= mysqli_query($db, "SELECT * FROM companies WHERE company = '$Swcompany'");
        }
        $getSupervisor = $getSupervisor -> fetch_assoc();
        ['supervisor' => $supervisor] = $getSupervisor;

        $getStudent = mysqli_query($db, "SELECT * FROM students WHERE studentID='$studentID'");
        if (mysqli_num_rows($getStudent) > 0) {
            header("location: index.php");
            session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Student already added!";
            $_SESSION['icon'] = "warning";
        } else {

        $query = "INSERT INTO students (Sname, Slname, Smname, Scourse, Syear, Sblock, Sgender, Semail, Spassword, studentID, courseCode, Swcompany, Swemployer) VALUES (UPPER('$Sname'), UPPER('$Slname'), UPPER('$Smname'), '$Scourse', '$Syear', '$Sblock', '$Sgender', '$Semail', 'LCC-$Spassword', '$studentID', '$courseCode', '$Swcompany', UPPER('$supervisor'))";
        mysqli_query($db, $query);
        
    

        $trainees = "SELECT count(id) AS total FROM students WHERE Swcompany='$Swcompany'";
        $rows_results = mysqli_query($db, $trainees);
        $values = mysqli_fetch_assoc($rows_results);
        $total = $values['total'];
        if ($courseCode == 'Education Dept.') {
            $traineeTotal = "UPDATE schools SET trainees='$total' WHERE school='$Swcompany'";
        }else{
            $traineeTotal = "UPDATE companies SET trainees='$total' WHERE company='$Swcompany'";
        }
        mysqli_query($db, $traineeTotal);

        header("location: index.php");
        session_start();
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "New student added successfully!";
        $_SESSION['icon'] = "success";
    }
}

    // code for retrieve from database
    // $courseCode is a global variable / in template
        $results = mysqli_query($db, "SELECT * FROM students WHERE courseCode = '$courseCode' OR Swcompany = '$accountFor'");

        
    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $prev = $_POST['prev'];
            $Sname = $_POST['Sname'];
            $Slname = $_POST['Slname'];
            $Smname = $_POST['Smname'];
            // $Semail = $_POST['Semail'];
            $Scourse = $_POST['Scourse'];
            $Syear = $_POST['Syear'];
            $Sblock = $_POST['Sblock'];
            $Sgender = $_POST['Sgender'];
            $studentID = $_POST['studentID'];
            $Swcompany = $_POST['Swcompany'];

            if ($prev != $Swcompany) {
                if ($courseCode = 'Education Dept.') {
                    mysqli_query($db, "UPDATE schools SET trainees=trainees-1 WHERE school='$prev'");
                }
                if ($courseCode = 'Economics Dept.') {
                    mysqli_query($db, "UPDATE companies SET trainees=trainees-1 WHERE company='$prev'");
                }
            }
         
            mysqli_query($db, "UPDATE students SET Sname=UPPER('$Sname'), Smname=UPPER('$Smname'), Slname=UPPER('$Slname'), Scourse='$Scourse', Syear='$Syear', Sblock='$Sblock', Sgender='$Sgender', studentID='$studentID', Swcompany='$Swcompany' WHERE id=$id");
           

            $trainees = "SELECT count(id) AS total FROM students WHERE Swcompany='$Swcompany'";
            $rows_results = mysqli_query($db, $trainees);
            $values = mysqli_fetch_assoc($rows_results);
            $total = $values['total'];
            if ($courseCode = 'Education Dept.') {
                  mysqli_query($db,  "UPDATE schools SET trainees='$total' WHERE school='$Swcompany'");
            } 
            if ($courseCode = 'Economics Dept.') {
                  mysqli_query($db, "UPDATE companies SET trainees='$total' WHERE company='$Swcompany'");
            }
           
            
            $_SESSION['message'] = "record updated";
            $_SESSION['msg_type'] = "green-500";
           
            header('location: index.php');
            session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Student details updated successfully!";
            $_SESSION['icon'] = "success";
        }
    // delete
    if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $prev = $_GET['prev'];
            mysqli_query($db, "DELETE FROM students WHERE id=$id");
            if ($courseCode = 'Education Dept.') {
                  mysqli_query($db, "UPDATE schools SET trainees = trainees-1 WHERE school='$prev' AND trainees > 0");
            }
            if ($courseCode = 'Economics Dept.') {
                  mysqli_query($db, "UPDATE companies SET trainees = trainees-1 WHERE company='$prev' AND trainees > 0");
            }
            $_SESSION['message'] = "Address deleted!"; 
            header('location: index.php');
            session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Student deleted successfully!";
            $_SESSION['icon'] = "success";
        }


// View files
if (isset($_GET['view_id'])) {
    $id = $_GET['view_id'];
    // fetch file to download from database
    $select = "SELECT * FROM `documents` WHERE id=$id";
    $result = $db->query($select);
    while($row = $result->fetch_object()){

    
    $path = '../../../student/pages/uploads/';
    $pdf = $row->name;
    $filename = $path.$pdf;
    }

        // Header content type
        header('Content-type: application/pdf');

        header('Content-Disposition: inline; filename="' . $filename . '"');

        header('Content-Transfer-Encoding: binary');

        header('Accept-Ranges: bytes');

        // Read the file
        @readfile($filename);
}

// Downloads files
if (isset($_GET['download_id'])) {
    $id = $_GET['download_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM documents WHERE id=$id";
    $result = mysqli_query($db, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = '../../../student/pages/uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../../../student/pages/uploads/' . $file['name']));
        readfile('../../../student/pages/uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE documents SET downloads=$newCount WHERE id=$id";
        mysqli_query($db, $updateQuery);
         header('location: index.php');
            session_start();
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "Document downloaded successfully!";
        $_SESSION['icon'] = "success";
        exit;
    }
}

// View files
if (isset($_GET['viewR_id'])) {
    $id = $_GET['viewR_id'];

    // fetch file to download from database
    $select = "SELECT * FROM `reports` WHERE id=$id";
    $result = $db->query($select);
    while($row = $result->fetch_object()){

    $path = '../../../student/pages/uploads/';
    $pdf = $row->name;
    $filename = $path.$pdf;
    }

        // Header content type
        header('Content-type: application/pdf');

        header('Content-Disposition: inline; filename="' . $filename . '"');

        header('Content-Transfer-Encoding: binary');

        header('Accept-Ranges: bytes');

        // Read the file
        @readfile($filename);



}

// Downloads files
if (isset($_GET['downloadR_id'])) {

    $id = $_GET['downloadR_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM reports WHERE id=$id";
    $result = mysqli_query($db, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = '../../../student/pages/uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../../../student/pages/uploads/' . $file['name']));
        readfile('../../../student/pages/uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE reports SET downloads=$newCount WHERE id=$id";
        mysqli_query($db, $updateQuery);
        header('location: index.php');

        exit;
    }
}


    // Mark as check
    if (isset($_POST['check_id'])) {

        $id = $_POST['id'];
        $comment = $_POST['comment'];


        mysqli_query($db, "UPDATE reports SET status='checked', comment='$comment' WHERE id=$id");

            header ("location: index.php");

        // header ("location: index.php?view=view&id=$id");
        
    }




// Uploads certificate
if (isset($_POST['Dupload'])) { // if upload button on the form is clicked
    // // data initialization
session_start();

    $title = $_POST['title'];
    $des = $_POST['des'];
    $studentID = $_POST['studentID'];
    $ID = $_POST['ID'];

    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../../../student/pages/uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf'])) {



         header("location: index.php?view=view&id=$ID");
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "You file extension must be .pdf";
        $_SESSION['icon'] = "warning";

    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
                header("location: index.php?view=view&id=$ID");

        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "You file is too large!";
        $_SESSION['icon'] = "warning";

    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO documents (name, size, downloads, title, destination, studentID) VALUES 
            ('$filename', $size, 0, '$title', '$des', '$studentID')";
             
            if (mysqli_query($db, $sql)) {
                mysqli_query($db, "UPDATE students SET isCertificate='uploaded' WHERE id=$ID");
                header("location: index.php?view=view&id=$ID");
                $_SESSION['status'] = "Woo hoo!";
                $_SESSION['text'] = "Document uploaded successfully!";
                $_SESSION['icon'] = "success";

            }
        } else {
                   header("location: index.php?view=view&id=$ID");

            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Upload file failed.";
            $_SESSION['icon'] = "error";

        }
    }
}

// Delete dertificate
if (isset($_GET['delete_id'])) {
session_start();

    $id = $_GET['delete_id'];
    $redirectID = $_GET['redirectID'];
    mysqli_query($db, "DELETE FROM documents WHERE id=$id");
    mysqli_query($db, "UPDATE students SET isCertificate='requested' WHERE id=$redirectID");
    header("location: index.php?view=view&id=$redirectID");
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Document deleted successfully!";
    $_SESSION['icon'] = "success";
}
