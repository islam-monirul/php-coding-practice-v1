<!------------ 
     Using for loop print only even number from 1-10
     Output:
          2@4@6@8@10@
-------------------------------->
<?php

     //print even numbers between 1-10 using for loop
     for ($i = 1 ; $i <= 10; $i++) { 
         if($i % 2 == 0){
              echo $i.'@';
         }
     }
?>