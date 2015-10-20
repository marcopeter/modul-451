<?php
error_reporting(0);
session_start();
require_once 'lib/tinyTpl/TinyTpl.php';

$app = new Main();
$app->main(array_merge($_POST, $_GET));

    
function __autoload($class_name) {
    include $class_name . '.php';
}

echo "<pre>";
var_dump($_SESSION['personArr']);
echo "</pre>";
