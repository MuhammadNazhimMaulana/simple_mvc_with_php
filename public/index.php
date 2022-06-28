<?php 

// Running the session
if( !session_id() ) session_start();

// Calling all file
require_once '../app/init.php';

// Running App Class
$app = new App;
