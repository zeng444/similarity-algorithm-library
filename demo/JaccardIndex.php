<?php
require '../vendor/autoload.php';

use  Janfish\Algorithm\Library\JaccardIndex;

$alg = new JaccardIndex();
//$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 56, 7]);
$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 56, 7, 2, 2, 3, 4]);
var_dump($alg->compare());