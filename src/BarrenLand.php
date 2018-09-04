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


    public function __construct($startX, $startY, $endX, $endY)
    {
        $this->startX = $startX;
        $this->startY = $startY;
        $this->endX = $endX;
        $this->endY = $endY;
        $this->area;

 }
}