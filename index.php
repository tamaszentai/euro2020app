<?php
header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');

require 'team.php';
require 'match.php';
require 'group.php';
require 'thirdplacements.php';
require 'roundof16.php';
require 'quarterfinals.php';
require 'semifinals.php';
require 'final.php';

$Italy = new Team('Italy', 1642);
$Wales = new Team('Wales', 1570);
$Switzerland = new Team('Switzerland', 1606);
$Turkey = new Team('Turkey', 1505);
$Belgium = new Team('Belgium', 1783);
$Denmark = new Team('Denmark', 1632);
$Finland = new Team('Finland', 1411);
$Russia = new Team('Russia', 1463);
$Netherlands = new Team('Netherlands', 1598);
$Austria = new Team('Austria', 1523);
$Ukraine = new Team('Ukraine', 1515);
$North_Macedonia = new Team('North Macedonia', 1375);
$England = new Team('England', 1687);
$Croatia = new Team('Croatia', 1606);
$Czech_Republic = new Team('Czech Republic', 1459);
$Scotland = new Team('Scotland', 1441);
$Sweden = new Team('Sweden', 1570);
$Spain = new Team('Spain', 1648);
$Slovakia = new Team('Slovakia', 1475);
$Poland = new Team('Poland', 1550);
$France = new Team('France', 1757);
$Germany = new Team('Germany', 1609);
$Portugal = new Team('Portugal', 1666);
$Hungary = new Team('Hungary', 1469);

$groupA = new Group('A', $Italy, $Wales, $Switzerland, $Turkey);
$groupB = new Group('B', $Belgium, $Denmark, $Finland, $Russia);
$groupC = new Group('C', $Netherlands, $Austria, $Ukraine, $North_Macedonia);
$groupD = new Group('D', $England, $Croatia, $Czech_Republic, $Scotland);
$groupE = new Group('E', $Sweden, $Spain, $Slovakia, $Poland);
$groupF = new Group('F', $France, $Germany, $Portugal, $Hungary);

$groupA->playGroupMatches();
$groupB->playGroupMatches();
$groupC->playGroupMatches();
$groupD->playGroupMatches();
$groupE->playGroupMatches();
$groupF->playGroupMatches();

$groupA->forwarders();
$groupB->forwarders();
$groupC->forwarders();
$groupD->forwarders();
$groupE->forwarders();
$groupF->forwarders();

$thirdplacements = new Thirdplacements($groupA->getThird(), $groupB->getThird(), $groupC->getThird(), $groupD->getThird(), $groupE->getThird(), $groupF->getThird());
$thirdplacements->thirdForwarders();

$roundof16 = new Roundof16($groupA->getFirst(), $groupA->getSecond(), $groupB->getFirst(), $groupB->getSecond(), $groupC->getFirst(), $groupC->getSecond(), $groupD->getFirst(), $groupD->getSecond(), $groupE->getFirst(), $groupE->getSecond(), $groupF->getFirst(), $groupF->getSecond(), $thirdplacements->getThirdFirst(), $thirdplacements->getThirdSecond(), $thirdplacements->getThirdThird(), $thirdplacements->getThirdFourth());
$roundof16->play16();

$quarterfinals = new Quarterfinals($roundof16->getForwarders());
$quarterfinals->playQuarterFinals();

$semifinals = new Semifinals($quarterfinals->getForwarders());
$semifinals->playSemiFinals();

$final = new _Final($semifinals->getForwarders());
$final->playFinal();
$final->getWinner();

?>