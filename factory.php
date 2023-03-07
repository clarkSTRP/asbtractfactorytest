<?php
class F1Factory implements CarFactory {
    public function createCars(){
        return new F1();
    }
    public function createEngines(){
        return new V12();
    }
}
class Twingofactory implements CarFactory {
    public function createCars(){
        return new Twingo();
    }
    public function createEngines(){
        return new Trois_cylindre();
    }
}