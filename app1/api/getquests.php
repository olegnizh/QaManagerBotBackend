<?php 
header('Content-Type:application/json');
$dbh = new PDO('mysql:host=localhost;dbname=dbbot;charset=utf8mb4','root','');
//$dbh = new PDO('mysql:host=localhost;dbname=dbbot','root','');
//$dbh->exec("set names utf8mb4");

$db = $dbh->prepare('SELECT * FROM qas ORDER BY Quest');
$db->execute();
$table = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($table);
echo $data;

?>