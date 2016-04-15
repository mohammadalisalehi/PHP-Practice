<form method="post">
			<h1>ضلع مربع را گرفته و آن را رسم نماید</h1>
	<p>inter</p> 	<input type="number" name="height">
	<p>fill</p>		<input type="radio"  name="fill" value=1 checked>
	<p>border</p>	<input type="radio"  name="fill" value=0>
					<input type="submit" value="Click">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$height = $_POST['height'];
	$fill 	= $_POST['fill'];
	if (empty($height))
	{
		echo "height is empty";
	}
	else
	{
		square ($height ,$fill);
	}
}

function square($_height=5, $_fill= true)
{
	echo('<pre>');
	for ($row=0; $row <$_height ; $row++)
	{
		for ($col=0; $col < $_height; $col++)
		{
			if ($_fill)
			{
				echo " *";
			}
			else
			{
				if($col===0 || $col === $_height-1 ||
					$row===0 || $row ===$_height-1 )
				{
					echo "*";
				}
				else
				{
					echo " ";
				}
			}
		}
		echo ('<br />');
	}
	echo('</pre>');
}
?>

