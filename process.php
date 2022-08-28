<!-- Login -->

<?php
    session_start();
    include "conn.php";

    if(isset($_POST['email']) && isset($_POST['password'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
    

        if (empty($email)) {
            header("Location: index.php?error=email is required");
            exit();
        } else if(empty($password)){
            header("Location: index.php?error=Password is required");
            exit();
        }
        // pag goods su email and pass amo kadi maga execute na code
        else{
            $sql = "SELECT * FROM accounts WHERE email='$email' AND password='$password'";

            $result = mysqli_query($conn, $sql);

            // binutang ko ide kading insert to database para pag tama lang su email and pass saka lang sya maga insert sa database. 
            // pag sala su email and pass diman da mangyayare na INSERT INTO database.
            if(mysqli_num_rows($result)) {

                    header('location: ./student/index.php');

                }
                    else{
                    header("Location: index.php?error=email and password not match");
                    exit();
              }
            }

    }else{
        header('location: index.php');
        exit();
    }

?>