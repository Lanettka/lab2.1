<?php
$a=2;
$a.=($b+(‘Hello’.$a));
$a+=$b+$b;
echo $a+=$b+$b;
?>
//виведення - 2Hello2Hello2
