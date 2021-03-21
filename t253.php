<?php
$year = readline();

(($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) ? $answer = "YES" : $answer = "NO";

echo $answer;