<?php
/**
 * Created by PhpStorm.
 * User: tjohander
 * Date: 9/5/18
 * Time: 10:26 AM
 */

namespace BarrenLandAnalysis;


class FieldClass extends BaseClass
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
     *
     */
    public $x1;

    /**
     *
     */
    public $y1;

    /**
     *
     */
    public $x2;

    /**
     *
     */
    public $y2;

    /**
     * @var array
     */
    public $coordinateSet;

    /**
     * FieldClass constructor.
     */
    public function __construct()
    {
        $this->coordinateSet = ['x1' => self::TOTAL_AREA_START_X, 'y1' => self::TOTAL_AREA_START_Y, 'x2' => self::TOTAL_AREA_END_X, 'y2' => self::TOTAL_AREA_END_Y];
    }
}


