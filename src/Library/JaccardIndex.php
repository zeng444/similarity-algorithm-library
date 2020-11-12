<?php


namespace Janfish\Algorithm\Library;

/**
 * Jaccard Index J(A,B)
 * Class JaccardIndex
 * @package Janfish\Algorithm\Library
 */
class JaccardIndex extends AlgorithmBase implements AlgorithmInterface
{

    /**
     * @return mixed|string|null
     */
    public function compare(): string
    {
        if (!$this->_vectorA && !$this->_vectorB) {
            return '1';
        }
        return bcdiv($this->intersectionQuantity(), $this->sum(), $this->_scale);
    }

    /**
     * @return int
     */
    private function intersectionQuantity(): int
    {
        return sizeof(array_intersect($this->_vectorA, $this->_vectorB));
    }

    /**
     * @return int
     */
    private function sum(): int
    {
        return sizeof(array_unique(array_merge($this->_vectorA, $this->_vectorB)));
    }

}