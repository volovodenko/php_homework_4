<?php
/**
 * Вывести таблицу умножения
 */

//Таблица на циклах for в задании 28, поэтому здесь будет на циклах while

$i = 1;
$j = 1;

while ($i <= 10) {
    while ($j <= 10) {
        echo "$i x $j = " . $i * $j . "<br>";
        $j++;
    }

    echo ($i == 10) ? "" : "<br><hr>";
    $i++;
    $j = 1;
}
