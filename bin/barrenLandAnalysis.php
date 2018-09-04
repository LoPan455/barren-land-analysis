<?php
/**
 * Created by PhpStorm.
 * User: lopan
 * Date: 9/3/18
 * Time: 7:03 PM
 */

require __DIR__ . '/../vendor/autoload.php';


$coordinateArray = [];


// get one line of input
echo "Enter a set of four integer coordinates, each separated by a space" . PHP_EOL;
$set1 = readline('Enter Coordinates: ');
var_dump($set1);
$array1 = explode(" ", $set1);
var_dump($array1);

// for each over these to cast them as ints

// explode the sting on a space character

// cast each value as an int









//// probably not needed
//for ($iterator = 1; $iterator <= 4; $iterator++) {
//    $coordinate = (int)readline("Enter Coordinate $iterator: ");
//    array_push($coordinateArray, $coordinate);
//}
//
//// not what is needed
//function getAreaCoordinates()
//{
//    for ($iterator = 1; $iterator <= 4; $iterator++) {
//        $coordinate = (int)readline("Enter Coordinate $iterator: ");
//        array_push($coordinateArray, $coordinate);
//    }
//}


// var_dump($coordinateArray);