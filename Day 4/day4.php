<?php



// $id1=$_GET["id"]; // id is the name in html
// $password1=$_GET["password"];
// $email1=$_GET["email"];

$id1=$_POST["id"]; // id is the name in html
$password1=$_POST["password"];
$email1=$_POST["email"];

if($id1=="" && $password1==""){

    header("index.html");
    exit();
    // echo " You have not submitted all the values
    // <br>
    //  <a href='index.html'>Home</a>
    
    // ";
}
else{
    echo "You have successfully submitted the form.. <br><br>";
echo " your user id is :   $id1 <br> 
 your password is : $password1 <br>
 your email id is :  $email1";
}
?>