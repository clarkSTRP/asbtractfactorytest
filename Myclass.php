<?php

class F1 implements Cars {
    public function getType(){
        return "f1 pas trop lente";
    }
}
class Twingo implements Cars {
    public function getType(){
        return "twingo celeste";
    }
}
class V12 implements Engines {
    public function getType(){
        return "V12 rapide";
    }
}
class Trois_cylindre implements Engines {
    public function getType(){
        return "trois cylindre exaltant";
    }
}