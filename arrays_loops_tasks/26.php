<?php
/**
 * Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand).
 * Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы.
 * После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
 */
// 0 - парный индекс

$array = [];
$multiply = 1;

// Заполняем массив случаными числами от 0 до 100, иначе не будет элемента со значением 0
for ($i=0; $i <= 10; $i++) {
    $array[] = rand(0, 100);
}

echo "<p>Созданный массив:</p><pre>";
print_r($array);
echo "</pre><br><hr>";

//Вычисляем результат произведения
foreach ($array as $key => $value) {
    $multiply *= (!($key%2) && $value != 0 ) ? $value : 1;
}

echo "<br>Произведение элементов с парными индексами равно $multiply<br><br><hr>";

echo "<p>Элементы, которые больше ноля и у которых не парный индекс:</p>";
foreach ($array as $key => $value) {
    echo ( ($key%2) && $value != 0 ) ? "$value<br>" : "";
}