<!------------ 
     Using switch case determine if an alphabet vowel or consonant. Vowels are
     a,e,i,o,u
     Output:
          Your input is a vowel
          OR
          Your input is a consonant
-------------------------------->
<?php
     //declaring value
     $alphabet = 'i';

     //find vowel or not
     if($alphabet === 'a' || $alphabet === 'e' || $alphabet === 'i' || $alphabet === 'o' || $alphabet === 'u'){
          echo 'Your input is a vowel';
     }
     else{
          echo 'Your input is a consonant';
     }
     
?>