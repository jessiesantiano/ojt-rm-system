<!-- Login -->

<?php

session_start();
include 'connection.php';
error_reporting();



if (isset($_POST['submit'])) {
    $studentID = $_POST['studentID'];
    $Spassword = $_POST['Spassword'];

    $sql = "SELECT * FROM students WHERE studentID='$studentID' AND Spassword='$Spassword'";
    $result = mysqli_query($db, $sql);

    if ($result->num_rows > 0) {

        $row = mysqli_fetch_assoc($result);

            $_SESSION['studentID'] = $row['studentID'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['Sname'] = $row['Sname'];
            $_SESSION['Slname'] = $row['Slname'];
            $_SESSION['Semail'] = $row['Semail'];
      
            header("Location: ./student/index.php");
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "You logged in successfully!";
            $_SESSION['icon'] = "success";
        
    } else {
    
        header("Location: ./index.php?error=Incorrect Student ID / Password");
        
    }
}
?>