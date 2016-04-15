<?php
require_once "function.php";
require_once "pages/template_header.php";

if(isset($_GET['name']))
{
	if ($_GET['name']==='about')
	{
		require_once "pages/about_us.php";
	}
	else
	{
	require_once "pages/template_sidebar.php";
	echo '<div class="span2">';
	app_caller($_GET['name']);
	echo "</div>";

	echo '<div class="span7">';

	global $result;
	if ($_SERVER ["REQUEST_METHOD"] == "POST")
	{
		echo "<div id='result'>$result</div>";
	}

	// show result
	echo "</div>";
	}
}


else
{
	require_once "pages/homepage.php";
	require_once "pages/template_footer.php";
}


require_once "pages/template_footer.php";


?>


<!-- function element_creator($_type, $_title = null, $_name = null,$_val='', $_required = 'required')
		$el =
		"<div class='row'>
			<input type='$_type' min='1' max='100' name='$_name' id='$_name' value='$_val' placeholder='' $_required title='$_title' />
			<label for='$_name'>$_title</label>
		</div>"; -->