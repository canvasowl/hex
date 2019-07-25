<?php 
/**********************************************
 *
 * This files shows how to call all the methods 
 * using the Hex class.
 * 
 *********************************************/
 
include 'hex.php';
use Canvasowl\Hex as Hex;

$hex = new Hex();

// Show a random color
// echo $hex->make();

// // Show a light color
// echo $hex->light();

// // Show a dark color
// echo $hex->dark();

// // Show a cool color
// echo $hex->cool();

// // Show a warm color
// echo $hex->warm();

echo $hex->pastel();