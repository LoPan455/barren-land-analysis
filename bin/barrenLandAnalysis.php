<?php
/**
 * Created by PhpStorm.
 * User: lopan
 * Date: 9/3/18
 * Time: 7:03 PM
 */

require __DIR__ . '/../vendor/autoload.php';

use BarrenLandAnalysis\BarrenLand;
use BarrenLandAnalysis\FormattingUtility;
use BarrenLandAnalysis\FieldClass;

// needed to format user input into usable data types for processing
$formattingUtility = new FormattingUtility();

// instantiate an object that describes the overall dimensions of the field
$field = new FieldClass();

// stores a collection of individual coordinate sets describing barren land rectangles
$barrenLandCoordinateArray = array();

// user input begins here
echo "Enter Coordinates of Barren Land rectangles using the format X1, Y1, X2, Y2.  Multiple sets of coordinates should be separated by commas." . PHP_EOL;
echo "Press enter after specifying coordinates" . PHP_EOL;
$line = trim(fgets(STDIN));

// begin processing input
if ($line) {
    $dataSets = collectCoordinateSets($line);

    foreach ($dataSets as $set) {

        // format each data set into a properly formatted coordinate array
        $coordinateArray = $formattingUtility->formatInputArray($line);

        // instantiate a Barren Land rectangle object based on the data given
        $barrenLand = new BarrenLand($coordinateArray);
        checkForBisection($barrenLand, $field);

        // stores each data set in a holding array
        array_push($barrenLandCoordinateArray, $barrenLand);

    }
}


/**
 * If either the starting and ending points on either the X or Y axis are equal, we know the barren land will bisect the field
 *
 * @param $barrenLand BarrenLand
 * @param $field FieldClass
 * @return bool
 */
function checkForBisection($barrenLand, $field)
{
    $bisect = false;
    $intersection = array_intersect_assoc($barrenLand->coordinateSet, $field->coordinateSet);
    var_dump($intersection);

    // find the matched coordinates
    $matches = array_keys($intersection);


    // check to see if they are along the same axis
    if (count($matches) == 2) {
        // if there is a match, we know the axis on which the fertile field is bisected
        //$axis = $matches;
        //calculateBisectedSquares($barrenLand, $field, )
        $bisect = true;
    }

    var_dump($bisect);
    return $bisect;

}

/**
 * Calculate the fertile area if a barren rectangle bisects the field
 *
 * @param $barrenLand BarrenLand
 * @param $axis string
 * @param $field FieldClass
 */
function calculateBisectedSquares($barrenLand, $field, $axis)
{
   $length1;
}

/**
 * Parses user input string into discrete data sets
 *
 * @param $string
 * @return array
 */
function collectCoordinateSets($string)
{
    $sets = explode(",", $string);
    return $sets;
}
