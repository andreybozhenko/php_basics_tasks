<?php
/*Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость
автомобиля на заданном участке в км/час и в м/сек.*/
$s = 200;
$t = 2;

echo $s / $t;
echo " km/h <br>";
echo round(($s * 1000) / ($t * 3600), 2);
echo " m/s";