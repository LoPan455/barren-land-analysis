<?php
/**
 * Created by PhpStorm.
 * User: lopan
 * Date: 9/3/18
 * Time: 7:52 PM
 */

namespace BarrenLandAnalysis;


class BarrenLand extends BaseClass
{
    /**
     * @var integer
     */
    public $x1;

    /**
     * @var integer
     */
    public $y1;

    /**
     * @var integer
     */
    public $x2;

    /**
     * @var integer
     */
    public $y2;

    /**
     *
     */
    public $coordinateSet;

    /**
     * @var integer
     */
    public $area;

    /**
     * @var integer
     */
    public $length1;

    /**
     * @var integer
     */
    public $length2;

    /**
     * BarrenLand constructor.
     * @param $coordinateArray
     */
    public function __construct($coordinateArray)
    {
        $this->x1 = $coordinateArray['x1'];
        $this->y1 = $coordinateArray['x2'];
        $this->x2 = $coordinateArray['x2'];
        $this->y2 = $coordinateArray['y2'];
        $this->length1 = $this->getLength($this->x1, $this->x2);
        $this->length2 = $this->getLength($this->y1, $this->y2);
        $this->area = $this->getArea($this->length1, $this->length2);
        $this->coordinateSet = ['x1' => $this->x1, 'y1' => $this->y1, 'x2' => $this->x2, 'y2' => $this->x2];
    }

}