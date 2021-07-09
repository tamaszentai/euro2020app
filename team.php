<?php

class Team {
    private $name;
    private $power;

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
}


















?>