<?php 

/****************************************************************************
*
* Routes And Pages Controller
*
*****************************************************************************/


if (isset($_GET['register'])) {
	return require 'models/pages/reg/reg.php';
}
if (isset($_GET['erase'])) {
	return require 'models/pages/erase/erase.php';
}

return require 'models/pages/main/main.php';