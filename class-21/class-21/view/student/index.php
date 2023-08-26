<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>

    <?php
        require_once '../../vendor/autoload.php';
        use Pondit\Student;
        $studentObject = new Student;
        // echo '<pre>';
        $students = $studentObject->index();
        // print_r($students);
        // die();
    ?>

    <a href="create.php">Add New Student</a>

    <?php
    
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }

    ?>

    <table border="1" cellspacing=5 cellpadding=5>
        <thead>
            <tr>
                <!-- <td>SL#</td> -->
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student){ ?>
            <tr>
                <td><?php echo $student['id']?></td>
                <td><?php echo $student['first_name']?></td>
                <td><?php echo $student['last_name']?></td>
                <td><a href="show.php?id=<?php echo $student['id'] ?>">Show</a>
                 | <a href="edit.php?id=<?php echo $student['id'] ?>">Edit</a> 
                 | <a onclick="return confirm('Are you sure want to delete?')" href="delete.php?id=<?php echo $student['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>