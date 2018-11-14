<?php
function yuan($n){
$sum=0;
for($x=1;$x*$x<$n;$x++)
	{
	$y=(int)sqrt($n-$x*$x);
	if($x*$x+$y*$y==$n)
	{
	$sum++;
	}
	}
$sum=$sum*4;
$x=(int)sqrt($n);
if($x*$x==$n)
$sum=$sum+4;
return $sum;}
echo yuan(625);
?>