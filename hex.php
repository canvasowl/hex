<?php 
namespace Canvasowl;

/**
 * This class is able to output numurous hex colors.
 *
 * Method list:
 * make : 	returns a random color
 * light: 	returns a light color 
 * dark:  	returns a dark color
 * cool:  	returns a cool color;
 * warm:  	returna a warm color;
 */
class Hex
{
	// returns a random hex color
	public function make(){
    	$rh = "";    	
    	for ($i=0; $i < 3 ; $i++) { 
    		$rh = $rh . str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
    	}
    	return '#' . $rh;
	}

	// returns a light color
	public function light(){
		$light_arr 	= 	array('a','b','c','d','e','f');
		$lightHex 	= 	"";

		for ($i=0; $i <= 5 ; $i++) { 
			$lightHex .= $light_arr[mt_rand(0,5)];
		}

		return '#' . $lightHex;
	}

	// returns a dark color
	public function dark(){}

	// returns a cool color
	public function cool(){}

	// returns a warm color
	public function warm(){}
	
}







