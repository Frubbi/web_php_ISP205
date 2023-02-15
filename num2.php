<?php

$product1 ='Стол';
$product2 ='Стул';
$product3 ='Столешница';

$price1 ='2702';
$price2 ='1500';
$price3 ='2780';

$max_prise = '';
$max_product = '';

if ($price1 > $price2) {
    if ($price1 > $price3) {
        $max_prise = $price1;
        $max_product = $product1;
    }
    elseif ($price3 > $price1) {
        $max_prise = $price3;
        $max_product = $product3;
    }    
} elseif ($price2 > $price1) { 
    if ($price2 > $price3) {
        $max_prise = $price2;
        $max_product = $product2;
    }
    elseif ($price3 > $price2) {
    $max_prise = $price3;
    $max_product = $product3;
    }       
} else {
    $max_prise = $price3;
    $max_product = $product3;
}

print_r("\n{$product1}=> {$price1}руб");
echo '<br>';
print_r("\n{$product2}=> {$price2}руб");
echo '<br>';
print_r("\n{$product3}=> {$price3}руб");
echo '<hr width="10%"align="left" >';
echo "Самый дорогой <strong>",$max_product,"</strong> (стоит ", $max_prise, "руб)";

//минимальная цена
$max_prise_1 = $price1;
$max_product_1 = $product1;

if ($price2 < $max_prise_1) {
        $max_prise_1 = $price2;
        $max_product_1 = $product2;
} 
if ($price3 < $max_prise_1) {
    $max_prise_1 = $price3;
    $max_product_1 = $product3;
} 
echo '<br>';
echo "Самый дешёвый <strong>",$max_product_1,"</strong> (стоит ", $max_prise_1, "руб)";