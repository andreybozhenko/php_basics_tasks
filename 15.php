<?php

if(isset($_POST['a']) && isset($_POST['b'])  ){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $operator = $_POST['select'];
    switch ($operator){
        case '+': echo "Ответ:",$a+$b;
            break;
        case '-': echo "Ответ:",$a-$b;
            break;
        case '*': echo "Ответ:",$a*$b;
            break;
        case '/': echo "Ответ:",$a/$b;
            break;
        case '%': echo "Ответ:",$a%$b;
            break;
        default: echo('Wrong!!!');
    }
}
?>
