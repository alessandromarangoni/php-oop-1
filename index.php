<!DOCTYPE html>
<?php
include './db.php'
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
<div>
    <div>
        <div>
            <?php foreach ($Movies_Array as $Movie) 
            {?>
            <ul>
                <li> <?php echo $Movie -> name ?></li>
                <li> <?php echo $Movie -> getAge() ?></li>
                <li> <?php echo $Movie -> description ?></li>
                <li><?php foreach ($Movie->genre[0] as $value) {
                                echo $value.', ';
                } ?></li>
            </ul>
            <?php  }?>
        </div>
    </div>
</div>
</body>
</html>