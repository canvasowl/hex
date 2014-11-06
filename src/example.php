<?php 
/**********************************************
 *
 * This files shows how to call all the methods 
 * using the Hex class.
 * 
 *********************************************/
 
include 'hex.php';
use Canvasowl\Hex as Hex;

// Show a random color
echo Hex::make();

// Show a light color
echo Hex::light();

// Show a dark color
echo Hex::dark();

// Show a cool color
echo Hex::cool();

// Show a warm color
echo Hex::warm();