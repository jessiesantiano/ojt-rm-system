<?php

    // connection
     include "../../../connection.php";

    // insert to database
    if(isset($_POST['add'])){
        $school = $_POST['school'];
        $supervisor = $_POST['supervisor'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $courseCode = $_POST['courseCode'];
        $query = "INSERT INTO schools (school, supervisor, courseCode) VALUES ('$school', '$supervisor', '$courseCode')";
        $credentials = "INSERT INTO accounts (accountFor, name, email, password) VALUES ('$school', '$supervisor', '$email', '$password')";
        mysqli_query($db, $query);
        mysqli_query($db, $credentials);

        header("location: index.php");
        session_start();
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "School added successfully!";
        $_SESSION['icon'] = "success";
    }

    // get data from the database
    $results = mysqli_query($db, "SELECT * FROM schools ");


    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $school = $_POST['school'];
            $supervisor = $_POST['supervisor'];
            mysqli_query($db, "UPDATE schools SET school='$school', supervisor='$supervisor' WHERE id=$id");
           
            header('location: index.php');
             session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "School details updated successfully!";
            $_SESSION['icon'] = "success";
        }
    
    // delete
    if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $supervisor = $_GET['del'];
            mysqli_query($db, "DELETE FROM schools WHERE id=$id");
            mysqli_query($db, "DELETE FROM accounts WHERE name=$supervisor");
            header('location: index.php');
             session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "School deleted successfully!";
            $_SESSION['icon'] = "success";
        }
?>