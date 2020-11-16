<?php

namespace Janfish\Algorithm;

use Janfish\Algorithm\Library\AlgorithmInterface;

/**
 * Class Similarity
 * @package \Janfish\Algorithm\Library\AlgorithmInterface
 * @property \Janfish\Algorithm\Library\AlgorithmInterface $_instance
 */
class Similarity implements AlgorithmInterface
{

    /**
     *
     */
    const CIA_ALG = 'ConsinusIncludedAngle';

    /**
     *
     */
    const ED_ALG = 'EuclideanDistance';

    /**
     *
     */
    const JS_ALG = 'JaccardIndex';

    /**
     *
     */
    const MD_ALG = 'ManhattanDistance';

    /**
     * @var
     */
    private $_instance;

    /**
     * Similarity constructor.
     * @param string $algorithm
     * @throws \Exception
     */
    public function __construct(string $algorithm = self::CIA_ALG)
    {
        if (!in_array($algorithm, [self::CIA_ALG, self::ED_ALG, self::JS_ALG])) {
            throw  new \Exception('algorithm "' . $algorithm . '" not exist');
        }
        $className = "\\Janfish\\Algorithm\\Library\\" . $algorithm;
        $this->_instance = new $className();
    }

    /**
     * @return string
     */
    public function compare(): string
    {
        return $this->_instance->compare();
    }

    /**
     * @param array $vectorA
     * @param array $vectorB
     */
    public function setVectors(array $vectorA, array $vectorB): void
    {
        $this->_instance->setVectors($vectorA, $vectorB);
    }

    /**
     * @param array $vector
     */
    public function setVectorA(array $vector): void
    {
        $this->_instance->setVectorA($vector);
    }

    /**
     * @param array $vector
     */
    public function setVectorB(array $vector): void
    {
        $this->_instance->setVectorB($vector);
    }

    /**
     * @param int $scale
     */
    public function setScale(int $scale): void
    {
        $this->_instance->setScale($scale);
    }
}