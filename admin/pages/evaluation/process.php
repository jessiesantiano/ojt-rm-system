<?php

    // connection
    include "../../../connection.php";

    // code for retrieve from database
    // $courseCode is a global variable / in template
     $results = mysqli_query($db, "SELECT * FROM students WHERE courseCode = '$courseCode' OR Swcompany = '$accountFor' OR iSmidterm = 'requested' OR iSfinal = 'requested'");


    //  Upload Evaluation
     if (isset($_POST['upload'])) { // if upload button on the form is clicked
        // data initialization
        $title = $_POST['title'];
        $des = $_POST['des'];
        $studentID = $_POST['studentID'];
        $iSmidterm = $_POST['iSmidterm'];
    
        // name of the uploaded file
        $filename = $_FILES['myfile']['name'];
    
        // destination of the file on the server
        $destination = 'uploads/' . $filename;
    
        // get the file extension
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
    
        // the physical file on a temporary uploads directory on the server
        $file = $_FILES['myfile']['tmp_name'];
        $size = $_FILES['myfile']['size'];
    
        if (!in_array($extension, ['pdf'])) {
    
            
          
            header('location: index.php');
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "You file extension must be .pdf";
            $_SESSION['icon'] = "warning";
        } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 10Megabyte
            header('location: index.php?q=documents');
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "You file is too large!";
            $_SESSION['icon'] = "warning";
        } else {
            // move the uploaded (temporary) file to the specified destination
            if (move_uploaded_file($file, $destination)) {
                $sql = "INSERT INTO evaluation (name, size,  title, des, studentID) VALUES 
                ('$filename', $size, '$title', '$des', '$studentID')";
  
//   update su iSmidterm status sa students table


                if (mysqli_query($db, $sql)) {
    
                    header('location: index.php');
                    $_SESSION['status'] = "Woo hoo!";
                    $_SESSION['text'] = "Document uploaded successfully!";
                    $_SESSION['icon'] = "success";
                }
            } else {
                header('location: index.php');
                $_SESSION['status'] = "Woo hoo!";
                $_SESSION['text'] = "Upload file failed.";
                $_SESSION['icon'] = "error";
            }
        }
    }


    
?>