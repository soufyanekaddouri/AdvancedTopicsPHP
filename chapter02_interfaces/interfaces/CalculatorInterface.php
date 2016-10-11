<?php

interface CalculatorInterface {
    public function count(array $numbers);
}

class Calculator implements CalculatorInterface {

    // Omdat deze klasse CalculatorInterface implementeert
    // is het verplicht al zijn functies te benoemen.

    public function count(array $numbers) {
        $result = 0; // Resultaat = 0

        foreach ($numbers as $number) { $result = $result + $number; }
        return $result;
    }
    
}