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
     *
     */
    const TOTAL_AREA_START_X = 0;

    /**
     *
     */
    const TOTAL_AREA_START_Y = 0;

    /**
     *
     */
    const TOTAL_AREA_END_X = 399;

    /**
     *
     */
    const TOTAL_AREA_END_Y = 599;



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