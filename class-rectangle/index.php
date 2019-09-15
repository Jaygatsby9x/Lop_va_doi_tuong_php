<?php
include "Rectangle.php";
$rectangle = new Rectangle(10,20);
echo $rectangle->width;
echo "<br>";
echo $rectangle->height;
echo "<br>";
$rectangle->setWidth(20);
$rectangle->setHeight(30);
echo $rectangle->getWidth();
echo "<br>";
echo $rectangle->getHeight();
echo "<br>";
echo $rectangle->getPerimeter();
echo "<br>";
echo $rectangle->getArea();
