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
     * Returns a length based on two coordinates
     *
     * @param $startCoordinate integer
     * @param $endCoordinate integer
     * @return mixed
     */
    protected function getLength($startCoordinate, $endCoordinate)
    {
        // one is added here to account for the coordinates starting 0, yet length is measured in units starting with 1
        $length = ($endCoordinate - $startCoordinate) + 1;

        return $length;
    }

    /**
     *  Returns the area of a rectangle
     *
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