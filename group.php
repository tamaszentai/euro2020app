<?php 
class Group {
    private $name;
    private $team1;
    private $team2;
    private $team3;
    private $team4;

    public function __construct($name, $team1, $team2, $team3, $team4) {
        $this->name = $name;
        $this->team1 = $team1;
        $this->team2 = $team2;
        $this->team3 = $team3;
        $this->team4 = $team4;
    }

    public function playGroupMatches() {
        file_put_contents('matches.txt', '-------------- '. 'GROUP ' . $this->name .' ---------------'. "\n", FILE_APPEND);
        $match1 = new Match($this->team1, $this->team2);
        $match1->playGame();
        $match2 = new Match($this->team1, $this->team3);
        $match2->playGame();
        $match3 = new Match($this->team1, $this->team4);
        $match3->playGame();
        $match4 = new Match($this->team2, $this->team3);
        $match4->playGame();
        $match5 = new Match($this->team2, $this->team4);
        $match5->playGame();
        $match6 = new Match($this->team3, $this->team4);
        $match6->playGame();
    }

    public function cmp($object1, $object2) {
        return $object1->getPoints() < $object2->getPoints();
    }

    public function forwarders() {
        $teams = array($this->team1 , $this->team2, $this->team3, $this->team4);
        usort($teams, array($this, "cmp"));
        $firstTwo = array_slice($teams, 0, 2);
        $third = array_slice($teams, 2, 1);
        echo '<pre>'; print_r($firstTwo); echo '</pre>';
        echo '<pre>'; print_r($third); echo '</pre>';
    }



    
    

}

?>