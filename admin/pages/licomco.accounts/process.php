<?php

    // connection
    include "../../../connection.php";

    // insert to database
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "INSERT INTO accounts (name, email, password) VALUES ('$name','$email','$password')";
        mysqli_query($db, $query);

        header("location: index.php");
        session_start();
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "New account added successfully!";
        $_SESSION['icon'] = "success";
    }

    // get data from the database
    $results = mysqli_query($db, "SELECT * FROM accounts WHERE accountFor='Coordinator'");


    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            mysqli_query($db, "UPDATE accounts SET name='$name', email='$email', password='$password' WHERE id=$id");
            $_SESSION['message'] = "record updated";
            $_SESSION['msg_type'] = "green-500";
           
            header('location: index.php');
            session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Account updated successfully!";
            $_SESSION['icon'] = "success";
        }
    
    // delete
    if (isset($_GET['del'])) {
            $id = $_GET['del'];
            mysqli_query($db, "DELETE FROM accounts WHERE id=$id");
            header('location: index.php');
             session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Account deleted successfully!";
            $_SESSION['icon'] = "success";
        }
?>