<?php

$age = "20";
$a = "18";
$b = "59";

if ($age >= $a && $age <= $b) {
    echo "Вам еще работать и работать";
} elseif ($age > $b) {
    echo "Вам пора на пенсию";
} elseif ($age >= 0 && $age <= 17) {
    echo "Вам рано еще работать";
} elseif ($age < 0) {
    echo "Неизвестный возраст";
}
