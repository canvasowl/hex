<h1>Hex</h1>
<h3>Version 1.0</h3>

Description: A PHP class to generated different types of hex colors.

<h4>How Do I use this</h4>
<p>Using Hex is easy, simply incude the class to your project and call any of the methods.</p>
<p>Examples:</p>

<p><pre>
include 'hex.php';
use Canvasowl\Hex as Hex;

// Create Hex class instance
$hex = new Hex();

// Show a random color
// echo $hex->make();

// Show a light color
// echo $hex->light();

// Show a dark color
// echo $hex->dark();

// Show a cool color
// echo $hex->cool();

// Show a warm color
// echo $hex->warm();

// Show pastel color
echo $hex->pastel();
</pre></p>
