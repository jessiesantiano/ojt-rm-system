<?php

   // update 
    if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            mysqli_query($db, "UPDATE accounts SET email='$email', password='$password' WHERE id=$id");
            $_SESSION['message'] = "record updated";
            $_SESSION['msg_type'] = "green-500";
           
            header('location: ../auth/logout.backend.php');
        }
   
?>

?>