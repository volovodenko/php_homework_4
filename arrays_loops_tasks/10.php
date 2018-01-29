<?php
/**
 * Выведите столбец чисел от 11 до 33.
 */

echo "<b>С помощью цикла for:</b><br>";
for ($i = 11; $i <= 33; $i++) {
    echo "$i<br>";
}

echo "<br><hr><br>";

echo "<b>С помощью цикла while:</b><br>";
$i = 11;
while ($i <= 33) {
    echo "$i<br>";
    $i++;
}