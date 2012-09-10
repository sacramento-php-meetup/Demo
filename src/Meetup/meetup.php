<?php
namespace Meetup;

use \DaganVendor\AnimalComponent\Dog;

/**
 * @todo Implement templating system - HTML mixed with php is NASTY!
 */

echo "1) new \stdClass():<BR \>";
$stdClass       = new \stdClass(); // stdClass();  // PHP's namespace == PHPs objects and functions
echo "class: ".get_class($stdClass)."<BR \>";
echo "<BR \>";


echo "2) new stdClass():<BR />";

$meetupStdClass = new stdClass(); // Meetup/stdClass();

echo "class: ".get_class($meetupStdClass)."<BR \>";
echo "<BR \>";



echo "3) \\DaganVendor\\AnimalComponent\\Dog: benji: brown, angry:";
echo "<BR \>";

$benji = new Dog('angry', 'brown');



echo "4) \\DaganVendor\\AnimalComponent\\Dog: lassi: gray, happy:";
echo "<BR \>";
echo "<BR \>";

$lassi = Dog::getInstance();

echo "<i>Lassi is Dog::getInstance(), she barks 'bow wow': </i>";
echo $lassi->bark(); // Returns 'bow wow!'
echo "<BR \>";

echo "<i>lassi is gray: </i>";
echo $lassi->color == 'gray'; // Return true
echo "<BR \>";
echo "<BR \>";

echo "<i>Benji barks RUFF: </i>";
echo $benji->bark(); // Returns 'RUFF!'
echo "<BR \>";

echo "<i>Benji is gray: </i>";
echo $benji->color == 'gray'; // Returns false
echo "<BR \>";
