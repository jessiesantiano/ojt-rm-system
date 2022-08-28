<?php

$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
$title="Home";
$header=$view;
switch ($view) {
    case 'home':
        $title = "Home";
        $content = './pages/home.php';
        break;

    case 'profile':
        $title = "Profile";
        $content = './pages/profile.php';
        break;

    case 'documents':
        $title = "Documents";
        $content = './pages/documents.php';
        break;

        
    case 'reports':
        $title = "Reports";
        $content = './pages/reports.php';
        break;

    case 'logout':
        $title = "Bye";
        $content = './logout.php';
        break;

    default:
        $title = "Home";
        $content = './pages/home.php';
}

require_once  ("./template.php");