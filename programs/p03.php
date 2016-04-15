<?php
if ($_SERVER["REQUEST_METHOD"]== "POST")
{
	$num1= $_POST['num1'];
	$num2= $_POST['num2'];
	$num3= $_POST['num3'];

	zelea ($num1,$num2,$num3);
}

?>