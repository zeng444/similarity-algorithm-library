<?php

namespace Janfish\Algorithm\Library;

/**
 * Interface AlgorithmInterface
 * @package Janfish\Algorithm\Library
 */
interface AlgorithmInterface
{

    /**
     * @return mixed
     */
    public function compare(): string;

    /**
     * @param int $scale
     * @return mixed
     */
    public function setScale(int $scale): void;

    /**
     * @param array $vectorA
     * @param array $vectorB
     * @return mixed
     */
    public function setVectors(array $vectorA, array $vectorB): void;

    /**
     * @param array $vector
     * @return mixed
     */
    public function setVectorA(array $vector): void;

    /**
     * @param array $vector
     * @return mixed
     */
    public function setVectorB(array $vector): void;


}