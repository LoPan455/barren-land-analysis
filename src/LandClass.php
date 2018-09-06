<?php
/**
 * Created by PhpStorm.
 * User: lopan
 * Date: 9/3/18
 * Time: 7:01 PM
 */

namespace BarrenLandAnalysis;


class LandClass
{

    const TOTAL_AREA_START_COORDINATE_1 = 0;

    const TOTAL_AREA_START_COORDINATE_2 = 0;

    const TOTAL_AREA_END_COORDINATE_1 = 399;

    const TOTAL_AREA_END_COORDINATE_2 = 599;

    /**
     * Calculates the total area of the field
     * @param $length1
     * @param $length2
     * @return float|int
     */
    function barrenRectangleArea($length1, $length2)
    {
        $area = $length1 * $length2;

        return $area;
    }


    /**
     *  Calculates a length by coordinates
     *
     * @param $startCoordinate
     * @param $endCoordinate
     * @return mixed
     */
    function calculateLengthByCoordinates($startCoordinate, $endCoordinate)
    {
        return $endCoordinate - $startCoordinate;
    }


}