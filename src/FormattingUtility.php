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
class FormattingUtility
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
     * @param $inputString
     * @return array
     */
    public function buildArrayFromUserInput($inputString)
    {
        $inputArray = explode(self::VALUE_DELIMITER, $inputString);
        return $inputArray;
    }
}