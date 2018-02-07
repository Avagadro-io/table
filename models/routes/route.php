<?php 

require 'models/database/db.php';

$conn = connect($config);

if ( !$conn ) die("Could not connect to the Database");

require_once 'models/pages/main/main.php';