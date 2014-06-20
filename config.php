<?php 

/*
---------------
SETUP & CONFIG
---------------

Set up some shit for the database connection
and specify how many text fields our meme
needs to have.
 */

//Base URL
$base_url = 'http://localhost:8888/wfh';

// DB Variables
$db = 'wfh_original';
$db_host = 'localhost';
$db_user = 'wfh';
$db_pass = 'wfh';

// DB Connection
$db_connect = new mysqli($db_host, $db_user, $db_pass, $db);

if($db_connect->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

// Total fields
$text_fields = ['statements','actions','operators','excuses','endings'];

?>