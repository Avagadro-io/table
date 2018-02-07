<?php 

/*************************************************************************************************************************
*
*	Connections Page
*	This Page Is For Connecting To the Databases
*
*
*************************************************************************************************************************/


/* Connect To The DB */
$conn = connect($config);
if ( !$conn ) return die("Could not connect to the DB");