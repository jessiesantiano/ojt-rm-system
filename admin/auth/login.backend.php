
<?php
    session_start();
    include "../../connection.php";

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
            header("Location: ../index.php?error=email is required");
            exit();
        } else if(empty($password)){
            header("Location: ../index.php?error=Password is required");
            exit();
        }
        else{
            $sql = "SELECT * FROM accounts WHERE email='$email' AND password='$password'";
            $result = mysqli_query($db, $sql);
            if(mysqli_num_rows($result)) {

                 if (isset($_POST['login'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    }  

                    $row = mysqli_fetch_assoc($result);
                    $name = $_POST['name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['courseCode'] = $row['courseCode'];
                    $_SESSION['accountFor'] = $row['accountFor'];
                    $_SESSION['id'] = $row['id'];

                    header('location: ../pages/dashboard/');
                    echo "tama";

                }
                    else{
                    header("Location: ../index.php?error=email and password not match");
                    exit();
              }
            }

    }else{
        header("location: ../index.php");
        exit();
    }

?>