<?php
/**
 * Created by PhpStorm.
 * User: lopan
 * Date: 9/3/18
 * Time: 7:03 PM
 */

require __DIR__ . '/../vendor/autoload.php';


$coordinateArray = [];

for ($iterator = 1; $iterator <= 4; $iterator++) {
    $coordinate = (int)readline("Enter Coordinate $iterator: ");
    array_push($coordinateArray, $coordinate);
}


var_dump($coordinateArray);