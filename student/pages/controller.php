<?php
session_start();
// connect to the database
require_once('../../conn.php');
// Uploads Document Files
if (isset($_POST['Dupload'])) { // if upload button on the form is clicked
    // data initialization
    $title = $_POST['title'];
    $des = $_POST['des'];
    $studentID = $_SESSION['email'];


    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['jpeg', 'pdf', 'docx'])) {

        
        echo "You file extension must be .jpeg, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO documents (name, size, downloads, title, destination, studentID) VALUES 
            ('$filename', $size, 0, '$title', '$des', '$studentID')";
            if (mysqli_query($conn, $sql)) {

                header('location: ../index.php?q=documents');
                $_SESSION['status'] = "Woo hoo!";
                $_SESSION['text'] = "Documents uploaded successfully!";
                $_SESSION['icon'] = "success";
            }
        } else {
            $_SESSION['text'] = "Upload Failed!";
            $_SESSION['icon'] = "warning";
        }
    }
}



// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM documents WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE documents SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }
}

// Delete files
if (isset($_GET['delete_id'])) {

    $id = $_GET['delete_id'];
    mysqli_query($conn, "DELETE FROM documents WHERE id=$id");


    echo "File deleted successfully";
    header('location: ../index.php?q=documents');
}


// View files
if (isset($_GET['view_id'])) {
    $id = $_GET['view_id'];
    // fetch file to download from database
    $sql = "SELECT * FROM documents WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filename = 'uploads/' . $file['name'];

    if (file_exists($filename)) {

        // Header content type
        header('Content-type: application/pdf');

        header('Content-Disposition: inline; filename="' . $filename . '"');

        header('Content-Transfer-Encoding: binary');

        header('Accept-Ranges: bytes');

        // Read the file
        @readfile($file);
    }
}



// Upload Report Files

// Uploads files
if (isset($_POST['Rupload'])) { // if upload button on the form is clicked
    // data initialization
    $title = $_POST['title'];
    $studentID = $_SESSION['email'];
    $status = 'pending';


    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['jpeg', 'pdf', 'docx'])) {
        echo "You file extension must be .jpeg, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO reports (name, size, downloads, title, studentID, status) VALUES 
            ('$filename', $size, 0, '$title', '$studentID', '$status')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
                header('location: ../index.php?q=reports');
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}