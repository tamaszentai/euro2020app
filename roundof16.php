<?php 
class Roundof16 {
    private $teams = array();

    public function __construct($obj1, $obj2, $obj3, $obj4, $obj5, $obj6, $obj7, $obj8, $obj9, $obj10, $obj11, $obj12, $obj13, $obj14, $obj15, $obj16) {
        $this->teams = array($obj1, $obj2, $obj3, $obj4, $obj5, $obj6, $obj7, $obj8, $obj9, $obj10, $obj11, $obj12, $obj13, $obj14, $obj15, $obj16);
        file_put_contents('matches.txt', '-------------- GROUP OF 16  ---------------'. "\n", FILE_APPEND);
        for($i = 0; $i < count($this->teams); $i++) {
            file_put_contents('matches.txt', $i+1 . '. ' . $this->teams[$i]->getName(). "\n", FILE_APPEND);
        }
    }

    public function getTeams() {
        echo '<pre>'; print_r($this->teams); echo '</pre>';
    }


}





?>