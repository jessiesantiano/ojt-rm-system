<?php

   // connection
    include "../../../connection.php";

    // correct timezone
    date_default_timezone_set("Asia/Manila");
    $date = date("D M d, Y");

    // insert to database
    if(isset($_POST['add'])){
        $title = $_POST['title'];
        $whatfor = $_POST['whatfor'];
        $postedBy = $_POST['postedBy'];
        $dateAdded = $date;
        $query = "INSERT INTO announcements (title, whatfor, postedBy, dateAdded) VALUES ('$title', '$whatfor', '$postedBy', '$dateAdded')";
        mysqli_query($db, $query);

        $_SESSION['message'] = "new record has been saved";
        $_SESSION['msg_type'] = "green-500";

        header("location: index.php");
        session_start();
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "New announcement added successfully!";
        $_SESSION['icon'] = "success";
    }

    // code for retrieve from database
    $results = mysqli_query($db, "SELECT * FROM announcements");


    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $whatfor = $_POST['whatfor'];
            mysqli_query($db, "UPDATE announcements SET title='$title', whatfor='$whatfor' WHERE id=$id");
            $_SESSION['message'] = "record updated";
            $_SESSION['msg_type'] = "green-500";
           
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
?>