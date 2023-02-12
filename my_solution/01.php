<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->


<?php

function vowelconso($alphabet)
{
    if ($alphabet == 'a' || $alphabet == 'e' ||
        $alphabet == 'i' || $alphabet == 'o' ||
        $alphabet == 'u')

        echo "Vowel";
    else
        echo "Consonant";
}

vowelconso('b');

 
?>