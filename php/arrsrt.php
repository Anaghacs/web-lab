<html>
<body>
<?php
$arr=array(20,15,8,1,14,2);
echo "Array before sorting";
foreach($arr as $i)
{
	echo "$i";
}
echo "</br> Array after sorting";
ArraySort($arr);
function ArraySort($arr)
{
	$n=count($arr);
	for($i=0; $i<$n-1; $i++)
	{
		for($j=$i+1; $j<$n; $j++)
		{
			if($arr[$i]>$arr[$j])
			{
				$temp=$arr[$i];
				$arr[$i]=$arr[$j];
				$arr[$j]=$temp;
			}
		}
	}
	foreach($arr as $i)
	{
		echo "$i";
	}
}
?>
</body>
</html>