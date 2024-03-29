<?php
class Rectangle
{
    public $width;
    public $height;
    public function __construct($width,$height)
    {
        $this->width=$width;
        $this->height=$height;
    }
    public function setWidth($width){
        $this->width = $width;
    }
    public function getWidth(){
        return $this->width;
    }
    public function setHeight($height){
        $this->height = $height;
    }
    public function getHeight(){
        return $this->height;
    }
    public function getPerimeter(){
        return (($this->width+$this->height)*2);
    }
    public function getArea(){
        return ($this->width*$this->height);
    }
}
