<?php
$product1 ='Стол';
$product2 ='Стул';
$product3 ='Столешница';

function max_prisee($product1, $product2, $product3, $price1, $price2, $price3)
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
    echo "Самый дорогой <strong>",$max_product,"</strong> (стоит ", $max_prise, " руб)";
}

print max_prisee($product1, $product2, $product3, 100, 200, 90);
echo '<br>';
print max_prisee($product1, $product2, $product3, 215, 200, 90);
echo '<br>';
print max_prisee($product1, $product2, $product3, 125, 200, 201);


//использование пароля
echo '<br>';
echo '<br>';
echo "Проверка пароля";
echo '<br>';
function control($psw)
{
    $psw1 = "123";
    $otvet = "";
    if ($psw == $psw1) {
        $otvet = "Пароль верный";
        }
        else  {
            $otvet = "Ошибка в пароле";
        }
    return  $otvet;      
}
print control("234");
echo '<br>';
print control("123");
echo '<br>';
print control(123);
