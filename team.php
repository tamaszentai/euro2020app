<?php

class Team {
    private $name;
    private $power;
    private $goal;
    private $points;

    public function __construct($name, $power) {
        $this->name = $name;
        $this->power = $power;
    } 

    public function getName() {
        return $this-> name;
    }

    public function getPower() {
        return $this-> power;
    }

    public function getPoints() {
        return $this->points;
    }

    public function setPoints($points) {
        $this->points += $points; 
    }

    public function scoreGoal() {
        $this->goal = mt_rand(0,3);
        return $this->goal;
    }
}
?>