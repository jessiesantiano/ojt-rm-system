<?php

     include "../../../connection.php";
   // update 
    if (isset($_GET['accept'])) {
            $id = $_GET['accept'];
            $whatDocu = $_GET['whatDocu'];
            mysqli_query($db, "UPDATE students SET uploadRequest='Yes' WHERE id=$id");
            mysqli_query($db, "UPDATE students SET whatDocu='$whatDocu' WHERE id=$id");
             header('location: index.php');
              session_start();
            $_SESSION['status'] = "Woo hoo!";
            $_SESSION['text'] = "Request granted!";
            $_SESSION['icon'] = "success";
        }

?>