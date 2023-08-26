<?php

class Car 
{

    public function __construct()
    {
        session_start();
    }

    public function index()
    {
        if(!isset($_SESSION['cars'])){
            $_SESSION['cars'] = [];
        }
        $cars = $_SESSION['cars'];
        return $cars;
    }

    public function store()
    {
        array_push($_SESSION['cars'], $_POST);
        header('Location:index.php');
    }

    public function edit()
    {
        echo 'This is edit page';
    }

}