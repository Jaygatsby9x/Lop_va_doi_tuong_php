<?php
class Fan
{
protected $slow = 1;
protected $medium = 2;
protected $fast = 3;
protected $speed = 1;
protected $on = false;
protected $radius = 5;
protected $color = "blue";
public function setSpeed($speed)
{
$this->speed = $speed;
}
public function setOn($on)
{
$this->on = $on;
}
public function setRadius($radius)
{
$this->radius = $radius;
}
public function setColor($color)
{
$this->color = $color;
}
public function getSpeed()
{
return $this->speed;
}
public function getColor()
{
return $this->color;
}
public function getRadius()
{
return $this->radius;
}
public function getOn()
{
return $this->on;
}
}