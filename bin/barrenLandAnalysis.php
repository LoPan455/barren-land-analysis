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


$formattingUtility = new FormattingUtility();

// get user input
$set1 = readline('Enter Coordinates using the format \'X1, Y1, X2, Y2\' : ');
$coordinateArray = $formattingUtility->formatInputArray($set1);

$barrenLand1 = new BarrenLand($coordinateArray);
echo $barrenLand1->area . PHP_EOL;
