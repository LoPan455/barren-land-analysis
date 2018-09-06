<?php
/**
 * Created by PhpStorm.
 * User: lopan
 * Date: 9/3/18
 * Time: 7:03 PM
 */

require __DIR__ . '/../vendor/autoload.php';

use BarrenLandAnalysis\BarrenLand;
use BarrenLandAnalysis\Utility;
use BarrenLandAnalysis\FieldClass;

// needed to format user input into usable data types for processing
$utility = new Utility();

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
    $dataSets = $utility->collectCoordinateSets($line);

    foreach ($dataSets as $set) {

        // format each data set into a properly formatted coordinate array
        $coordinateArray = $utility->formatInputArray($line);

        // instantiate a Barren Land rectangle object based on the data given
        $barrenLand = new BarrenLand($coordinateArray);
        $utility->checkForBisection($barrenLand, $field);

        // stores each data set in a holding array
        array_push($barrenLandCoordinateArray, $barrenLand);

    }
}
