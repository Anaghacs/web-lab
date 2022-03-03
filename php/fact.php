<html>
<body>
<form method="post">
<label>Enter your number:</label>
<input type="text" name="number"/>
<button type="submit" name="submit">continue</button>
</from>
<?php
if(isset($_POST['submit']))
{
	$num=$_POST['number'];
	$i=1;
	$temp=0;
	while($i<=$num)
	{
		if($num % $i==0)
		{
			echo "<br> Factors=".$i;
			
		}
$i=$i+1;
	}
}
?>
</body>
</html>