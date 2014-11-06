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
	public static function make(){
    	$rh = "";    	
    	for ($i=0; $i < 3 ; $i++) { 
    		$rh = $rh . str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
    	}
    	return '#' . $rh;
	}

	// returns a light color
	public static function light(){
		$light_arr = array('a','b','c','d','e','f');
		$lightHex = "";

		for ($i=0; $i <= 5 ; $i++) { 
			$lightHex .= $light_arr[mt_rand(0,5)];
		}

		return '#' . $lightHex;
	}

	// returns a dark color
	public static function dark(){
		$darkHex = "";

		for ($i=0; $i <= 5 ; $i++) { 
			$darkHex .= mt_rand(0,9);
		}
		
		return '#' . $darkHex;		
	}

	// returns a cool color
	public static function cool(){
		$r = mt_rand(0,150);
		$g = mt_rand(0,150);
		$b = mt_rand(160,255);
		$coolHex = dechex($r . $g . $b);

		return '#' . $coolHex;
	}

	// returns a warm color
	public static function warm(){
		$r = mt_rand(160,255);
		$g = mt_rand(0,150);
		$b = mt_rand(0,150);
		$warmHex = dechex($r . $g . $b);

		return '#' . $warmHex;		
	}	

}




