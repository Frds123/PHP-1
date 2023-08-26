<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car</title>
</head>
<body>

    <?php 
        include_once '../../src/Car.php';
        $carObject = new Car;
        $cars = $carObject->index();
        echo '<pre>';
        // print_r($cars);
        
        // print_r($_SESSION);

        // die();
    ?>

    <a href="create.php">Add New</a>

    <table border="1" cellpadding='5' style="width: 300px; margin:0 auto;">
        <thead>
            <tr>
                <th>SL#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($cars as $car) { ?>
            <tr>
                <th><?php echo $car['id'] ?></th>
                <th><?php echo $car['title'] ?></th>
                <th><a href="edit.php?id=<?php echo $car['id'] ?>">Edit</a></th>
            </tr>
            <?php } ?>
            <!-- <tr>
                <th>2</th>
                <th>Pajero XYZ</th>
            </tr> -->
        </tbody>

    </table>
</body>
</html>