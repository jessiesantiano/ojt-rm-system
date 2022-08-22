<?php
    session_start();
    include "../connection.php";

    if(isset($_POST['username']) && isset($_POST['password'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $username = validate($_POST['username']);
        $password = validate($_POST['password']);

        if (empty($username)) {
            header("Location: index.php?error=Username is required");
            exit();
        } else if(empty($password)){
            header("Location: index.php?error=Password is required");
            exit();
        }
        else{
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

            $result = mysqli_query($db, $sql);

            if(mysqli_num_rows($result)) {

				$row = mysqli_fetch_assoc($result);
				$_SESSION['username'] = $row['username'];
				$_SESSION['id'] = $row['id'];

				header('location: home.php');
				echo "tama";

                }
                    else{
                    header("Location: index.php?error=username and password not match");
                    exit();
              }
            }

    }else{
        header(location: index.php);
        exit();
    }

?>