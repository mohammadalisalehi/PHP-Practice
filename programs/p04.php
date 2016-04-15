<form method="post">
	<div class="row">
		<input type="number" name="num1" id="num1" placeholder" " required title="لطفا عدد را وارد کنید">
		<label for="num1">عدد را وارد کنید</label>
	</div>
	<input type="submit" value="check" class="row">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]== "POST")
{
	$num1= $_POST['num1'];
	power ($num1);
}

function power ($_num1)
{
	echo $_num1;
	echo '<br />';

	echo $_num1*$_num1;
	echo "<br />";

	echo $_num1*$_num1*$_num1;
}
?>
