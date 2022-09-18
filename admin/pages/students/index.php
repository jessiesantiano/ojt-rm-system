<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
$title = "Students";
 $header=$view; 
	switch ($view) {
		case 'list' :
			$content = 'students.php';		
			break;
		case 'view' :
			$content = 'profile.php';		
			break;
		case 'documents' :
			$content = 'documents.php';		
			break;

		default :
		$content = 'students.php';			
	}
	require_once ("../../templates/template.php");
?>
