<!-- 

Максимальное время работы на одном тесте:	1 секунда
Последовательностью Фибоначчи называется последовательность чисел a0, a1, ..., an, ..., где a0 = 0, a1 = 1, ak = ak-1 + ak-2 (k > 1).

Требуется найти N-е число Фибоначчи.

Примечание. В программе запрещается использовать циклы.

Входные данные
На вход программы поступает целое неотрицательное число N (N ≤ 30).

Выходные данные
Требуется вывести N-е число Фибоначчи.

Примеры
входные данные
3
выходные данные
2

 -->

<?

function fib($n) {
  return ($n <= 1) ? $n : fib($n - 1) + fib($n - 2);
}

$num = readline();

echo fib($num);