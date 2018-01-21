<?php

$date = "8";

if ($date >= "1" && $date <= "5") {
    echo "Это рабочий день";
} elseif ($date == "6" || $date == "7") {
    echo "Это выходной день";
} else {
    echo "Это неизвестный день";
}

switch ($date) {
    case 0:
        echo "Это рабочий день<br>";
        break;
    case 1:
        echo "Это выходной день<br>";
        break;
    case 2:
        echo "Это неизвестный день<br>";
        break;
}
echo "и в чем разница, switch & echo used together always?"
?>