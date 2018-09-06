<?php
/**
 * Created by PhpStorm.
 * User: tjohander
 * Date: 9/4/18
 * Time: 10:16 AM
 */

namespace BarrenLandAnalysis;


/**
 * Class FormattingUtility
 *
 * @package BarrenLandAnalysis
 */
class Utility
{
    const VALUE_DELIMITER = " ";

    /**
     * Converts user input into an associative array of coordinates
     *
     * @param $inputString
     * @return array
     */
    public function formatInputArray($inputString)
    {
        // create a standard php array from the input string
        $inputArray = $this->buildArrayFromUserInput($inputString);

        // initialize an empty array to hold the formatted values
        $coordinateArray = array('x1' => null, 'y1' => null, 'x2' => null, 'y2' => null);

        // add appropriate values into the coordinate array
         $coordinateArray['x1'] = $inputArray[0];
         $coordinateArray['y1'] = $inputArray[1];
         $coordinateArray['x2'] = $inputArray[2];
         $coordinateArray['y2'] = $inputArray[3];

        // return the array
        return $coordinateArray;
    }

    /**
     * Builds a PHP array from user input string
     *
     * @param $inputString
     * @return array
     */
    public function buildArrayFromUserInput($inputString)
    {
        $inputArray = explode(self::VALUE_DELIMITER, $inputString);
        return $inputArray;
    }

    /**
     * If either the starting and ending points on either the X or Y axis are equal, we know the barren land will bisect the field
     *
     * @param $barrenLand BarrenLand
     * @param $field FieldClass
     * @return bool
     */
    public function checkForBisection($barrenLand, $field)
    {
        $bisect = false;
        $intersection = array_intersect_assoc($barrenLand->coordinateSet, $field->coordinateSet);
        var_dump($intersection);

        // find the matched coordinates
        $matches = array_keys($intersection);


        // check to see if they are along the same axis
        if (count($matches) == 2) {
            // if there is a match, we know the axis on which the fertile field is bisected
            $bisect = true;
        }

        return $bisect;

    }

    /**
     * Parses user input string into discrete data sets
     *
     * @param $string
     * @return array
     */
    public function collectCoordinateSets($string)
    {
        $sets = explode(",", $string);
        return $sets;
    }
}