<?php
//Write a program sum of odd numbers using for loop:
$a=10;
$b=100;
$sum=0;

for($i=$a;$i<=$b;$i++){
 if($i%2!=0)
   $sum+=$i;
 }
echo "Sum of odd numbers=",$sum;
?>