<?php
/**
 * Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
 * xx
 * xxxx
 * xxxxxx
 * xxxxxxxx
 * xxxxxxxxxx
 */

echo "<b>С помощью цикла for:</b><br>";
$string = "xx";
for ($i = 1; $i <= 5; $i++, $string .= "xx") {
    echo $string . "<br>";
}

echo "<br><hr>";

echo "<b>С помощью цикла while:</b><br>";
$string = "";
while (strlen($string) < 10) {
    $string .= "xx";
    echo $string . "<br>";
}