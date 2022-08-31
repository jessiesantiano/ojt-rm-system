<?php
    // initialize variable
    $id = 0;
	$school = "";
    $update = false;

    // connection
    $db = mysqli_connect('localhost', 'root', '', 'ojt-rms');

    // insert to database
    if(isset($_POST['save'])){
        $school = $_POST['school'];
        $query = "INSERT INTO schools (school) VALUES ('$school')";
        mysqli_query($db, $query);

        $_SESSION['message'] = "new record has been saved";
        $_SESSION['msg_type'] = "green-500";

        header("location: index.php");
    }

    // code for retrieve from database
    $results = mysqli_query($db, "SELECT * FROM schools ");


    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $school = $_POST['school'];

            mysqli_query($db, "UPDATE schools SET school='$school' WHERE id=$id");
            $_SESSION['message'] = "record updated";
            $_SESSION['msg_type'] = "green-500";
           
            header('location: index.php');
        }
    
    // delete
    if (isset($_GET['del'])) {
            $id = $_GET['del'];
            mysqli_query($db, "DELETE FROM schools WHERE id=$id");
            $_SESSION['message'] = "Address deleted!"; 
            header('location: index.php');
        }
?>