<?php
/**
 * Вам нужно разработать программу, которая считала бы количество вхождений
 * какой-нибуть выбранной вами цифры в выбранном вами числе.
 * Например: цифра 5 в числе 442158755745 встречается 4 раза.
 */

if ( isset($_POST["doResult"]) ) {
    $number = $_POST["number"];
    $digit = $_POST["digit"];
    $arrayNumber = str_split($number); //преобразовали в массив

    //массив в котором ключи - значения $arrayNumber; значения - частота их повторения
    $arrayCountNumber = array_count_values($arrayNumber);


    if ( !is_numeric($number) || !is_numeric($digit) || in_array(".", $arrayNumber) || strlen($digit) != 1 ) {
        echo "<p style='color: red;'>Введите допустимое целое число и одну цифру.</p><hr><br>";
    } else {
        $result = isset($arrayCountNumber[$digit]) ? $arrayCountNumber[$digit] : 0;
        echo "Количество вхождений цифры $digit в числе $number составляет: $result раз" . "<br><hr><br>";
    }
}

?>

<form method="POST">
    <input type="text" placeholder="Введите число" name="number" required>
    <br>
    <input type="text" placeholder="Введите цифру" name="digit" required>
    <br><br>
    <button type="submit" name="doResult">Вычислить</button>
</form>
