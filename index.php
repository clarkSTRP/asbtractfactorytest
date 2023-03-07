<?php
    require_once 'Interface.php';
    require_once 'CarFactory.php';
    require_once 'MyClass.php';
    require_once 'factory.php';

    $f1Factory = new F1Factory();
    $sport_model = $f1Factory->createCars();
    $sport_engine = $f1Factory->createEngines();
    $twingoFactory = new Twingofactory();
    $dayli_model = $twingoFactory->createCars();
    $dayli_engine = $twingoFactory->createEngines();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Factory Example</title>
</head>
<body>
    <div>Just created a new <?php echo $sport_model->getType()." ".$sport_engine->getType(); ?></div>
    <div>Just created a new <?php echo $dayli_model->getType()." ".$dayli_engine->getType(); ?></div>
</body>
</html>