<?php
require 'team.php';
require 'match.php';
require 'group.php';

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



echo $Italy->getPoints()."\r\n";
echo $Wales->getPoints()."\r\n";
echo $Switzerland->getPoints()."\r\n";
echo $Turkey->getPoints()."\r\n";















?>