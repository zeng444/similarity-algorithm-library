<?php
require '../vendor/autoload.php';

use  Janfish\Algorithm\Library\ConsinusIncludedAngle;

$alg = new ConsinusIncludedAngle();
//$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 8, 7, 2]);
//$alg->setVectors([0,0], [2,2]);
//$alg->setVectors([2,2], [2,4]); //0.948
$alg->setVectors([10, 1], [1, 100]);//0.980
var_dump($alg->compare());