<form method="post">
	<div>
		<input type="number" name="a" id="a" placeholder" " required title="لطفا عدد را وارد کنید">
		<label for="a">a</label>
	</div>
	<div>
		<input type="number" name="b" id="b" placeholder" " required title="لطفا عدد را وارد کنید">
		<label for="b">b</label>
	</div>
	 <input type="submit" value="check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]== "POST")
{
	$a= $_POST['a'];
	$b= $_POST['b'];
	hasel ($a,$b);
}

function hasel ($_a,$_b)
{
	if ($_a%2==0)
	{
		while ( $_a<$_b-1)
		{
			$_a=$_a+2;
			echo $_a;
			echo " - ";
		}
	}

	else
	{

		$_a=$_a+1;
		echo $_a;
		while ($_a<$_b-1)
		{
		$_a=$_a+2;
		echo $_a;
		}
	}
}

?>