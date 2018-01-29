<?php
/**
 * Выведите столбец чисел от 1 до 100.
 */

echo "<b>С помощью цикла for:</b><br>";
for ($i = 1; $i <= 100; $i++) {
    echo "$i<br>";
}

echo "<br><hr><br>";

echo "<b>С помощью цикла while:</b><br>";
$i = 1;
while ($i <= 100) {
    echo "$i<br>";
    $i++;
}