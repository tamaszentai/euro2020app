<?php 
class Thirdplacements {
    private $thirds = array();
    private $thirdFirst;
    private $thirdSecond;
    private $thirdThird;
    private $thirdFourth;

    public function __construct($obj1, $obj2, $obj3, $obj4, $obj5, $obj6) {
        $this->thirds = array($obj1, $obj2, $obj3, $obj4, $obj5, $obj6);

    }

    private function cmp($object1, $object2) {
        return $object1->getPoints() < $object2->getPoints();
    }

    public function thirdForwarders() {
        $forwarders = $this->thirds;
        usort($forwarders, array($this, "cmp"));
        $this->thirdFirst = $forwarders[0];
        $this->thirdSecond = $forwarders[1];
        $this->thirdThird = $forwarders[2];
        $this->thirdFourth = $forwarders[3];
    }

    public function getThirdFirst() {
        return $this->thirdFirst;
    }

    public function getThirdSecond() {
        return $this->thirdSecond;
    }

    public function getThirdThird() {
        return $this->thirdThird;
    }

    public function getThirdFourth() {
        return $this->thirdFourth;
    }

}
?>