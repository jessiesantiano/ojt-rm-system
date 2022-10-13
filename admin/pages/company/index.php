<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title = "Company";
 $header=$view; 
	switch ($view) {
		case 'list' :
			$content = 'company.php';		
			break;
		case 'view' :
			$content = 'trainees.php';		
			break;
		case 'trainee' :
			$content = 'trainee.profile.php';		
			break;
		default :
			$content = 'company.php';		
	}
	require_once ("../../templates/template.php");

?>