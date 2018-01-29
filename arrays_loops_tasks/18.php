<?php
/**
 * Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
 * выходные дни следует вывести жирным.
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

$weekend = [
    "Saturday",
    "Sunday"
];

foreach ($array as $day) {
    echo (in_array($day, $weekend)) ? "<b style='color: red'>$day</b><br>" : "$day<br>";
}