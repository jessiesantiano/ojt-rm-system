<?php

    include '../connection.php';
	$id = $_SESSION['id'];

	if (isset($_POST['midterm'])) {
		$iSmidterm = $_POST['iSmidterm'];
		mysqli_query($db, "UPDATE students SET iSmidterm='$iSmidterm' WHERE id=$id");
		header("Location: ./student/index.php");
	
	}
	

?>