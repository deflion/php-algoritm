<!-- 

Задача №112203. Сумма чисел
Напишите программу, которая вводит натуральное число N и находит сумму всех натуральных чисел от 1 до N .

Входные данные
Входная строка содержит единственное целое число N .

Выходные данные
Программа должна вывести сумму натуральных чисел от 1 до введённого числа N .

Примеры
входные данные
100
выходные данные
5050

 -->

<?php

$n = readline();
$sum = 0;

for ($i = 1; $i <= $n; $i++){
    $sum += $i;
}

echo $sum;