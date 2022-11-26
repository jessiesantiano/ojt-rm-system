<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title = "School";
 $header=$view; 
	switch ($view) {
		case 'list' :
			$content = 'requirements.php';		
			break;
		default :
			$content = 'requirements.php';		
	}
	require_once ("../../templates/template.php");

?>