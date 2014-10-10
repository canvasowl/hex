<?php 
namespace Canvasowl;


class Hex
{
	// Returns a random hex color
	public function make(){
    	$rh = "";    	
    	for ($i=0; $i < 3 ; $i++) { 
    		$rh = $rh . str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
    	}
    	return '#' . $rh;
	}
}







