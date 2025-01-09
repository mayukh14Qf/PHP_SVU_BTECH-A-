<?php

// Count Number of digits

$num1=345;
$count1=0;

while($num1>0){
    $count1 =$count1+1;
    $num1=(int)($num1/10);
}

echo $count1;
echo "<br>";

// Factorial of a number

$num2=4;

$fact1=1;

for($i=1;$i<=$num2;$i++){
    $fact1=$fact1*$i;
}

echo $fact1;
echo "<br>";

// palindrome Number

$num3=1221;

$temp1=$num3;
$rev=0;

while($temp1>0){
    $rev=($rev*10)+($temp1%10);
    $temp1=(int)($temp1/10);
}

if($rev==$num3){
    echo "It is Palindrome <br>";
}
else{
    echo "it is not a palindrome <br>";
}

// prime Number


$num4=7;

$prime_count=0;

for($i=1;$i<=$num4;$i++){
    if($num4%$i==0){
        $prime_count ++;
        echo "$i ";
    }
}
echo("<br>");
if($prime_count==2){
    echo "It is a Prime Number <br>";
}
else{
    echo "It is not a Prime Number <br>";
}

//Fibonacci Series

$user_position=7;

$position_1=0;
$position_2=1;
echo "0 1 ";

for($i=3;$i<=$user_position;$i++){

    $c=$position_1+$position_2;
    echo "$c ";
    $position_1=$position_2;
    $position_2=$c;
}

// perfect Number 

$num5=1;

$prime_factors_sum=0;

for($i=1;$i<=$num5;$i++){
    if($num4%$i==0){
        $prime_factors_sum=$prime_factors_sum+$i;
    }
}

if($prime_factors_sum==$num5){
    echo "<br> Perfect Number";
}
else{
    echo "<br> Not A Perfect Number";
}


?>


