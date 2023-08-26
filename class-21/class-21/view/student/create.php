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
         session_start();
        if(isset($_SESSION['errors'])){
            foreach($_SESSION['errors'] as $error){
                echo $error.'<br>';
            }
            unset($_SESSION['errors']);
        }
    ?>

    <form action="store.php" method="POST">
        <input name="first_name" required placeholder="Enter First Name"><br>
        <input name="last_name" placeholder="Enter Last Name"><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>