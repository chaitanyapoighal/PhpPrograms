<?php
$number=1235;
$sum=0;
$temp=0;
while($number>0){
 $temp=$number%10;
 $sum+=$temp;
 $number/=10;
}
  echo "sum=",$sum;
?>