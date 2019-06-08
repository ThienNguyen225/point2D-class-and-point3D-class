<?php


class Point2D
{
    public $x;
    public $y;
    public $arrayXY = [];

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        return $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y)
    {
        return $this->y = $y;
    }

    public function setXY($x, $y)
    {
        array_push($this->arrayXY, $x, $y);
    }

    public function getXY()
    {
        return $this->arrayXY;
    }

    public function toString()
    {
        print_r($this->getXY());
    }
}