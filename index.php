<?php
    require_once 'Interface.php';
    require_once 'CarFactory.php';
    require_once 'MyClass.php';
    require_once 'factory.php';
    require_once 'Race.php';

    $f1Factory = new F1Factory();
    $sport_model = $f1Factory->createCars();
    $sport_engine = $f1Factory->createEngines();
    $twingoFactory = new Twingofactory();
    $dayli_model = $twingoFactory->createCars();
    $dayli_engine = $twingoFactory->createEngines();

    $course1 = new Race();
    $course1->start(new F1Factory());
    $course1->start(new TwingoFactory());
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
    <div>Just created a new <?php echo     $course1->start(new F1Factory());; ?></div>
    <div>Just created a new <?php echo    $course1->start(new TwingoFactory());; ?></div>
</body>
</html>