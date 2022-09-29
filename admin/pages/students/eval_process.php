<?php

    // connection
    include "../../../connection.php";

    // code for retrieve from database
    // $courseCode is a global variable / in template
     $results = mysqli_query($db, "SELECT * FROM students WHERE Swcompany = '$accountFor' AND iSmidterm = 'requested' OR iSfinal = 'requested'");


    //  Upload Evaluation
     if (isset($_POST['upload'])) { // if upload button on the form is clicked
        // data initialization
        $id = $_POST['id'];
        $title = $_POST['title'];
        $des = $_POST['des'];
        $studentID = $_POST['studentID'];

        // name of the uploaded file
        $filename = $_FILES['myfile']['name'];
    
        // destination of the file on the server
        $destination = 'uploads/' . $filename;
    
        // get the file extension
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
    
        // the physical file on a temporary uploads directory on the server
        $file = $_FILES['myfile']['tmp_name'];
        $size = $_FILES['myfile']['size'];
    
        if (!in_array($extension, ['pdf'])) {
            session_start();
            header('location: index.php');
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "You file extension must be .pdf";
            $_SESSION['icon'] = "warning";
        } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
            header('location: index.php?q=documents');
            session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "You file is too large!";
            $_SESSION['icon'] = "warning";
        } else {
            // move the uploaded (temporary) file to the specified destination
            if (move_uploaded_file($file, $destination)) {
                $sql = "INSERT INTO evaluation (name, size,  title, des, studentID) VALUES 
                ('$filename', $size, '$title', '$des', '$studentID')";
  
                //   update su iSmidterm status sa students table
                if ($des == 'Midterm') {
                    mysqli_query($db, "UPDATE students SET iSmidterm='graded' WHERE id=$id");
                } else {
                    mysqli_query($db, "UPDATE students SET iSfinal='graded' WHERE id=$id");
                }

                if (mysqli_query($db, $sql)) {
    
                    header('location: index.php');
                    session_start();
                    $_SESSION['status'] = "Woo hoo!";
                    $_SESSION['text'] = "Document uploaded successfully!";
                    $_SESSION['icon'] = "success";
                }
            } else {
                 session_start();
                header('location: index.php');
                $_SESSION['status'] = "Woo hoo!";
                $_SESSION['text'] = "Upload file failed.";
                $_SESSION['icon'] = "error";
            }
        }
    }

// View Evaluated Report
    // View files
if (isset($_GET['view_id'])) {
    $id = $_GET['view_id'];

    // fetch file to download from database
    $select = "SELECT * FROM `evaluation` WHERE id=$id";
    $result = $db->query($select);
    while($row = $result->fetch_object()){

    $path = './uploads/';
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
    $sql = "SELECT * FROM evaluation WHERE id=$id";
    $result = mysqli_query($db, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = './uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('./uploads/' . $file['name']));
        readfile('./uploads/' . $file['name']);

    }
}

// Delete files
if (isset($_GET['delete_id'])) {
    $delID = $_GET['delete_id'];
    $id = $_GET['update_id'];
    $request = $_GET['request'];

    mysqli_query($db, "DELETE FROM evaluation WHERE id=$delID");

    if ($request == 'Midterm') {
        mysqli_query($db, "UPDATE students SET iSmidterm='requested' WHERE id=$id");
    } else {
        mysqli_query($db, "UPDATE students SET iSfinal='requested' WHERE id=$id");
    }

    header("location: index.php");
    session_start();
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Document deleted successfully!";
    $_SESSION['icon'] = "success";
}

    
?>