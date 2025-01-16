<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $number=$_POST["number"];
}
else{
    $number=$_GET["number"];
    if(array_key_exists("skills",$_GET)){
        $skills=$_GET["skills"];
        $count=1;
        foreach($skills as $ele){
        echo "Your Skill no $count is :  ". $ele."<br>";
        $count ++;
        }
    }
    foreach($number as $num){
        if(!empty($num)){
            echo "your number is $num <br>";
        }
    }
}


// if(empty($number) ){
//     // header("location:form.html"); // it will redirect you to the mentioned location
//     echo "Nothing Has Received ";
// }
// else{    
// }

// $skills="name";
// $skills="name2";

// $skills[]="name";
// $skills[]="name2";
?>