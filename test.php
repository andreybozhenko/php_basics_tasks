<?php
/*Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число.
Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
На экран выводить результат в зависимости от значений этих переменных.
 Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
 */
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
    <!DOCTYPE HTML>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>9</title>
    </head>

    <body style="text-align: center; padding: 0 35%;">
    <form method="POST" action="15.php">
        <label for="first">Укажите а:<input type="text" id="first" name="a"></label><br>
        <label for="second">Укажите б:<input type="text" id="second" name="b"></label><br>
        <label for="third">Укажите действие:
            <select name="select">
                <option disabled selected>Действие</option>
                <option value="+">Сложение</option>
                <option value="-">Вычитание</option>
                <option value="*">Умножение</option>
                <option value="/">Деление</option>
                <option value="%">Остаток от деления</option>
            </select>
        </label>
        <input type="submit">
    </form>
    </body>
    </html><?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.01.2018
 * Time: 20:21
 */