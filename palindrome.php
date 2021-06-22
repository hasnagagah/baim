<?php
function Palindrome($string){  
    if (strrev($string) == $string){  
        return 1;}
    else{
        return 0;}
}  
 
$original=$_GET['my_palindrome']; 

if(Palindrome($original)){  
    echo "Palindrome";  
} 

else{  
    echo "Not a Palindrome";}
?>  
