<?php
include "Point2D.php";
include "Point3D.php";

$point2D = new Point2D(3, 4);
$point2D->setXY(8, 19);
$point2D->toString();
echo "<br>" . "<br>";
$point3D = new Point3D(4, 5, 6);
$point3D->setXYZ(3, 2, 1);
$point3D->toString();