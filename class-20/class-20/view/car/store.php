<?php 
    include_once '../../src/Car.php';
    $carObject = new Car;
    $cars = $carObject->store();
    // print_r($cars);
?>