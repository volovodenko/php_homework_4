<?php
/**
 * Нарисуйте пирамиду, как показано на рисунке,
 * только у вашей пирамиды должно быть 20 рядов, а не 5.
 * x
 * xx
 * xxx
 * xxxx
 * xxxxx
 */

$string = "";

for ($i = 1; $i <= 20; $i++) {
    $string .= "x";
    echo "$string - $i<br>";
}