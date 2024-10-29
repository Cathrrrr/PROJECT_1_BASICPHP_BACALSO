<?php
// Defining constants using define() function
define("PI", 3.14159);
define("GRAVITY", 9.8);
define("LIGHT_SPEED", 299792458); // Speed of light in meters per second
define("AVOGADRO", 6.02214076e23); // Avogadro's number
define("BOLTZMANN", 1.380649e-23); // Boltzmann constant

// Defining constants using const keyword
const PLANCK = 6.62607015e-34; // Planck constant
const EARTH_RADIUS = 6371; // Radius of Earth in kilometers
const GOLDEN_RATIO = 1.61803;
const EULER_NUMBER = 2.71828; // Euler's number
const ATMOSPHERIC_PRESSURE = 101325; // Atmospheric pressure in Pascals

// Example usage of constants
$circleRadius = 10; // Example for PI
$gravityForce = GRAVITY * 50; // Example for gravity calculation
$photonEnergy = PLANCK * LIGHT_SPEED; // Energy of a photon using Planck's constant and speed of light
$avogadroMolecules = AVOGADRO * 0.002; // Example for Avogadro's number with 0.002 mol
$boltzmannEnergy = BOLTZMANN * 300; // Example for energy at temperature 300K using Boltzmann constant
$earthCircumference = 2 * PI * EARTH_RADIUS; // Example for calculating Earth's circumference
$goldenRectangleLength = GOLDEN_RATIO * 5; // Example of golden ratio calculation for a rectangle
$naturalLogExp = log(EULER_NUMBER); // Example for Euler's number
$atmPressureForce = ATMOSPHERIC_PRESSURE * 0.05; // Example for pressure on an area of 0.05m²
$photonWavelength = LIGHT_SPEED / (5 * 10**14); // Example for calculating photon wavelength
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Constants </title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif, sans-serif;
            background-color: #f0f8f0; /* Light background color */
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #2c6b2c; /* Darker green for the header */
        }
        h2 {
            color: #4caf50; /* Green color for subheadings */
        }
        ul {
            list-style-type: none; /* Remove bullet points */
            padding: 0;
        }
        li {
            background: #e7f7e7; /* Light green background for list items */
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }
        p {
            background: #e7f7e7; /* Light green background for paragraphs */
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
            margin: 10px 0;
        }
        .button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #2c6b2c; /* Dark green button */
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            font-size: 1.1em;
        }
        .button:hover {
            background-color: #245b24; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <h1> Constants and Their Usage</h1>
    
    <h2>Constants</h2>
    <ul>
        <li><strong>PI:</strong> <?php echo PI; ?> (Used in circle area calculation)</li>
        <li><strong>Gravity (m/s²):</strong> <?php echo GRAVITY; ?> (Used for force calculation)</li>
        <li><strong>Speed of Light (m/s):</strong> <?php echo LIGHT_SPEED; ?></li>
        <li><strong>Avogadro's Number:</strong> <?php echo AVOGADRO; ?></li>
        <li><strong>Boltzmann Constant (J/K):</strong> <?php echo BOLTZMANN; ?></li>
        <li><strong>Planck Constant (J·s):</strong> <?php echo PLANCK; ?></li>
        <li><strong>Earth Radius (km):</strong> <?php echo EARTH_RADIUS; ?></li>
        <li><strong>Golden Ratio:</strong> <?php echo GOLDEN_RATIO; ?></li>
        <li><strong>Euler's Number:</strong> <?php echo EULER_NUMBER; ?></li>
        <li><strong>Atmospheric Pressure (Pa):</strong> <?php echo ATMOSPHERIC_PRESSURE; ?></li>
    </ul>

    <h2>Examples of Using Constants</h2>
    <p><strong>Area of a circle with radius 10:</strong> <?php echo PI * pow($circleRadius, 2); ?> (using PI)</p>
    <p><strong>Force on a 50 kg object:</strong> <?php echo $gravityForce; ?> N (using Gravity)</p>
    <p><strong>Energy of a photon:</strong> <?php echo $photonEnergy; ?> J (using Planck's constant and speed of light)</p>
    <p><strong>Number of molecules in 0.002 mol:</strong> <?php echo $avogadroMolecules; ?> molecules (using Avogadro's number)</p>
    <p><strong>Energy at 300K:</strong> <?php echo $boltzmannEnergy; ?> J (using Boltzmann constant)</p>
    <p><strong>Earth's Circumference:</strong> <?php echo $earthCircumference; ?> km (using Earth's radius)</p>
    <p><strong>Golden rectangle with width 5:</strong> <?php echo $goldenRectangleLength; ?> (using Golden Ratio)</p>
    <p><strong>Natural logarithm of Euler's number:</strong> <?php echo $naturalLogExp; ?> (using Euler's number)</p>
    <p><strong>Force of air pressure on 0.05m²:</strong> <?php echo $atmPressureForce; ?> N (using Atmospheric pressure)</p>
    <p><strong>Photon wavelength for frequency 5x10<sup>14</sup> Hz:</strong> <?php echo $photonWavelength; ?> meters (using speed of light)</p>

    <hr style="border: 1px solid green; margin-bottom: 20px;">
    <div> 
        Creator's Name: Menzi Ann Bacalso  </div>
       <div>  Date Created: October 25,2024
    </div>

    <a class="button" href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        window.close(); 
        window.location.href = "mainpage.php";
    }
</script>

</body>
</html>
