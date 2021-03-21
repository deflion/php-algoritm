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
        echo "Tri raza v zub!";
        break;
    case("O"):
        echo "Na kogo greh?";
        break;
    case("P"):
        echo "Mi s tobou za odno!";
        break;

    default: 
        echo "Viberay!";
        break;
}