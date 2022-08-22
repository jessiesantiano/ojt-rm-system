<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $header=$view; 
	switch ($view) {
		case 'list' :
			$content = 'students.php';		
			break;
		default :
		$content = 'students.php';			
	}
	require_once ("../../templates/template.php");

?>