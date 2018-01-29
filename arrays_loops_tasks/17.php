<?php
/**
 * Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
 * месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
 */

$array = [
    "January", "February", "March",
    "April", "May", "June",
    "July", "August", "September",
    "October", "November", "December"
];
$month = "January";

foreach ($array as $value) {
    echo ($value == $month) ? "<b>$value</b><br>" : "$value<br>";
}