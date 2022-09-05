<?php

    // connection
     include "../../../connection.php";
    $id = $_SESSION['id'];
    $getUserLoggedin = mysqli_query($db, "SELECT * FROM accounts WHERE id = $id");
    $getUserLoggedin = $getUserLoggedin -> fetch_assoc();
    ['courseCode' => $courseCode] = $getUserLoggedin;

    // insert to database
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $studentid = $_POST['studentid'];
        $contactno = $_POST['contactno'];
        $address = $_POST['address'];
        $courseCode = $_POST['courseCode'];
        $query = "INSERT INTO students (name, email, studentid, contactno, address, courseCode) VALUES ('$name','$email', '$studentid', '$contactno', '$address', '$courseCode')";
        mysqli_query($db, $query);

        $_SESSION['message'] = "new record has been saved";
        $_SESSION['msg_type'] = "green-500";

        header("location: index.php");
    }

    // code for retrieve from database
     $results = mysqli_query($db, "SELECT * FROM students WHERE courseCode = '$courseCode'");

    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $studentid = $_POST['studentid'];
            $contactno = $_POST['contactno'];
            $address = $_POST['address'];

            mysqli_query($db, "UPDATE students SET name='$name', email='$email', studentid='$studentid', contactno='$contactno', address='$address' WHERE id=$id");
            $_SESSION['message'] = "record updated";
            $_SESSION['msg_type'] = "green-500";
           
            header('location: index.php');
        }
    
    // delete
    if (isset($_GET['del'])) {
            $id = $_GET['del'];
            mysqli_query($db, "DELETE FROM students WHERE id=$id");
            $_SESSION['message'] = "Address deleted!"; 
            header('location: index.php');
        }
?>