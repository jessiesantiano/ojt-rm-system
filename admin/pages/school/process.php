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

        $getSchool = mysqli_query($db, "SELECT * FROM schools WHERE school='$school'");
        if (mysqli_num_rows($getSchool) > 0) {
            header("location: index.php");
            session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "School already added!";
            $_SESSION['icon'] = "warning";
        } else {
        $query = "INSERT INTO schools (school, supervisor, courseCode) VALUES (UPPER('$school'), UPPER('$supervisor'), '$courseCode')";
        $credentials = "INSERT INTO accounts (accountFor, name, email, password, courseCode) VALUES (UPPER('$school'), UPPER('$supervisor'), '$email', '$password', 'School')";
        mysqli_query($db, $query);
        mysqli_query($db, $credentials);

        header("location: index.php");
        session_start();
        $_SESSION['status'] = "Woo hoo!";
        $_SESSION['text'] = "School added successfully!";
        $_SESSION['icon'] = "success";
    }
}

    // get data from the database
    $results = mysqli_query($db, "SELECT * FROM schools ");


    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $school = $_POST['school'];
            $supervisor = $_POST['supervisor'];
            mysqli_query($db, "UPDATE schools SET school=UPPER('$school'), supervisor=UPPER('$supervisor') WHERE id=$id");
            mysqli_query($db, "UPDATE accounts SET name=UPPER('$supervisor') WHERE accountFor='$school'");
            mysqli_query($db, "UPDATE students SET Swemployer=UPPER('$supervisor') WHERE Swcompany=UPPER('$school')");
           
            header('location: index.php');
             session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "School details updated successfully!";
            $_SESSION['icon'] = "success";
        }
    
    // delete
    if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $supervisor = $_GET['supervisor'];
            mysqli_query($db, "DELETE FROM schools WHERE id=$id");
            mysqli_query($db, "DELETE FROM accounts WHERE name='$supervisor'");
            header('location: index.php');
             session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "School deleted successfully!";
            $_SESSION['icon'] = "success";
        }
?>