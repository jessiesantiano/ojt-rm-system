<?php
session_start();
// dbect to the database
require_once('../../connection.php');

// Update Student Profile 
if (isset($_POST['update_id'])) {
    $id = $_SESSION['id'];

    $Sstreet = $_POST['Sstreet'];
    $Scity = $_POST['Scity'];
    $Sstate = $_POST['Sstate'];
    $Szipcode = $_POST['Szipcode'];
    $Sage = $_POST['Sage'];
    $Sbday = $_POST['Sbday'];
    $Snumber = $_POST['Snumber'];
    $Semail = $_POST['Semail'];

    // name of the uploaded file
    $Sphoto = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../image/' . $Sphoto;

    // get the file extension
    $extension = pathinfo($Sphoto, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    $Svax = $_POST['Svax'];
    $S1dose = $_POST['S1dose'];
    $S2dose = $_POST['S2dose'];
    $Sbooster = $_POST['Sbooster'];
    $Svaxbooster = $_POST['Svaxbooster'];

    // $Swcompany = $_POST['Swcompany'];
    $Swnumber = $_POST['Swnumber'];
    $Swlocation = $_POST['Swlocation'];
    $Swcontact = $_POST['Swcontact'];

    if (!in_array($extension, ['png', 'jpg', 'jpeg'])) {
        header('location: ../index.php?q=profile');
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "You picture extension must be .png .jpg .jpeg";
        $_SESSION['icon'] = "warning";
    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
        header('location: ../index.php?q=profile');
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "You file is too large. (10MB max)";
        $_SESSION['icon'] = "warning";
    } else {
        if (move_uploaded_file($file, $destination)) {
            mysqli_query($db, "UPDATE students SET Sphoto='$Sphoto' WHERE id=$id");
        }
    }





    // if (move_uploaded_file($file, $destination)) {
    mysqli_query($db, "UPDATE students SET 
    Sage='$Sage',
    Sstreet='$Sstreet', 
    Scity='$Scity',
    Sstate='$Sstate',
    Szipcode='$Szipcode',
    Sage='$Sage',
    Sbday='$Sbday',
    Snumber='$Snumber',
    Semail='$Semail',

        -- Sphoto='$Sphoto',

    Svax='$Svax',
    S1dose='$S1dose',
    S2dose='$S2dose',
    Sbooster='$Sbooster',
    Svaxbooster='$Svaxbooster',

    -- Swcompany='$Swcompany',
    Swnumber='$Swnumber',
    Swlocation='$Swlocation',
    -- Swemployer='$Swemployer',
    Swcontact='$Swcontact'
     WHERE id=$id");

    header('location: ../index.php?q=profile');
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Update successfully!";
    $_SESSION['icon'] = "success";
    // } else {
    //     header('location: ../index.php?q=profile');
    //     $_SESSION['status'] = "Woo hoo!";
    //     $_SESSION['text'] = "Update Error";
    //     $_SESSION['icon'] = "error";
    // }
    // }
}


// Uploads Document Files
if (isset($_POST['Dupload'])) { // if upload button on the form is clicked
    // data initialization
    $id = $_POST['id'];
    $title = $_POST['title'];
    $des = $_POST['des'];
    $studentID = $_SESSION['studentID'];


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



        header('location: ../index.php?q=documents');
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "You file extension must be .pdf";
        $_SESSION['icon'] = "warning";
    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
        header('location: ../index.php?q=documents');
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "You file is too large!";
        $_SESSION['icon'] = "warning";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO documents (name, size, downloads, title, destination, studentID) VALUES 
            ('$filename', $size, 0, '$title', '$des', '$studentID')";
            mysqli_query($db, "UPDATE students SET uploadRequest=NULL WHERE id=$id");
            mysqli_query($db, "UPDATE students SET whatDocu=NULL WHERE id=$id");
            if (mysqli_query($db, $sql)) {

                header('location: ../index.php?q=documents');
                $_SESSION['status'] = "Woo hoo!";
                $_SESSION['text'] = "Document uploaded successfully!";
                $_SESSION['icon'] = "success";
            }
        } else {
            header('location: ../index.php?q=documents');
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Upload file failed.";
            $_SESSION['icon'] = "error";
        }
    }
}



// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM documents WHERE id=$id";
    $result = mysqli_query($db, $sql);

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
        mysqli_query($db, $updateQuery);
        header('location: ../index.php?q=documents');
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "Document downloaded successfully!";
        $_SESSION['icon'] = "success";
        exit;
    }
}

// Delete files
if (isset($_GET['delete_id'])) {

    $id = $_GET['delete_id'];
    mysqli_query($db, "DELETE FROM documents WHERE id=$id");

    header('location: ../index.php?q=documents');
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Document deleted successfully!";
    $_SESSION['icon'] = "success";
}


// View files
if (isset($_GET['view_id'])) {
    $id = $_GET['view_id'];
    // fetch file to download from database
    $select = "SELECT * FROM `documents` WHERE id=$id";
    $result = $db->query($select);
    while($row = $result->fetch_object()){

    $path = 'uploads/';
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

// Upload Report Files

// Uploads files
if (isset($_POST['Rupload'])) { // if upload button on the form is clicked
    // data initialization
    $title = $_POST['title'];
    $studentID = $_SESSION['studentID'];
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

    if (!in_array($extension, ['pdf'])) {

        header('location: ../index.php?q=reports');
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "Your file must be .pdf";
        $_SESSION['icon'] = "warning";
    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
        header('location: ../index.php?q=reports');
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "Your file is too large.";
        $_SESSION['icon'] = "warning";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO reports (name, size, downloads, title, studentID, status) VALUES 
            ('$filename', $size, 0, '$title', '$studentID', '$status')";
            if (mysqli_query($db, $sql)) {
                header('location: ../index.php?q=reports');
                $_SESSION['status'] = "Woo hoo!";
                $_SESSION['text'] = "Report uploaded successfully!";
                $_SESSION['icon'] = "success";
            }
        } else {
            header('location: ../index.php?q=reports');
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "File upload failed!";
            $_SESSION['icon'] = "error";
        }
    }
}


   // update 
    if (isset($_POST['sendrequest'])) {
            $uploadRequest = $_POST['uploadRequest'];
            $id = $_POST['id'];
            mysqli_query($db, "UPDATE students SET uploadRequest='$uploadRequest' WHERE id=$id");
           header('location: ../index.php?q=documents');
              session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Request sent successfully!";
            $_SESSION['icon'] = "success";
        }
    