<?php
 
include_once '../config/database.php';
include_once '../objects/qa.php';

$database = new Database();
$db = $database->getConnection();
 
$qa = new Qa($db);
 
$qa->qaid = $_GET['qaid'];
$qa->delete();

//print_r(json_encode($qa_arr));
?>