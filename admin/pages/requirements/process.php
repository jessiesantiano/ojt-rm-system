<?php

    // connection
     include "../../../connection.php";

    // insert to database
    if(isset($_POST['add'])){
        $document = $_POST['document'];
        $courseCode = $_POST['courseCode'];
        $query = "INSERT INTO requirements (document, courseCode) VALUES (UPPER('$document'), '$courseCode')";
        mysqli_query($db, $query);

        header("location: index.php");
        session_start();
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "Document added successfully!";
        $_SESSION['icon'] = "success";
}

    // get data from the database
    $results = mysqli_query($db, "SELECT * FROM requirements WHERE courseCode='$courseCode'");


    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $document = $_POST['document'];
            mysqli_query($db, "UPDATE requirements SET document=UPPER('$document') WHERE id=$id");
           
            header('location: index.php');
             session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Document updated successfully!";
            $_SESSION['icon'] = "success";
        }
    
    // delete
    if (isset($_GET['del'])) {
            $id = $_GET['del'];
            mysqli_query($db, "DELETE FROM requirements WHERE id=$id");
            header('location: index.php');
             session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Document deleted successfully!";
            $_SESSION['icon'] = "success";
        }
?>