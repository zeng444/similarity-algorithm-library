<?php
require '../vendor/autoload.php';

use  Janfish\Algorithm\Library\ManhattanDistance;

$alg = new ManhattanDistance();
//$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 56, 7]);
$alg->setVectors([1,3,5], [2,6,7]);
var_dump($alg->compare());