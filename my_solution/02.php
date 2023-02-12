
<?php

function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 

$word = "mom";
if(Palindrome($word)){ 
    echo $word." is a Palindrome"; 
}
else { 
echo $word. " is not a Palindrome"; 
}
?> 