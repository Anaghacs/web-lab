<html>
<body>
<form method="post">
<label>Enter your number:</label>
<input type="text" name="number"/>
<button type="submit" name="submit">continue</button>
</from>

<?php

$num = $_POST['number'];
$i=1;
$f=1;
while($i<=$num)
{
	$f=$f*$i;
	$i=$i+1;
	
}
echo "Factorial of the number :".$f;
?>
</body>
</html>