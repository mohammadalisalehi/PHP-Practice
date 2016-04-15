<?php
require_once "function_apps.php";

///////////////////////// find current language
if(isset($_GET['lang']))
{
	$CURRENTLANG = $_GET['lang'];
}
elseif(isset($_COOKIE['lang']))
{
	$CURRENTLANG = $_COOKIE['lang'];
}
else
{
	$CURRENTLANG = 'en';
}
setcookie('lang', $CURRENTLANG, time() + (2169549 * 30));

///////////////////////// set DIRECTION of text
switch ($CURRENTLANG)
{
	case 'fa':
	case 'ar':
		$DIRECTION = 'rtl';
		break;

	default:
		$DIRECTION = 'ltr';
		break;
}


///////////////////////// require current lang file
if(file_exists("languages/$CURRENTLANG.php"))
{
	require_once "languages/$CURRENTLANG.php";
	$txt_list = texts();
}

///////////////////////// find translated text
function T_($_txt)
{
	global $txt_list;
	if(isset($txt_list[$_txt]))
	{
		return $txt_list[$_txt];
	}
	return $_txt;
}


$input_number = 1;
$applist      =
	[
		'01' =>
		[
			'title' => T_("mohit dayere"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires1"),
		],

		'02' =>
		[
			'title' => T_("zarb/taghsim"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires2"),
		],

		'03' =>
		[
			'title' => T_("rasm mosalas"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires3"),
		],

		'04' =>
		[
			'title' => T_("tavan1_3"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires4"),
		],

		'05' =>
		[
			'title' => T_("X Y Z"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires5"),
		],

		'06' =>
		[
			'title' => T_("hasele jam adad"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires6"),
		],

		'07' =>
		[
			'title' => T_("miangin do add"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires7"),
		],

		'08' =>
		[
			'title' => T_("rasm moraba"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires8"),
		],

		'09' =>
		[
			'title' => T_("rasm mostatil"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires9"),
		],

		'10' =>
		[
			'title' => T_("rasm mosalas"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires10"),
		],

		'11' =>
		[
			'title' => T_("koochectarin adad"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires11"),
		],

		'12' =>
		[
			'title' => T_("3add bozorgtar/kochektar"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires12"),
		],

		'13' =>
		[
			'title' => T_("rasme lozi"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires13"),
		],

		'14' =>
		[
			'title' => T_("namayeshe maghsomo alaih"),
			"desc"  => T_("Taken radius, diameter, circumference and area it acquires14"),
		],

	];

function draw_applist()
{
	global $applist;
	$app_el  = null;


	foreach ($applist as $key => $value)
	{
		$myvalue = $value['title'];
		if ( isset($_GET['name']) && $_GET['name']==$key)
		{
			$app_el = $app_el ."<a href='?name=$key' class='active'>$myvalue</a>";
		}
		else
		{
			$app_el = $app_el . "<a href='?name=$key'>$myvalue</a>";
		}
	}
	return $app_el;
}

function get_appdetail()
{
	global $applist;
	if(isset($_GET['name']) && isset($applist[$_GET['name']]))
	{
		$appid = $_GET['name'];
		return $applist[$appid];
	}
	else
	{
		return ['title' => '', 'desc' => T_("Homepage")];
	}
}


/////////////////////////// create form elements

// function element_creator($_type, $_title = null, $_name = null,$_val='', $_required = 'required')
// {
// 	global $input_number;
// 	if($_type === 'submit')
// 	{
// 		if($_title === null)
// 		{
// 			$_title = T_('Click');
// 		}
// 		if($_name === null)
// 		{
// 			$_name = 'submit';
// 		}
// 		$el ="<input type='submit' min='1' max='100' value='$_title' class='row' name='$_name'>";
// 	}
// 	else
// 	{
// 		if($_name === null)
// 		{
// 			$_name = 'input'. $input_number;
// 			$input_number++;
// 		}
// 		$el =
// 		"<div class='row'>
// 			<input type='$_type' min='1' max='100' name='$_name' id='$_title' value='$_val' placeholder='' $_required title='$_title' />
// 			<label for='$_title'>$_title</label>
// 		</div>";
// 	}
// 	echo $el;



	function element_creator($_type, $_title = null, $_id = null, $_val='', $_name = '', $_required = 'required')
{
	global $input_number;

	switch ($_type)
	{
		case 'number':
		case 'text':
			if($_id === null)
			{
				$_id = 'input'. $input_number;
				$input_number++;
			}
			$el =
				"<div class='row text_input'>
					<input type='$_type'  name='$_id' id='$_id' value='$_val' placeholder='' $_required title='$_title' />
					<label for='$_id'>$_title</label>
				</div>";
			break;

		case 'radio':
			$el =
				"<div class='radio_input'>
					<input type='$_type' name='$_name' id='$_id' value='$_val' $_required title='$_title' />
					<label for='$_id'>$_title</label>
				</div>";
			break;

		case 'submit':
			if($_title === null)
			{
				$_title = T_('Click');
			}
			if($_id === null)
			{
				$_id = 'submit';
			}
			$el ="<input type='submit' min='1' max='100' value='$_title' class='row' name='$_id'>";
			break;

		default:
			# code...
			break;
	}
	echo $el;
}

/////////////////////////// create best form for this app
function app_caller($_app_name)
{
	echo "<form method='post'>";

	switch ($_app_name)
	{
		case '01':
			element_creator('number', t_("enter numberplz"));
			if ($_SERVER ["REQUEST_METHOD"] == "POST")
			{
				dayere($_POST['input1']);
			}
			break;

		case '02':
			element_creator('number', t_("first number"), 'num1');
			element_creator('number', t_("second number"), 'num2');
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$num1= $_POST['num1'];
				$num2= $_POST['num2'];
				echo zarb    ($_POST['num1'], $_POST['num2']);
				echo taghsim ($_POST['num1'], $_POST['num2']);
			}
			break;

		case '03':
			element_creator('number', t_("first number"),'num1');
			element_creator('number', t_("second number"),'num2');
			element_creator('number', t_("third number"),'num3');
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$num1= $_POST['num1'];
				$num2= $_POST['num2'];
				$num3= $_POST['num3'];

				zelea ($num1,$num2,$num3);
			}
			break;


		case '04':
			element_creator('number', t_("first number"),'num1');
			if ($_SERVER["REQUEST_METHOD"]== "POST")
			{
				$num1= $_POST['num1'];
				power ($num1);
			}
			break;

		case '05':
			element_creator('number', t_("x"),'num1');
			element_creator('number', t_("y"),'num2');
			element_creator('number', t_("z"),'num3');
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$num1= $_POST['num1'];
				$num2= $_POST['num2'];
				$num3= $_POST['num3'];
				xyz ($num1 , $num2 , $num3);
			}
			break;

		case '06':
			element_creator('number', t_("first number"),'a');
			element_creator('number', t_("second number"),'b');
			if ($_SERVER["REQUEST_METHOD"]== "POST")
			{
				$a= $_POST['a'];
				$b= $_POST['b'];
				hasel ($a , $b);
			}
			break;

		case '07':
			element_creator('number', t_("first number"),'a');
			element_creator('number', t_("second number"),'b');
			if ($_SERVER["REQUEST_METHOD"]== "POST")
			{
				$a= $_POST['a'];
				$b= $_POST['b'];
				miangin ($a,$b);
			}
			break;

		case '08':
			element_creator('radio', T_('fill'),'fill1', 1, 'fill');
	        element_creator('radio', T_('empty'),'fill', 0, 'fill');
	        echo "<br>";echo "<br>";
			element_creator('number', t_("enter numberplz"),'height');

			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$height = $_POST['height'];
				if(empty($_POST['fill']))
				{
					$fill = false;
				}else{
					$fill 	= $_POST['fill'];
				}
				if (empty($height))
				{
					echo "height is empty";
				}
				else
				{
					square ($height ,$fill);
				}
			}
			break;

		case '09':
			element_creator('radio', T_('fill'),'fill', 1 , 'fill');
	        element_creator('radio', T_('empty'),'empty', 0 , 'fill');
	        echo "<br>";echo "<br>";
			element_creator('number', t_("enter numberplz"),'tool');
			element_creator('number', t_("enter numberplz"),'arz');
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
			  $tool   = $_POST['tool'];
			  $arz    = $_POST['arz'];
			  if(empty($_POST['fill'])){
			  	$filbor  = false;
			  }else{
			  	$filbor  = $_POST['fill'];
			  }
			  mostatil ($tool,$arz,$filbor);
			}
			break;

		case '10':

	      {
	        element_creator('radio', T_('fill'),'fill1', 1, 'fill');
	        element_creator('radio', T_('empty'),'fill', 0, 'fill');
	        echo "<br>";
	        element_creator('radio', T_('shape1'),'DIRECTION1', 1, 'DIRECTION');
	        element_creator('radio', T_('shape2'),'DIRECTION2', 2, 'DIRECTION');
	        element_creator('radio', T_('shape3'),'DIRECTION3', 3, 'DIRECTION');
	        element_creator('radio', T_('shape4'),'DIRECTION4', 4, 'DIRECTION');
	        echo "<br>";echo "<br>";
	        element_creator('number', 'height', 'height');
	        element_creator('text', T_('shape') ,'shape');

	      }

	        if ($_SERVER["REQUEST_METHOD"] == "POST")
	        {
	          $height = $_POST['height'];
	          $DIRECTION = $_POST['DIRECTION'];
	          $shape = $_POST['shape'];
	          $fill = $_POST['fill'];

	          draw_triangel($height, $fill,$DIRECTION, $shape);
	        }
	       break;



		case '11':
			element_creator('number', t_("first number"),'a');
			element_creator('number', t_("second number"),'b');
			element_creator('number', t_("third number"),'c');
			element_creator('number', t_("forth number"),'d');
			element_creator('number', t_("fifth number"),'e');
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
			  $a= $_POST['a'];
			  $b= $_POST['b'];
			  $c= $_POST['c'];
			  $d= $_POST['d'];
			  $e= $_POST['e'];
			  abcde($a,$b,$c,$d,$e);
			}
			break;

		case '12':
			element_creator('text', T_('num')  , 'num','');
			element_creator('text', T_('seprate')  , 'seprate','');
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
			    $num = $_POST['num'];
			    $seprate = $_POST['seprate'];
			    echo '<div class="answer"> ';
			    adad($num , $seprate);
			    echo "</div>";
			}
			break;


		case '13':
			  {
			    element_creator('radio', T_('fill'),'fill1', 1, 'fill');
			    element_creator('radio', T_('empty'),'fill', 0, 'fill');
			    echo "<br>";echo "<br>";
				element_creator('number', T_('side'), 'side','');
				element_creator('text', T_('shape')  , 'shape','');
			  }

		    if ($_SERVER["REQUEST_METHOD"] == "POST")
		    {
		      $side = $_POST['side'];
		      $shape = $_POST['shape'];
		      $fill = $_POST['fill'];
		      draw_triangel_2($side, $fill, $shape);
		    }
	    break;

		case '14':
			element_creator('number', t_("enter numberplz"),'num');
			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
			    $num = $_POST['num'];
			    maghsoom($num);
			}
			break;

		default:

			break;
	}
	element_creator('submit');
	echo "</form>";
}

?>