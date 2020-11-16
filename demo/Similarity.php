<?php
require '../vendor/autoload.php';

use Janfish\Algorithm\Similarity;

//ManhattanDistance
$alg = new Similarity(Similarity::MD_ALG);
$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 56, 7, 2, 2, 3, 4]);
var_dump($alg->compare());


//Jaccard Index
$alg = new Similarity(Similarity::JI_ALG);
$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 56, 7, 2, 2, 3, 4]);
var_dump($alg->compare());

//Euclidean Distance
$alg = new Similarity(Similarity::ED_ALG);
$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 56, 7, 2, 2, 3, 4]);
var_dump($alg->compare());

//Consinus Included Angle
$alg = new Similarity(Similarity::CIA_ALG);
$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 56, 7, 2, 2, 3, 4]);
var_dump($alg->compare());


