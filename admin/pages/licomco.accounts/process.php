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

        $_SESSION['message'] = "new record has been saved";
        $_SESSION['msg_type'] = "green-500";

        header("location: index.php");
    }

    // get data from the database
    $results = mysqli_query($db, "SELECT * FROM accounts WHERE courseCode IS NOT NULL");


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
        }
    
    // delete
    if (isset($_GET['del'])) {
            $id = $_GET['del'];
            mysqli_query($db, "DELETE FROM accounts WHERE id=$id");
            $_SESSION['message'] = "Address deleted!"; 
            header('location: index.php');
        }
?>