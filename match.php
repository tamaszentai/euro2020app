<?php 
class Match {
    private $team1;
    private $team2;
    private $team1Score = 0;
    private $team2Score = 0;

    public function __construct($team1, $team2) {
        $this->team1 = $team1;
        $this->team2 = $team2;
        $this->team1Score = $team1->scoreGoal();
        $this->team2Score = $team2->scoreGoal();
    }

    public function chanceToWin() {
        $helper = mt_rand(1,10) / 10;
        return $helper < 0.5 ? true : false;
    }

    public function playGame() {
      if($this->team1->getPower() > $this->team2->getPower()) {
        $this->chanceToWin() ? $this->team1Score++ : null;
      } else {
        $this->chanceToWin() ? $this->team2Score++ : null;
      }

      $this->team1->setPoints($this->team1Score);
      $this->team2->setPoints($this->team2Score);

      file_put_contents('matches.txt', $this->team1->getName() . ' ' . $this->team1Score . ':' . $this->team2Score . ' ' . $this->team2->getName() . "\n", FILE_APPEND);

      if ($this->team1Score > $this->team2Score) {
          return array($this->team1->getName(), $this->team1Score);
      } else if ($this->team2Score > $this->team1Score) {
        return array($this->team2->getName(), $this->team2Score);
      } else {
          return 'draw';
      }
    }

    

} 



?>