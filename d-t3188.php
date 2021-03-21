<!-- 

Задача №3188. Дуб, орех или пшено.
Вводится символ.

Входные данные
Вводится символ.

D - дуб

O - орех

P - пшено

N - ничего

Выходные данные
Если пользователь выбрал орех то вывести:

Na kogo greh?

Если пшено:

Mi s tobou za odno!

Если дуб:

Tri raza v zub!

Если ничего:

Viberay!

(См. пример).

Примеры
входные данные
D
выходные данные
Tri raza v zub!

 -->

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