<?php
    // initialize variable
    $id = 0;
	$name = "";
    $update = false;

    // connection
    $db = mysqli_connect('localhost', 'root', '', 'ojt-rms');

    // insert to database
    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $query = "INSERT INTO students (name) VALUES ('$name')";
        mysqli_query($db, $query);

        $_SESSION['message'] = "new record has been saved";
        $_SESSION['msg_type'] = "green-500";

        header("location: index.php");
    }

    // code for retrieve from database
    $results = mysqli_query($db, "SELECT * FROM students ");


    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];

            mysqli_query($db, "UPDATE students SET name='$name' WHERE id=$id");
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