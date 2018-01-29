<?php
/**
 * Создать генератор случайных таблиц.
 * Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
 * Есть список цветов, в массиве:
 * $colors = array('red','yellow','blue','gray','maroon','brown','green').
 * Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols,
 * в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors.
 * В каждой ячейке должно находиться случайное число.
 */

$colors =["red", "yellow", "blue", "gray", "maroon", "brown", "green"];
$row = rand(1, 10);
$cols = rand(1, 10);

echo "<table style='border-collapse: collapse; border: 2px solid black;'>";
for ($i = 1; $i <= $row; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $cols; $j++) {
        echo "<td style='background-color:"
            . $colors[array_rand($colors)]
            . "; padding: 5px; border: 1px solid black; text-align: center'>";
        echo rand(0, 100);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
