<!------------ 
     Using for loop print only odd number from 1-10
     Output:
     1
     3
     5
     7
     9
-------------------------------->
<?php

     //print odd numbers between 1-10 using for loop
     for ($i = 1 ; $i <= 10; $i++) { 
         if($i % 2 != 0){
              echo $i.'<br>';
         }
     }
?>