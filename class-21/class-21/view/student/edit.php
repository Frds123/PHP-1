<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
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

    <form action="update.php" method="POST">
        <input type="hidden" name="student_id" value="<?php echo $student['id'] ?>">
        <input name="first_name" value="<?php echo $student['first_name'] ?>" required placeholder="Enter First Name"><br>
        <input name="last_name" value="<?php echo $student['last_name'] ?>" placeholder="Enter Last Name"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>