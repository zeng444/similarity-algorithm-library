<?php

namespace Janfish\Algorithm\Library;

/**
 * Class ManhattanDistance
 * @package Janfish\Algorithm\Library
 */
class ManhattanDistance extends AlgorithmBase implements AlgorithmInterface
{

    const CALCULATE_SCALE = 8;

    /**
     * @return string
     */
    public function compare(): string
    {

        $distance = 0;
        $vectorLength = $this->getBiggestVectorLength();
        for ($i = 0; $i < $vectorLength; $i++) {
            $distance = bcadd($distance, abs(bcsub($this->_vectorA[$i] ?? 0, $this->_vectorB[$i] ?? 0, self::CALCULATE_SCALE)), self::CALCULATE_SCALE);
        }
        return bcadd($distance, 0, $this->_scale);
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