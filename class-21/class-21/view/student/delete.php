<?php
require_once '../../vendor/autoload.php';
use Pondit\Student;

$studentObject = new Student;
$studentObject->delete($_GET['id']);
?>