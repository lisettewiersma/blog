<?php
 // get value of text-editor and print
 if(isset($_POST['save_text']))
 {
     $php_post_text=$_POST['php_post_text'];
     echo $php_post_text;
 }
 ?>