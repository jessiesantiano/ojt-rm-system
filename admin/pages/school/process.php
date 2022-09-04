<?php

    // connection
     include "../../../connection.php";

    // insert to database
    if(isset($_POST['add'])){
        $school = $_POST['school'];
        $supervisor = $_POST['supervisor'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "INSERT INTO schools (school, supervisor) VALUES ('$school', '$supervisor')";
        $credentials = "INSERT INTO accounts (accountFor, name, email, password) VALUES ('$school', '$supervisor', '$email', '$password')";
        mysqli_query($db, $query);
        mysqli_query($db, $credentials);

        $_SESSION['message'] = "new record has been saved";
        $_SESSION['msg_type'] = "green-500";

        header("location: index.php");
    }

    // get data from the database
    $results = mysqli_query($db, "SELECT * FROM schools ");


    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $school = $_POST['school'];
            $supervisor = $_POST['supervisor'];
            mysqli_query($db, "UPDATE schools SET school='$school', supervisor='$supervisor' WHERE id=$id");
            $_SESSION['message'] = "record updated";
            $_SESSION['msg_type'] = "green-500";
           
            header('location: index.php');
        }
    
    // delete
    if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $supervisor = $_GET['del'];
            mysqli_query($db, "DELETE FROM schools WHERE id=$id");
            mysqli_query($db, "DELETE FROM accounts WHERE name=$supervisor");
            $_SESSION['message'] = "Address deleted!"; 
            header('location: index.php');
        }
?>