<?php

namespace Janfish\Algorithm\Library;

class AlgorithmBase
{
    /**
     * @var array
     */
    protected $_vectorA = [];

    /**
     * @var array
     */
    protected $_vectorB = [];

    /**
     * @var int
     */
    protected $_scale = 3;

    public function setScale(int $scale): void
    {
        $this->_scale = $scale;
    }

    public function setVectors(array $vectorA, array $vectorB): void
    {
        $this->setVectorA($vectorA);
        $this->setVectorB($vectorB);
    }

    public function setVectorA(array $vector): void
    {
        $this->_vectorA = $vector;
    }

    public function setVectorB(array $vector): void
    {
        $this->_vectorB = $vector;
    }

}