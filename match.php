<?php 
class Match {
    private $outcome;
    private $team1;
    private $team2;
    private $team1Score = 0;
    private $team2Score = 0;

    public function __construct($team1, $team2) {
        $this->team1 = $team1;
        $this->team2 = $team2;
    }

    public function playGame() {
        if($this->team1->getPower() > $this->team2->getPower()) {
            echo $this->team1->getName();
        } else {
            echo $this->team2->getName();
        }
    }


} 

















?>