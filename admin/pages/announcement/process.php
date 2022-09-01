<?php

   // connection
    $db = mysqli_connect('localhost', 'root', '', 'ojt-rms');

    // insert to database
    if(isset($_POST['add'])){
        $title = $_POST['title'];
        $whatfor = $_POST['whatfor'];
        $query = "INSERT INTO announcements (title, whatfor) VALUES ('$title', '$whatfor')";
        mysqli_query($db, $query);

        $_SESSION['message'] = "new record has been saved";
        $_SESSION['msg_type'] = "green-500";

        header("location: index.php");
    }

    // code for retrieve from database
    $results = mysqli_query($db, "SELECT * FROM announcements ");


    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $whatfor = $_POST['whatfor'];
            mysqli_query($db, "UPDATE announcements SET title='$title', whatfor='$whatfor' WHERE id=$id");
            $_SESSION['message'] = "record updated";
            $_SESSION['msg_type'] = "green-500";
           
            header('location: index.php');
        }
    
    // delete
    if (isset($_GET['del'])) {
            $id = $_GET['del'];
            mysqli_query($db, "DELETE FROM announcements WHERE id=$id");
            $_SESSION['message'] = "Address deleted!"; 
            header('location: index.php');
        }
?>