<?php 

if ( !isset($SESSION['username']) ) {
	return require '../models/logs/login.php';
}