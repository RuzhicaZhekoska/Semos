<?php

require_once 'core/theme-setup.php';

// $number1 = 5;
// $number2 = 6;
// if($number1 > $number2)
// {
//     echo '<p>' . $number1 . ' is bigger than ' . $number2;
// }
// else
// {
//     echo '<h2>' . $number1 . ' is smaller than ' . $number2;
// }

// const DDV = 5;
// $number2 = 6;

// function getSum( $number1 , $number2)
// {
//     if($number1 > $number2)
//     {
//         echo '<p>' . $number1 . ' is bigger than ' . $number2 . '</p>';
//     }
//     else
//     {
//         echo '<h2>' . $number1 . ' is smaller than ' . $number2 . '</h2>';
//     }
    
// }
// getSum( 5 ,$number2);

// $name = 'Ruzica';
// $lastName = 'Zhekoska';

// function printName($name , $lastName)
// {
//     echo '<h1>' . $name . ' ' . $lastName . '</h1>';
// }

// printName($name , $lastName);


// $producrPrice = 2;
// $price = 6;
// const DDV = 5;
// function getSum($n1, $n2)
// {
//     $sum = $n1 + $n2;
//     return $sum; //11   
// }
// $priceSum = getSum($price , DDV);//2+11
// $sum = $producrPrice + $priceSum;//2+11=13
// echo 'The price is ' . $sum . ' den';

function isOlder($age1 , $age2)
{
    $isTrue = false;

    if($age1 > $age2)
    {
        $isTrue = true;
    }
    return $isTrue;
}