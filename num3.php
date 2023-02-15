<?php
$product1 ='Стол';
$product2 ='Стул';
$product3 ='Столешница';

$price1 = rand(1,150);
$price2 = rand(1,150);
$price3 = rand(1,150);
//$max_product ="";
function max_prise($product1, $product2, $product3, $price1, $price2, $price3)
{
    $max_product ='';
    $max_prise = '';
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
    echo "Самый дорогой <strong>",$max_product,"</strong> (стоит ", $max_prise, "руб)";
}
max_prise();
