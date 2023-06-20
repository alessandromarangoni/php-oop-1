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
    <?php echo $Spider_Man -> name ?> <br>
    <?php echo $Spider_Man -> language ?> <br>
    <?php echo $Spider_Man -> description ?> <br>
    <?php echo $Spider_Man -> getAge() ?> <br>
    <?php echo $Spider_Man -> genre[0][0] . ' ' .  $Spider_Man->genre[0][1]?> <br>


</body>
</html>