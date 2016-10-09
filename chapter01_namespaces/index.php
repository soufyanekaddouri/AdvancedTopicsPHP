<?php 
require __DIR__.'/vendor/autoload.php';
use Rych\Random\Random;

$random = new Random();
echo $random->getRandomInteger(1, 5);

// Wat heb ik geleerd van deze opdracht?
// Namespaces worden gebruikt om klassen te
// defineeren met een zelf gekozen naam, dat is handig
// als er meerdere bestanden zijn met dezelfde klasse
// en methodes.