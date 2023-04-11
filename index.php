<?php
include_once __DIR__."/vendor/autoload.php";
use Mvcphp\App;

$db_config = [
    'DNS' => $_ENV['DB_DNS'],
    'USER' => $_ENV['DB_USER'],
    'PASS' => $_ENV['DB_PASS'],
];
// echo "<pre>";   
$app = new App($db_config);
var_dump($_ENV);
$app->run();  