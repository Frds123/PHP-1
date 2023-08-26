<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
</head>
<body>

<?php
require_once '../../vendor/autoload.php';
use Pondit\Student;

$studentObject = new Student;
$student = $studentObject->show($_GET['id']);
    // echo '<pre>';
    // print_r($student);
?>

<a href="index.php">List</a>

<p>First Name: <?php echo $student['first_name'] ?></p>
<p>Last Name: <?php echo $student['last_name'] ?></p>

</body>
</html>