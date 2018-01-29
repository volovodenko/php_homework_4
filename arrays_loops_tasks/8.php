<?php
/**
 * Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
 * С помощью цикла foreach создайте строку
 * "-1-2-3-4-5-6-7-8-9-"
 */

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$string = "-";

foreach ($array as $value) {
    $string .= $value . "-";
}

echo $string;