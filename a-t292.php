<!-- 

    Задача №292. Максимум из двух чисел
    Входные данные
    Даны два целых числа, каждое число записано в отдельной строке.

    Выходные данные
    Выведите наибольшее из данных чисел.

    Примеры
    входные данные
    1
    2
    выходные данные
    2

 -->

<?php

$n1 = readline();
$n2 = readline();

if ($n1 > $n2) {
    $max = $n1;
} else {
    $max = $n2;
}

echo $max;