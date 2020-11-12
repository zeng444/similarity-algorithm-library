<?php

namespace Janfish\Algorithm\Library;

/**
 * Consinus Included Angle
 * 0-90度对应Cos 1-0
 * Class ConsinusIncludedAngle
 * @package Janfish\Algorithm\Library
 */
class ConsinusIncludedAngle extends AlgorithmBase implements AlgorithmInterface
{

    const CALCULATE_SCALE = 8;

    /**
     * @return string
     */
    public function compare(): string
    {
        $numerator = $this->numerator();
        if ($numerator == 0) {
            return '0';
        }
        return bcdiv($this->denominator(), $numerator, $this->_scale);
    }

    /**
     * @return string
     */
    private function numerator(): string
    {
        $sumVectorA = 0;
        $sumVectorB = 0;
        for ($i = 0; $i < $this->getBiggestVectorLength(); $i++) {
            if (isset($this->_vectorA[$i]) && $this->_vectorA[$i] != 0) {
                $sumVectorA = bcadd($sumVectorA, bcpow($this->_vectorA[$i], 2, self::CALCULATE_SCALE), self::CALCULATE_SCALE);
            }
            if (isset($this->_vectorB[$i]) && $this->_vectorB[$i] != 0) {
                $sumVectorB = bcadd($sumVectorB, bcpow($this->_vectorB[$i], 2, self::CALCULATE_SCALE), self::CALCULATE_SCALE);
            }
        }
        return bcmul(bcsqrt($sumVectorA, self::CALCULATE_SCALE), bcsqrt($sumVectorB, self::CALCULATE_SCALE), self::CALCULATE_SCALE);
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

    /**
     * @return string
     */
    private function denominator(): string
    {
        $denominator = 0;
        for ($i = 0; $i < $this->getBiggestVectorLength(); $i++) {
            if (!isset($this->_vectorA[$i]) || $this->_vectorA[$i] == 0 || !isset($this->_vectorB[$i]) || $this->_vectorB[$i] == 0) {
                continue;
            }
            $denominator = bcadd($denominator, bcmul($this->_vectorA[$i], $this->_vectorB[$i], self::CALCULATE_SCALE), self::CALCULATE_SCALE);
        }
        return $denominator;
    }

}