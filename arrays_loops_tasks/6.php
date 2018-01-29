<?php
/**
 * Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en,
 * а русские — в массив $ru.
 * $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 * $en = array('green', 'red','blue');
 * $ru = array('зеленый', 'красный', 'голубой');
 */

$arr = array ('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = [];
$ru = [];

foreach ($arr as $keyEn => $valueRu) {
    $en[] = $keyEn;
    $ru[] = $valueRu;
}

echo '<b>Массив $en</b><pre>';
print_r($en);
echo '</pre><br><hr><b>Массив $ru<b><br><pre>';
print_r($ru);
echo "</pre>";