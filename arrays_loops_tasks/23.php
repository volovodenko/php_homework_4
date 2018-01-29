<?php
/**
 * Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
 * Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
 * По желанию можете сделать проверку на корректность введения данных пользователем.
 */

if ( isset($_POST["doResult"]) ) {
    $number = $_POST["number"];
    $array = str_split($number); //преобразовали в массив

    if ( !(is_numeric($number)) || in_array(".", $array) ) {
        echo "<p style='color: red;'>Введите допустимое целое число.</p><hr><br>";
    } else {
        echo "Результат вычисления $number: <br>";
        for ($i = 0; $i < strlen($number); $i++) {
            echo $i < (strlen($number) - 1) ? $number[$i] . "+" : $number[$i] . " = ";
        }
        echo array_sum($array). "<br><hr><br>";
    }
}

?>

<form method="POST">
    <input type="text" placeholder="Введите число" name="number" required>
    <br><br>
    <button type="submit" name="doResult">Вычислить</button>
</form>
