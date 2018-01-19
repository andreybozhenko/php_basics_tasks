<?php

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
