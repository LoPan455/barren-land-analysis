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
    public $startX;

    /**
     * @var integer
     */
    public $startY;

    /**
     * @var integer
     */
    public $endX;

    /**
     * @var integer
     */
    public $endY;

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
        $this->startX = $coordinateArray[0];
        $this->startY = $coordinateArray[1];
        $this->endX = $coordinateArray[2];
        $this->endY = $coordinateArray[3];
        $this->length1 = $this->getLength($this->startX, $this->endX);
        $this->length2 = $this->getLength($this->startY, $this->endY);
        $this->area = $this->getArea($this->length1, $this->length2);

    }

    private function calculateBarrenArea()
    {

    }
}