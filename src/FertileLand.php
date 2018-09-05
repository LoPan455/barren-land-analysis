<?php
/**
 * Created by PhpStorm.
 * User: tjohander
 * Date: 9/4/18
 * Time: 10:47 AM
 */

namespace BarrenLandAnalysis;


class FertileLand extends BaseClass
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
     * FertileLand constructor.
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

    /**
     * @param $length1
     * @param $length2
     */
    private function calculateFertileLengthFromCoordinates($length1, $length2)
    {

    }

    // we already know the length of the barren rectangle.  We also know the length of the area, so, we just match the length of one side of
    // the barren area and subtract it from the total length of the field.

}