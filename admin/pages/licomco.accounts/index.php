<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title="School Supervisors Accounts"; 
 $header=$view; 
	switch ($view) {
		case 'list' :
			$content = 'accounts.php';		
			break;
		default :
			$content = 'accounts.php';		
	}
	require_once ("../../templates/template.php");

?>