<?php

    // connection
    include "../../../connection.php";


    // insert to database
    if(isset($_POST['add'])){
        $Spassword = uniqid();
        $Sname = $_POST['Sname'];
        $Slname = $_POST['Slname'];
        $Smname = $_POST['Smname'];
        $Sgender = $_POST['Sgender'];
        $Semail = $_POST['Semail'];
        $studentID = $_POST['studentID'];
        $courseCode = $_POST['courseCode'];
        $query = "INSERT INTO students (Sname, Slname, Smname, Sgender, Semail, Spassword, studentID, courseCode) VALUES ('$Sname', '$Slname', '$Smname', '$Sgender', '$Semail', 'LCC-$Spassword', '$studentID', '$courseCode')";
        mysqli_query($db, $query);

        $_SESSION['message'] = "new record has been saved";
        $_SESSION['msg_type'] = "green-500";

        header("location: index.php");
    }

    // code for retrieve from database
    // $courseCode is a global variable / in template
     $results = mysqli_query($db, "SELECT * FROM students WHERE courseCode = '$courseCode' OR Swcompany = '$accountFor'");

    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $Sname = $_POST['Sname'];
            $Slname = $_POST['Slname'];
            $Smname = $_POST['Smname'];
            $Semail = $_POST['Semail'];
            $Sgender = $_POST['Sgender'];
            $studentID = $_POST['studentID'];

            mysqli_query($db, "UPDATE students SET Sname='$Sname', Smname='$Smname', Slname='$Slname', Semail='$Semail', Sgender='$Sgender', studentID='$studentID' WHERE id=$id");
            $_SESSION['message'] = "record updated";
            $_SESSION['msg_type'] = "green-500";
           
            header('location: index.php');
        }
    
    // delete
    if (isset($_GET['del'])) {
            $id = $_GET['del'];
            mysqli_query($db, "DELETE FROM students WHERE id=$id");
            $_SESSION['message'] = "Address deleted!"; 
            header('location: index.php');
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
        header('location: ../index.php?q=documents');
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
        header('location: ../index.php?q=documents');
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "Document downloaded successfully!";
        $_SESSION['icon'] = "success";
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



