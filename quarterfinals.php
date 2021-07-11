<?php
class Quarterfinals {
    private $teams = array();
    private $forwarders = array();

    public function __construct($teams = array()) {
        $this->teams = list($obj1, $obj2, $obj3, $obj4, $obj5, $obj6, $obj7, $obj8) = $teams;
    }

    public function playQuarterFinals() {
        shuffle($this->teams);
        file_put_contents('matches.txt', '-------------- QUARTER FINALS MATCHES ---------------'. "\n", FILE_APPEND);
        for($i = 0; $i <= 3; $i++) {
          $match[$i] = new Match($this->teams[$i], $this->teams[7-$i]);
          array_push($this->forwarders, $match[$i]->playGame());
        //   echo '<pre>'; print_r($this->forwarders); echo '</pre>';
        }
    }

    public function getForwarders() {
        return $this->forwarders;
        // echo '<pre>'; print_r($this->forwarders); echo '</pre>';
    }
}
?>