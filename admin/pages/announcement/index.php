<?php

 $view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
 $title = "Announcements";
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