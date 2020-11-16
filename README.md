# Similarity Algorithm Library

### Algorithms

- Jaccard Index

```php
$alg = new \Janfish\Algorithm\Similarity(Similarity::JS_ALG);
$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 56, 7, 2]);
var_dump($alg->compare());
```

- Manhattan Distance

```php
$alg = new Similarity(Similarity::MD_ALG);
$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 56, 7, 2, 2, 3, 4]);
var_dump($alg->compare());
```

- Euclidean Distance

```php
$alg = new \Janfish\Algorithm\Similarity(Similarity::ED_ALG);
$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 56, 7, 2]);
var_dump($alg->compare());
```

-  Consinus Included Angle

```php
$alg = new \Janfish\Algorithm\Similarity(Similarity::CIA_ALG);
$alg->setVectors([1, 2, 3, 4, 5], [3, 4, 56, 7, 2]);
var_dump($alg->compare());
```

### All Methods

```
$alg = new \Janfish\Algorithm\Similarity();
$alg->setVectorA([1, 2, 3, 4, 5]);
$alg->setVectorB([3, 4, 56, 7, 2]);
$alg->setScale(7);
$alg->compare();
```