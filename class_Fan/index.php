
<?php
include "Fan.php";
$fanOne = new Fan();
$fanTwo = new Fan();
var_dump($fanOne->getOn());
var_dump($fanOne->getColor());
var_dump($fanOne->getRadius());
var_dump($fanOne->getSpeed());
echo "<br>";
$fanOne->setOn(true);
$fanOne->setSpeed(3);
$fanOne->setRadius(10);
$fanOne->setColor("yellow");
var_dump($fanOne->getOn());
var_dump($fanOne->getColor());
var_dump($fanOne->getRadius());
var_dump($fanOne->getSpeed());
echo "<br>";
$fanTwo->setOn(false);
$fanTwo->setSpeed(2);
$fanTwo->setRadius(5);
$fanTwo->setColor("blue");
var_dump($fanTwo->getOn());
var_dump($fanTwo->getColor());
var_dump($fanTwo->getRadius());
var_dump($fanTwo->getSpeed());