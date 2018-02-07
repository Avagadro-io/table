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
} else{
	require 'models/pages/main/main.php';
}
