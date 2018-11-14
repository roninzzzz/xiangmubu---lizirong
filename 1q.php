<?php
function jisuan($n){
$count=0;
for($i=1;$i*$i<$n*$n;$i++)
{
	$j=(int)sqrt($n*$n-$i*$i);
	if($i*$i+$j*$j==$n*$n)
	{
	$count++;
	}
}
$count=$count*4;
if($i==$n)
{
$count=$count+4;
return $count;}}
echo jisuan(5);
?>