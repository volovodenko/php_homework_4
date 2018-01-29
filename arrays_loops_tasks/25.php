<?php
/**
 * Ваше задание создать массив, наполнить это случайными значениями (функция rand),
 * найти максимальное и минимальное значение и поменять их местами.
 */

$array = [];

// Заполняем массив
for ($i=0; $i <= 10; $i++) {
    $array[] = rand(0, 100);
}

echo "<p>Исходный массив:</p><pre>";
print_r($array);
echo "</pre><br><hr>";

$keyMax = array_search(max($array), $array); //Ищем ключ максимального числа в массиве
$keyMin = array_search(min($array), $array); //Ищем ключ минимального числа в массиве

echo "<br>Максимальное число: $array[$keyMax]<br>";
echo "Минимальное число: $array[$keyMin]<br><br><hr>";

//Создаем массив, ключи которого содержат поменяные местами мин. и макс. значения
$arrayReplace = [$keyMax => $array[$keyMin], $keyMin => $array[$keyMax]];

//Заменяем элементы исходного массива элементами созданного массива
$array = array_replace($array, $arrayReplace);

echo "<p>Измененный массив:</p><pre>";
print_r($array);
echo "</pre>";
