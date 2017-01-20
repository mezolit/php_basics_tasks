<?php

$day = 10; 

switch ($day){
    case ($day >= 1 && $day <= 5):
        echo "Это рабочий день";
    case ($day >= 6 && $day <= 7):
        echo "Это выходной день";
    default:
        echo "Неизвестный день";
}