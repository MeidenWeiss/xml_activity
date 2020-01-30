<?php 
include 'config.php';
include 'class.manage.php';
header('Content-Type: application/json');
$manage = new Manage();
$jets = $manage->get_jets();
echo "{\"jets\":";
echo json_encode($jets);
echo "}";
?>