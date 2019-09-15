<?php
class solve_the_quadratic_equation{
    private $a;
    private $b;
    private $c;
    function __construct($a,$b,$c){
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }
    function getA(){
        return $this->a;
    }
    function getB(){
        return $this->b;
    }
    function getC(){
        return $this->c;
    }
    function getDiscriminant(){
        return ($this->b*$this->b)-(4*($this->a*$this->c));
    }
    function getRoot1(){
        return (-$this->b + pow($this->getDiscriminant(),0.5))/(2*$this->a);
    }
    function getRoot2(){
        return (-$this->b - pow($this->getDiscriminant(),0.5))/(2*$this->a);
    }
}
$quaratcEquation = new solve_the_quadratic_equation(1,3,1);
if ($quaratcEquation->getDiscriminant()<0){
    echo 0;
}elseif ($quaratcEquation->getDiscriminant()==0){
    echo $quaratcEquation->getRoot1();
}else
    echo $quaratcEquation->getRoot1() .' and '.$quaratcEquation->getRoot2();
?>
