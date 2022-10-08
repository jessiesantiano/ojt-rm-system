<?php
    // connection
    include "../../../connection.php";
     $results = mysqli_query($db, "SELECT * FROM students WHERE Swcompany = '$accountFor' AND iSmidterm = 'requested' AND iSfinal IS NULL OR iSfinal = 'requested'");
?>
	<!--Container-->
	<div class="w-full md:w-4/5 xl:w-3/5" style="padding: 0 40px 0 40px">

		
	</div>
	