<?php
require '../vendor/autoload.php';

use  Janfish\Algorithm\Library\EuclideanDistance;

$alg = new EuclideanDistance();
//$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 56, 7]);
$alg->setVectors([1, 2, 3], [3, 4, 6]);
var_dump($alg->compare());