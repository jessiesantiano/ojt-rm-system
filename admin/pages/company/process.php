<?php

    // connection
     include "../../../connection.php";

    // insert to database
    if(isset($_POST['add'])){
        $company = $_POST['company'];
        $supervisor = $_POST['supervisor'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $courseCode = $_POST['courseCode'];

        $getCompany = mysqli_query($db, "SELECT * FROM companies WHERE company='$company'");
        if (mysqli_num_rows($getCompany) > 0) {
            header("location: index.php");
            session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Company already added!";
            $_SESSION['icon'] = "warning";
        }
        else { $query = "INSERT INTO companies (company, supervisor, courseCode) VALUES (UPPER('$company'), UPPER('$supervisor'), '$courseCode')";
        $credentials = "INSERT INTO accounts (accountFor, name, email, password, courseCode) VALUES (UPPER('$company'), UPPER('$supervisor'), '$email', '$password', 'Company')";
        mysqli_query($db, $query);
        mysqli_query($db, $credentials);

        header("location: index.php");
        session_start();
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "Company added successfully!";
        $_SESSION['icon'] = "success";
        }
    }

    // get data from the database
    $results = mysqli_query($db, "SELECT * FROM companies");


    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $company = $_POST['company'];
            $supervisor = $_POST['supervisor'];
            mysqli_query($db, "UPDATE companies SET company=UPPER('$company'), supervisor=UPPER('$supervisor') WHERE id=$id");
            mysqli_query($db, "UPDATE accounts SET name=UPPER('$supervisor') WHERE accountFor='$company'");
            mysqli_query($db, "UPDATE students SET Swemployer=UPPER('$supervisor') WHERE Swcompany=UPPER('$company')");
           
            header('location: index.php');
             session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Company details updated successfully!";
            $_SESSION['icon'] = "success";
        }
    
    // delete
    if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $supervisor = $_GET['supervisor'];
            mysqli_query($db, "DELETE FROM companies WHERE id=$id");
            mysqli_query($db, "DELETE FROM accounts WHERE name='$supervisor'");
            header('location: index.php');
             session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Company deleted successfully!";
            $_SESSION['icon'] = "success";
        }
?>