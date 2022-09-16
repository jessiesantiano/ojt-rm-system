<?php

    // connection
    include "../../../connection.php";


    // insert to database
    if(isset($_POST['add'])){
        $Spassword = uniqid();
        $Sname = $_POST['Sname'];
        $Slname = $_POST['Slname'];
        $Smname = $_POST['Smname'];
        $Sgender = $_POST['Sgender'];
        $Semail = $_POST['Semail'];
        $studentID = $_POST['studentID'];
        $courseCode = $_POST['courseCode'];
        $query = "INSERT INTO students (Sname, Slname, Smname, Sgender, Semail, Spassword, studentID, courseCode) VALUES ('$Sname', '$Slname', '$Smname', '$Sgender', '$Semail', 'LCC-$Spassword', '$studentID', '$courseCode')";
        mysqli_query($db, $query);

        $_SESSION['message'] = "new record has been saved";
        $_SESSION['msg_type'] = "green-500";

        header("location: index.php");
    }

    // code for retrieve from database
    // $courseCode is a global variable / in template
     $results = mysqli_query($db, "SELECT * FROM students WHERE courseCode = '$courseCode' OR Swcompany = '$school'");

    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $Sname = $_POST['Sname'];
            $Slname = $_POST['Slname'];
            $Smname = $_POST['Smname'];
            $Semail = $_POST['Semail'];
            $Sgender = $_POST['Sgender'];
            $studentID = $_POST['studentID'];

            mysqli_query($db, "UPDATE students SET Sname='$Sname', Smname='$Smname', Slname='$Slname', Semail='$Semail', Sgender='$Sgender', studentID='$studentID' WHERE id=$id");
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