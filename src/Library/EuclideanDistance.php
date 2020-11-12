<?php


namespace Janfish\Algorithm\Library;

/**
 * Euclidean Distance
 * Class EuclideanDistance
 * @package Janfish\Algorithm\Library
 */
class EuclideanDistance extends AlgorithmBase implements AlgorithmInterface
{

    const CALCULATE_SCALE = 8;

    /**
     * @return string
     */
    public function compare(): string
    {
        $sumVector = 0;
        $vectorLength = $this->getBiggestVectorLength();
        for ($i = 0; $i < $vectorLength; $i++) {
            $sumVector = bcadd(bcpow(bcsub($this->_vectorA[$i] ?? 0, $this->_vectorB[$i] ?? 0, self::CALCULATE_SCALE), 2, self::CALCULATE_SCALE), $sumVector, self::CALCULATE_SCALE);
        }
        return bcsqrt($sumVector, $this->_scale);
    }

    /**
     * @return int
     */
    private function getBiggestVectorLength(): int
    {
        $vectorALength = sizeof($this->_vectorA);
        $vectorBLength = sizeof($this->_vectorB);
        return $vectorALength > $vectorBLength ? $vectorALength : $vectorBLength;
    }

}