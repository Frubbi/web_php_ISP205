<?php

$product1 ='Стол';
$product2 ='Стул';
$product3 ='Столешница';

$price1 ='2700';
$price2 ='1500';
$price3 ='2780';

$awared =(int)(($price1+$price2+$price3)/3);
$average =round((($price1 + $price2 + $price3)/3), 2);

print_r("\n{$product1}=> {$price1}руб");
echo '<br>';
print_r("\n{$product2}=> {$price2}руб");
echo '<br>';
print_r("\n{$product3}=> {$price3}руб");
echo '<hr width="10%"align="left" >';
print_r("\n\nСредняя цена товаров={$awared}руб");
echo '<br>';
echo '<br>';
echo "<table border='1'><tr><td>Товар</td><td>Цена</td></tr><tr><td>$product1</td><td>$price1</td></tr><tr><td>$product2</td><td>$price2</td></tr><tr><td>$product3</td><td>$price3</td></tr></table>";
echo '<br>';
print_r("\n\nСредняя цена ={$average}руб.");