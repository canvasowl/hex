<h1>hex</h1>
<h2>Version 1.0</h2>
<hr>

Description: A PHP class to generated different types of hex colors.

<h3>How Do I use this</h3>
<p>Using Hex is easy, simply incude the class to yoru project and call any of the methods.</p>
<p>Examples:</p>

<p><pre>
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
</pre></p>
