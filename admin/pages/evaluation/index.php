<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $header=$view; 
	switch ($view) {
		case 'list' :
			$content = 'evakuation.php';		
			break;
		default :
		$content = 'evaluation.php';			
	}
	require_once ("../../templates/template.php");

?>