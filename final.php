<?php 
class _Final {
    private $teams = array();
    private $winner;

    public function __construct($teams = array()) {
        $this->teams = list($obj1, $obj2) = $teams;
    }

    public function playFinal() {
        file_put_contents('matches.txt', '-------------- FINAL MATCH ---------------'. "\n", FILE_APPEND);
        $final = new Match($this->teams[0], $this->teams[1]);
        $this->winner = $final->playGame();
    }

    public function getWinner() {
        file_put_contents('matches.txt', '-------------- WINNER ---------------'. "\n", FILE_APPEND);
        file_put_contents('matches.txt', $this->winner->getName(). "\n", FILE_APPEND);
        echo $this->winner->getName()."\n";
    }
}
?>