<?php 
class Group {
    private $name;
    private $team1;
    private $team2;
    private $team3;
    private $team4;
    private $first;
    private $second;
    private $third;

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

    private function cmp($object1, $object2) {
        return $object1->getPoints() < $object2->getPoints();
    }

    public function forwarders() {
        file_put_contents('matches.txt', '-------------- '. 'GROUP ' . $this->name .' FORWARDERS: ---------------'. "\n", FILE_APPEND);
        $teams = array($this->team1 , $this->team2, $this->team3, $this->team4);
        usort($teams, array($this, "cmp"));
        $forwarders = array_slice($teams, 0, 3);
        $this->first = $forwarders[0];
        file_put_contents('matches.txt', '1. ' . $this->first->getName() . ' with ' . $this->first->getPoints() . ' points' ."\n", FILE_APPEND);
        $this->second = $forwarders[1];
        file_put_contents('matches.txt', '2. ' . $this->second->getName() . ' with ' . $this->second->getPoints() . ' points' ."\n", FILE_APPEND);
        $this->third = $forwarders[2];
        file_put_contents('matches.txt', '3. ' . $this->third->getName() . ' with ' . $this->third->getPoints() . ' points' ."\n", FILE_APPEND);
    }

    public function getFirst() {
        return $this->first;
    }

    public function getSecond() {
        return $this->second;
    }

    public function getThird() {
        return $this->third;
    }
}
?>