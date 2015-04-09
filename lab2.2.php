<?php
$a=2;
$a.=($b=('Hello".$a));
echo $a+=$b+$b;
?>
//виведення - 2Hello2Hello2