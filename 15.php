<?php

$a = 2;
$b = 5;
$operator = "+";
$sum = "$a $operator $b = ";

switch ($operator){
    case '+':
        $sum.=$a+$b; break;
    case '-':
        $sum.=$a-$b; break;
    case '*':
        $sum.=$a*$b; break;
    case '/':
        if ($b==0){
            $sum="Деление на 0 запрещено!";
        }else{
            $sum.=$a/$b;
        }
        break;
    default:
        $sum = "Неизвестный оператор $operator";
}
echo $sum;