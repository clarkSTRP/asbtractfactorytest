<?php
class Race
{
    public function start(CarFactory $car)
    {
        $engine = $car->createEngines();

        echo 'Le moteur est: ' . $engine->getType();
        $model = $car->createCars();

        echo 'Le model est: ' . $model->getType();
    }

}