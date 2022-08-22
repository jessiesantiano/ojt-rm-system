<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $header=$view; 
	switch ($view) {
		case 'list' :
			$content = 'documents.php';		
			break;
		default :
			$content = 'documents.php';		
	}
	require_once ("../../templates/template.php");

?>