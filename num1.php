<?php

$product1 ='Стол';
$product2 ='Стул';
$product3 ='Столешница';

$price1 ='2700';
$price2 ='1500';
$price3 ='2780';

$awared =(int)(($price1+$price2+$price3)/3);

print_r("\n{$product1}=> {$price1}руб");
echo '<br>';
print_r("\n{$product2}=> {$price2}руб");
echo '<br>';
print_r("\n{$product3}=> {$price3}руб");
echo '<hr width="10%"align="left" >';
print_r("\n\nСредняя цена товаров={$awared}руб");