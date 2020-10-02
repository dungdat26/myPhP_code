<?php 
$f = fopen("hoa.txt", "a+") or exit ("Không thể mở file!");

while(!feof($f)){
      echo fgets($f) . '<br/>';
     }


     
?>