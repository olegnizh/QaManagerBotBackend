<?php
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';

// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare doctor object
$doctor = new Doctor($db);
 
// set doctor property values
$doctor->id = $_GET['id'];
$doctor->username = $_GET['username'];


// create the doctor
$doctor->create();
//if($doctor->create()){
    $doctor_arr=array(
        "id" => $doctor->id,
        "username" => $doctor->username
    );
//}
//else{
//    $doctor_arr=array(
//        "status" => false,
//        "message" => "Email already exists!"
//    );
//}
print_r(json_encode($doctor_arr));
?>