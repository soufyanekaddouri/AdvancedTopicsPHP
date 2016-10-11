<?php
require 'interfaces/CalculatorInterface.php'; // CalculatorInterface MOET ingeladen zijn

// Een nieuwe instantie maken van de Calculator klasse.
$calculator = new Calculator();

// Een array maken
$numbers = [2,9];

// De array doorgeven met de functie van de klasse.
echo $calculator->count($numbers)."\n";