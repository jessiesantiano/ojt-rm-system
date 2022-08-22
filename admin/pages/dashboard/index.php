<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $header=$view; 
	switch ($view) {
		case 'list' :
			$content = 'dashboard.php';		
			break;
		default :
			$content = 'dashboard.php';		
	}
	require_once ("../../templates/template.php");

?>