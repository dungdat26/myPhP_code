<?php 
$chuoi = ("1 2 3 4 5");
$mang_chuoi = explode(' ',$chuoi);

for($i=0; $i < 5; $i++)
{
    echo $mang_chuoi[$i] . '<br/>';
}
echo array_sum($mang_chuoi);
?>   