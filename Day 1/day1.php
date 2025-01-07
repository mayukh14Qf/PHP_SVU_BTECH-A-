<?php

// $a=12;
// $b=90;

// echo $a+$b;


// Swap 2 number without 3rd variable


$num1=10;
$num2=20;


$num1=$num1 + $num2;
$num2=$num1-$num2;
$num1=$num1 - $num2;

echo "1st num is $num1 <br> 2nd num is $num2 <br>";



// leap year 

$year=2001;

if($year%4==0 && $year%100!=0){
    echo "leap year <br>";
}
elseif($year%400==0){
    echo "leap year <br>";
}
else{
    echo "not leap year <br>";
}

//Take 2 number and compare the last digit of these numbers and print the bigger one

$num3=3456;
$num4=4567;

$last1=($num3%10);
$last2=($num4%10);

if($last1>$last2){
    echo $last1;
}
else{
    echo $last2;
}



?>