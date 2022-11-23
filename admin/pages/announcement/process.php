<?php

// connection
include "../../../connection.php";

// correct timezone
date_default_timezone_set("Asia/Manila");
$date = date("D M d, Y");

// insert to database
if (isset($_POST['add'])) {

    $title = $_POST['title'];
    $whatfor = $_POST['whatfor'];
    $postedBy = $_POST['postedBy'];
    $dateAdded = $date;
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    $getAnc = mysqli_query($db, "SELECT * FROM announcements WHERE title='$title'");
    
    if (mysqli_num_rows($getAnc) > 0) {
            header("location: index.php");
            session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Announcement already added!";
            $_SESSION['icon'] = "warning";
        }else{
                if (!in_array($extension, ['png', 'jpeg', 'jpg'])) {

                        header("location: index.php");
                        session_start();
                        $_SESSION['status'] = "Woo hoo!";
                        $_SESSION['text'] = "Your file must be .png .jpeg .jpg";
                        $_SESSION['icon'] = "warning";
                    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
                        header("location: index.php");
                        session_start();
                        $_SESSION['status'] = "Woo hoo!";
                        $_SESSION['text'] = "Your file is too large.";
                        $_SESSION['icon'] = "warning";
                    } else {
                        // move the uploaded (temporary) file to the specified destination
                        if (move_uploaded_file($file, $destination)) {
                            $query = "INSERT INTO announcements (name, title, whatfor, postedBy, dateAdded) VALUES ('$filename', '$title', '$whatfor', '$postedBy', '$dateAdded')";
                            if (mysqli_query($db, $query)) {

                            header("location: index.php");
                            session_start();
                            $_SESSION['status'] = "Woo hoo!";
                            $_SESSION['text'] = "New announcement added successfully!";
                            $_SESSION['icon'] = "success";
                            }

                            } else {
                                header("location: index.php");
                                session_start();
                                $_SESSION['status'] = "Woo hoo!";
                                $_SESSION['text'] = "File upload failed!";
                                $_SESSION['icon'] = "error";
                            }
                    }
        
        }

        if ($filename == null) {
              if (mysqli_num_rows($getAnc) > 0) {
            header("location: index.php");
            session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Announcement already added!";
            $_SESSION['icon'] = "warning";
        }else{
            $query = "INSERT INTO announcements (name, title, whatfor, postedBy, dateAdded) VALUES ('$filename', '$title', '$whatfor', '$postedBy', '$dateAdded')";
            if (mysqli_query($db, $query)) {

            header("location: index.php");
            session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "New announcement added successfully!";
            $_SESSION['icon'] = "success";
            }

        }
         
        }
      

   
}

// code for retrieve from database
$results = mysqli_query($db, "SELECT * FROM announcements");


// update 
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $whatfor = $_POST['whatfor'];
    mysqli_query($db, "UPDATE announcements SET title='$title', whatfor='$whatfor' WHERE id=$id");

    header('location: index.php');
    session_start();
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Announcement details updated successfully!";
    $_SESSION['icon'] = "success";
}

// delete
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM announcements WHERE id=$id");
    header('location: index.php');
    session_start();
    $_SESSION['status'] = "Woo hoo!";
    $_SESSION['text'] = "Announcement deleted successfully!";
    $_SESSION['icon'] = "success";
}
