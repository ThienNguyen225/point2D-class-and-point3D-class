<?php
include_once "Point2D.php";
class Point3D extends Point2D
{
public $z;
public $arrayXYZ = [];
public function __construct($x, $y, $z)
{
    parent::__construct($x, $y);
    $this->z = $z;
}

public function getZ(){
    return $this->x;
}

public function setZ($z){
    return $this->z = $z;
}

public function setXYZ($x, $y, $z){
    array_push($this->arrayXYZ, $x, $y, $z);
}

public function getXYZ(){
    return $this->arrayXYZ;
}

public function toString(){
    print_r($this->getXYZ());
}
}