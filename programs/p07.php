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
	miangin ($a,$b);
}

function miangin ($_a,$_b)
{
	echo ($_a+$_b)/2;
}

?>
