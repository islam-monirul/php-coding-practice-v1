<!------------ 
     Using PHP built in function replace a word from a string. In “Hello Bangladesh!”
     string Bangladesh will be replaced by CIT.
     Output:
          Hello CIT!
-------------------------------->

<?php
     $main_string = "Hello Bangladesh!";

     // replaceing the value of the string and printing the output as asked
     echo str_replace('Bangladesh','CIT', $main_string);

?>