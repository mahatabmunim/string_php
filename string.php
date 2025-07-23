<?php

$str = 'screte123';
 //echo strlen($str);
if (strlen ($str) < 8){
    //strlen = string count
    die ( 'Maximum password length is 8');
} 
echo "Success";

$email = 'username@gmail.com';
// echo strpos($email, '@');
// string or char position scerch
if (strpos($email, '@')===false){
    echo "Invalide email";
}else{
    echo "Valid email";
}

$text = 'this is a string';
// str_replace string scersh and replice
//echo str_replace('string','php file','$text');
echo str_replace ('striing','php file', $text);

//space remove
$text = " hello world ";
echo trim ($text) . "\n";
echo rtrim ($text) . "\n";
echo ltrim ($text) . "\n";

// upper & lower case
$userEmail = "user@ gmail.com";
echo strtoupper($userEmail). "\n";
echo strtolower($userEmail). "\n";
echo ucfirst($userEmail). "\n";
echo ucwords($userEmail). "\n";


$post = "this is a vary long post....";
echo substr ($post, 0, 11);

// script
$string = "<script> alert('hacked') </script>";
echo htmlspecialchars($string);

//numbesr formating
$price = 10000000000;
echo number_format($price);

//textarea
$comnt = "please run php .\n i love php";
echo nl2br($comnt);


$str = addslashes('What does "yolo" mean?');
echo($str);

// repeat
echo str_repeat("**", 50);

// reverse
$rep = "hello world";
echo strrev($rep);

$str = "php is a sar. langua , php is powerfull";
echo substr_count($str, "is" );

echo strcasecmp("hello","hello");








