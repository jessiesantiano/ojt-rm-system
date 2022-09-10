<!-- Login -->

<?php

session_start();
include 'conn.php';






// if (isset($_SESSION['user_name']) && ($_SESSION['user_username'])) {
//     header("Location: main.php");
// }

if (isset($_POST['submit'])) {
    $studentID = $_POST['studentID'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE studentID='$studentID' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        // $row = mysqli_fetch_assoc($result);
        // $_SESSION['user_name'] = $row['user_name'];
        // $_SESSION['user_username'] = $row['user_username'];

        // if($_SESSION['status'] = $row['status = "1"']){
        // 	header("location: admin/index.php");
        // }else{
        // 	header("Location: main.php");
        // }

        $row = mysqli_fetch_assoc($result);

        if ($row['type'] == '1') {
            $_SESSION['studentID'] = $row['studentID'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            // $_SESSION['user_username'] = $row['user_username'];
            header("Location: ./admin/index.php");
        } else {
            $_SESSION['studentID'] = $row['studentID'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            // $_SESSION['user_username'] = $row['user_username'];
            header("Location: ./student/index.php");
        }
    } else {
        echo "<script>alert('Woops! studentID or Password is Wrong.')
        </script>";
        
    }
}
?>