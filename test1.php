<?php
/**
 * Created by PhpStorm.
 * User: Oleksii Lyzun
 * Date: 29.10.2017
 * Time: 21:55
 * Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’
 * или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
 * На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо -
 * выдавать ошибку что на 0 делить нельзя.
 */
/* $firstN = $_POST['firstNumber'];
$secondN = $_POST['secondNumber'];
$operator = $_POST['operator'];
if (!is_numeric($firstN) or !is_numeric($secondN)) {
    echo "Ви ввели не число / числа. Будьте внимательны!<br/><a href=\"15.html\">Вернутся назад</a>";
} elseif ($secondN == 0) {
    echo "На ноль делить нельзя! Ай-яй-яй<br/><a href=\"15.html\">Вернутся назад</a>";
} else {
    switch ($operator) {
        case '+':
            $result = $firstN + $secondN;
            break;
        case '-':
            $result = $firstN - $secondN;
            break;
        case '*':
            $result = $firstN * $secondN;
            break;
        case '/':
            $result = $firstN / $secondN;
            break;
        case '%':
            $result = $firstN % $secondN;
            break;
    }
    echo $result . '<br/><a href="15.html">Вернутся назад</a>';
}