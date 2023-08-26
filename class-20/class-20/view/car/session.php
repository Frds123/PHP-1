<?php

session_start();

$_SESSION['test_key'] = ['Bangladesh', 'India'];

var_dump($_SESSION);

