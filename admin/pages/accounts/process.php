<?php
    // initialize variable
    $id = 0;
	$email = "";
    $update = false;

    // connection
    $db = mysqli_connect('localhost', 'root', '', 'ojt-rms');

    // insert to database
    if(isset($_POST['save'])){
        $email = $_POST['email'];
        $query = "INSERT INTO accounts (email) VALUES ('$email')";
        mysqli_query($db, $query);

        $_SESSION['message'] = "new record has been saved";
        $_SESSION['msg_type'] = "green-500";

        header("location: index.php");
    }

    // code for retrieve from database
    $results = mysqli_query($db, "SELECT * FROM accounts ");


    // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $email = $_POST['email'];

            mysqli_query($db, "UPDATE accounts SET email='$email' WHERE id=$id");
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