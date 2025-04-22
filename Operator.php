<?php

$a=1280;
$b=100;
$c=50;
$d=10;
$bcount=(int)($a/$b);
$newa=$a%$b;
$ccount=(int)($newa/$c);
echo "<br/>100 Count=",$bcount;
echo "<br/>50 Count=",$ccount;
$newa1=$newa%$c;
$dcount=(int)($newa1/$d);
echo "<br/>10 Count=",$dcount;
?>