<?php
/**
 * Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
 * а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
 */

$array = [
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
    "Sunday"
];

$day = "Sunday";

foreach ($array as $value) {
    echo $value == $day ? "<i>$value</i><br>" : "$value<br>";
}