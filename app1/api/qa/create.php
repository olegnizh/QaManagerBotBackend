<?php
 
include_once '../config/database.php';
include_once '../objects/qa.php';

$database = new Database();
$db = $database->getConnection();
 
$qa = new Qa($db);
 
$qa->qaid = $_GET['qaid']; 
$qa->quest = $_GET['quest'];
$qa->answ = $_GET['answ'];
$qa->hyper = $_GET['hyper'];
$qa->active = $_GET['active'];

$qa->create();

$qa_arr=array(
    "qaid" => $qa->qaid,
    "quest" => $qa->quest,
    "answ" => $qa->answ,
    "hyper" => $qa->hyper,
     "active" => $qa->active
);

print_r(json_encode($qa_arr));
?>