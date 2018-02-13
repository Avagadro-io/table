<?php 

/****************************************************************************
*
* Routes And Pages Controller
*
*****************************************************************************/

if (isset($_GET['register'])) {
	require 'models/pages/reg/reg.php';
} elseif (isset($_GET['erase'])) {
	require 'models/pages/erase/erase.php';
} elseif (isset($_GET['logout'])) {
	return header("Location: models/logs/logout.php");	
} else{
	require 'models/pages/main/main.php';
}
