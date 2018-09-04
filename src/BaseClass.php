<?php
/**
 * Created by PhpStorm.
 * User: lopan
 * Date: 9/3/18
 * Time: 8:05 PM
 */

namespace BarrenLandAnalysis;


class BaseClass
{
    /**
     * @param $startCoordinate integer
     * @param $endCoordinate integer
     * @return mixed
     */
    protected function getLength($startCoordinate, $endCoordinate)
    {
        $length = $endCoordinate - $startCoordinate;

        return $length;
    }

    /**
     * @param $length1 integer
     * @param $length2 integer
     * @return float|int
     */
    protected function getArea($length1, $length2)
    {
        $area = $length1 * $length2;

        return $area;
    }

}