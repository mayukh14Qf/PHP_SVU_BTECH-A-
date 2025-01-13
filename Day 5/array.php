<?php


$arr1=[23,67,3,10];

// echo $arr1; //(this is note possible)

for ($i=0; $i<=3 ; $i++){
    echo $arr1[$i]." ";
}

// php Array can have different data in a single array

$arr2= [12,67.89,"d","mayukhjit"];
for ($i=0; $i<=3 ; $i++){
    echo $arr2[$i]." ";
}

echo "<br>";

//Array Declaration

$arr3=array(34,67,90,23);
for ($i=0; $i<=3 ; $i++){
    echo $arr3[$i]." ";
}

echo "<br>".count($arr3); // It will return size of the array
echo "<br>";

// Methods of An Array 

$arr4=array(23,4,7,89,3,45,23);


//Fetching
echo $arr4[4]. "<br>";

//updating
$arr4[0]=34;
var_dump($arr4);

//adding
echo "<br>";
$arr4[]=56;
var_dump($arr4);

//deleteing

echo "<br>";
array_splice($arr4,1,2);
var_dump($arr4);

echo "<br>";
array_splice($arr4,3,1);
var_dump($arr4);

//For each Loop Of An Array


$arr5=array(23,67,8,9,0,34,54);

echo "<br>";
foreach($arr5 as $k){
    echo $k. " ";
}

// Sorting

$arr6=array(56,7,4,34,90);

echo "<br>";
// ascending order
sort ($arr6);
var_dump($arr6);

//decending order
echo "<br>";
rsort($arr6);
var_dump($arr6);


$arr7=array("apple","Apple","anna","amrit","aan","purple","name");

echo "<br>";
sort($arr7);
var_dump($arr7); // This array will be sorted in a lexicographically (in dictionary manner as per our ascii values)



?>