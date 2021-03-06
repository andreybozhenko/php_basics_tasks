<?php
/* Напишите конструкцию if, которая выводит фразу: "Вам еще работать и работать" при условии, что значение
 * переменной age попадает в диапазон чисел от 18 до 59 (включительно). Расширьте конструкцию if из п.5, выводя фразу:
 * "Вам пора на пенсию" при условии, что значение переменной age больше 59. Расширьте конструкцию if из п.5-6, выводя
 * фразу: "Вам еще рано работать" при условии, что значение переменной age попадает в диапазон чисел от 0 до 17
 * (включительно). Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение
 * переменной age является отрицательным числом, или вовсе числом не является. */
$age = "1";
$minAge = "18";
$maxAge = "59";

if (is_int($age) || $age <= 0) {
    echo "Неизвестный возраст";
} elseif ($age >= $minAge && $age <= $maxAge) {
    echo "Вам еще работать и работать";
} elseif ($age > $maxAge) {
    echo "Вам пора на пенсию";
} else {
    echo "Вам рано еще работать";
}
