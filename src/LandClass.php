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

    public function __con

    /**
     * calculate the total area of a barren rectangle
     */
    function barrenRectangleArea($length1, $length2)
    {
        $area = $length1 * $length2;

        return $area;
    }

    /**
     *
     */
    function totalLandArea()
    {

    }

    /**
     * @param $startCoordinate
     * @param $endCoordinate
     * @return mixed
     */
    function calculateLengthByCoordinates($startCoordinate, $endCoordinate)
    {
        return $endCoordinate - $startCoordinate;
    }


}