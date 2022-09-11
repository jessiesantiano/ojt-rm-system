<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title = "School";
 $header=$view; 
	switch ($view) {
		case 'list' :
			$content = 'school.php';		
			break;
		case 'view' :
			$content = 'trainees.php';		
			break;
		case 'trainee' :
			$content = 'trainee.profile.php';		
			break;
		default :
			$content = 'school.php';		
	}
	require_once ("../../templates/template.php");

?>