<?php
// Setting the header
header('Content-Type:application/json');
 
// Initializing the directory
$dir =[
    ['Id'=> 1, 'Name' => 'Нижегородов' ],
    ['Id'=> 2, 'Name' => 'Олег'],
    ['Id'=> 3, 'Name' => 'Солнце'],
      ];
// Shows the json data
echo json_encode($dir);
?>