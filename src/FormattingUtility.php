<?php
/**
 * Created by PhpStorm.
 * User: tjohander
 * Date: 9/4/18
 * Time: 10:16 AM
 */

namespace BarrenLandAnalysis;


class FormattingUtility
{

    /**
     * @param $inputString
     * @return array
     */
    public function formatInputArray($inputString)
    {

        // create a standard php array from the input string
        $inputArray = explode(" ", $inputString);

        // initialize an empty array to hold the formatted values
        $coordinateArray = array();

        foreach($inputArray as $input) {
            // convert the input value to an integer
            $input = (int) $input;

            //  push the converted value into an array of x,y coordinates
            array_push($coordinateArray, $input);
        }

        var_dump($coordinateArray);
        // return the array
        return $coordinateArray;
    }

    /**
     * @param $inputString
     * @return array
     */
    public function buildArrayFromUserInput($inputString)
    {
        $inputArray = explode(" ", $inputString);
        return $inputArray;
    }

}