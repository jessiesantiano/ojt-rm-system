<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $header=$view; 
	switch ($view) {
		case 'list' :
			$content = 'announcement.php';		
			break;
		default :
		$content = 'announcement.php';			
	}
	require_once ("../../templates/template.php");

?>