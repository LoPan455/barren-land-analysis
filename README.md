Pre-Requisites:

PHP installed on the local system from which this app will run

To install:

Run the following commands in a macOS or linux terminal session:

`git clone https://github.com/LoPan455/barren-land-analysis.git`

To run the application

`php bin/barrenLandAnalysis.php`

Follow the prmompts to enter one or more sets of coordinates in the formL

`x1 y1 x1 x2`

Separate multiple data sets by a comma:

`x1 y1 x2 y2,x1 x1 y1 x2 y2`




# barren-land-analysis

You have a farm of 400m by 600m where coordinates of the field are from (0, 0) to (399,
599). A portion of the farm is barren, and all the barren land is in the form of rectangles.
Due to these rectangles of barren land, the remaining area of fertile land is in no
particular shape. An area of fertile land is defined as the largest area of land that is not
covered by any of the rectangles of barren land.
Read input from STDIN. Print output to STDOUT

Input

You are given a set of rectangles that contain the barren land. These rectangles are
defined in a string, which consists of four integers separated by single spaces, with no
additional spaces in the string. The first two integers are the coordinates of the bottom
left corner in the given rectangle, and the last two integers are the coordinates of the
top right corner.

Output

Output all the fertile land area in square meters, sorted from smallest area to greatest,