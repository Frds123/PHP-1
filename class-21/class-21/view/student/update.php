<?php
require_once '../../vendor/autoload.php';
use Pondit\Student;

$studentObject = new Student;
$studentObject->setData($_POST)->update($_POST['student_id']);

?>