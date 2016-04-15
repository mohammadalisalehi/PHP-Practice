ss<form method="post">
	<div>
		<input type="number" name="x" id="x" placeholder" " required title="لطفا عدد را وارد کنید">
		<label for="x">X</label>
	</div>
	<div>
		<input type="number" name="y" id="y" placeholder" " required title="لطفا عدد را وارد کنید">
		<label for="y">Y</label>
	</div>
	<div>
		<input type="number" name="z" id="z" placeholder" " required title="لطفا عدد را وارد کنید">
		<label for="z">Z</label>
	</div>
	 <input type="submit" value="check">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"]== "POST")
{
	$x= $_POST['x'];
	$y= $_POST['y'];
	$z= $_POST['z'];
	xyz ($x , $y , $z);
}

function xyz($_x , $_y , $_z)

{
	$a=1;
	for ($i=0; $i <$_y ; $i++)

	{
		$a=$a*$_x;
	}
	echo $a+$_z;
	echo "<br/>";

}
?>