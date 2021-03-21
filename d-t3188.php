<?php

$char = readline();

switch($char){

    case("D"):
        $answer = "Tri raza v zub!";
        break;
    case("O"):
        $answer = "Na kogo greh?";
        break;
    case("P"):
        $answer = "Mi s tobou za odno!";
        break;

    default: 
        $answer = "Viberay!";
        break;
}

echo $answer;