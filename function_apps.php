<?php
// declare variables
$result = null;

//------------------app 01 - mohasebe dayere
function dayere($a)
{
	global $result;
  if ($a > 99999)
  {
    $result .= "this is a big number. plz enter a less number 99999";
  }
  else
  {

	//2*p*shoa
	$mohit   = 2*3.14*$a;
	//2*shoa
	$ghotr   = 2*$a;
	//2*p*shoa*shoa
	$masahat = 3.14*$a*$a;

    $result .= t_("mohit"). "= " . $mohit . '<br />';
    $result .= t_("ghotr"). "= " . $ghotr . '<br />';
    $result .= t_("masahat") . "= " . $masahat;
  }
}

//------------------app 02 - zarb & taghsim
function zarb($_num1,$_num2)
{
	global $result;
	$c=0;
	for ($i=0; $i <$_num2 ; $i++)
	{
		$c = $c + $_num1;
	}
	$result .= $c . "<br />";
}

function taghsim($_num1,$_num2)
{
	global $result;
	$c=0;
	while ( $_num1-$_num2>0)
	{
		$_num1-=$_num2;
		$c++;
	}
	$result .= $c . "<br />";
}

//------------------app 03 - emkane rasme mosalas
function zelea ($_num1,$_num2,$_num3)
{
	global $result;
	if ( $_num1+$_num2 > $_num3 && $_num1+$_num3 > $_num2 && $_num2+$_num3 > $_num1)
	{
		$result = t_("mosalas ghabele ram ast");
	}
	else
	{
		$result = t_("mosalas ghabele ram nist");
	}
}

//------------------app 04 - tavan 1_3
function power ($_num1)
{
  global $result;

  if ($_num1 > 99999)
  {
    $result .= "this is a big number. plz enter a less number 99999";
  }
  else
  {
  $result.= $_num1.'<br />';

  $result.= $_num1*$_num1.'<br />';

  $result.= $_num1*$_num1*$_num1;
  return $result;
  }
}

//------------------app 05 - XYZ
function xyz($_x , $_y , $_z)
{
  global $result;
  if  ($_x > 1000 ||$_y > 1000 ||$_z > 1000 )
  {
    $result .= "this is a big number. plz enter a less number 1000";
  }
  else
  {
  $a=1;
  for ($i=0; $i <$_y ; $i++)
  {
    $a=$a*$_x;
  }
  $result.= $a+$_z;
  echo "<br/>";
  return $result;
}
}

//------------------app 06 - hasele jame adad zoj
function hasel ($_a,$_b)
{
  $sum = 0;
  global $result;
    if  ($_a > 1000 ||$_b > 1000 )
  {
    $result .= "this is a big number. plz enter a less number 1000";
  }
  else
  {
  if ($_a%2==0)
  {
    while ( $_a<$_b-1)
    {
      $_a=$_a+2;
      $result.= $_a."-";
      $sum+= $_a;
    }
    $result.="<br> sum =".$sum;
  }
  else
  {

    $_a=$_a+1;
    $result.= $_a;
    while ($_a<$_b-1)
    {
    $_a=$_a+2;
    $result.= $_a."-";
    $sum+= $_a;
    }
    $result.="<br> sum =".$sum;
  }
  return $result;
 }
}

//------------------app 07 - miangin 2 adad
function miangin ($_a,$_b)
{
  global $result;

    if  ($_a > 10000 ||$_b > 10000)
  {
    $result .= "this is a big number. plz enter a less number 10000";
  }
  else
  {
  $result= ($_a+$_b)/2;
  return $result;
}
}

//------------------app 08 - rasme moraba
function square($_height=5, $_fill= true)
{
  global $result;
  if  ($_height > 100 ||$_fill > 100)
  {
    $result .= "this is a big number. plz enter a less number 100";
  }
  else
  {
  $result.=('<pre>');
  for ($row=0; $row <$_height ; $row++)
  {
    for ($col=0; $col < $_height; $col++)
    {
      if ($_fill)
      {
        $result.= "*";
      }
      else
      {
        if($col===0 || $col === $_height-1 ||
          $row===0 || $row ===$_height-1 )
        {
          $result.= "*";
        }
        else
        {
          $result.= " ";
        }
      }
    }
    $result.= ('<br />');
  }
  $result.=('</pre>');
  return $result;
}
}

//------------------app 09 - rasme mostatil
function mostatil ($_tool,$_arz,$_filbor)
{
  global $result;

    if  ($_tool > 50 ||$_arz > 50)
  {
    $result .= "this is a big number. plz enter a less number 50";
  }
  else
  {
  $result.= '<pre>';
  for ($arz=0; $arz <$_arz ; $arz++)
  {
      for ($tool=0; $tool <$_tool ; $tool++)
      {
        if ($_filbor)
        {
          $result.= "*";
        }
        else
        {
          if ($arz===0 || $arz===$_arz-1 || $tool===0 || $tool===$_tool-1)
          {
            $result.= "*";
          }
          else
          {
            $result.= " ";
          }
        }
      }
      $result.= '<br />';
  }
  return $result;
  $result.= '</pre>';
}
}

//------------------app 10 - rasme mosalas

function draw_triangel($_side = 5, $_fill = true, $_direction = 1, $_shape= "*")

{
  global $result;

     if  ($_side > 50 ||$_shape > 10)
  {
    $result .= "this is a big number. plz enter a less number 50";
  }
  else
  {
  $result.= "<pre>";
  if (empty($_side))
    {
        $result.= "Enter a number in box...";
        return;
    }
    if ($_direction == 1)
    {
      for ($i=1; $i < $_side; $i++)
      {
          for ($j=1; $j <$i ; $j++) {
            if ($_fill)
            {
              $result.= "$_shape";
            }
        else
        {
          if($j === 1 || $j === $i-1 ||
            $i === 1 ||$i === $_side-1
            )
          {
            $result.= "$_shape";
          }
          else
          {
            $result.= " ";
          }
        }
      }
          $result.=('<br />');
      }
    }
    elseif ($_direction == 2)
    {
      for ($i=1; $i < $_side; $i++)
      {
          for ($j=$_side; $j >$i ; $j--)
          {
            if ($_fill)
            {
              $result.= "$_shape";
            }
              else
              {
              if($j === $_side || $j === $i+1 ||
              $i === 1 ||$i === $_side-1
              )
            {
              $result.= "$_shape";
            }
            else
            {
              $result.= " ";
            }
            }
          }
          $result.=('<br />');
      }
    }

    elseif ($_direction == 3)
    {
      for ($i=1; $i < $_side; $i++)
      {
          for ($j=$_side; $j >$i ; $j--) {
            $result.= " ";
          }
          for ($k=0; $k < $i; $k++) {
            if ($_fill)
            {
              $result.= "$_shape";
            }
            else
            {
              if ($i===1 || $i===$_side-1 ||
                  $k===$i-1 || $k=== 0) {
                $result.= "$_shape";
              }
              else {
                $result.= " ";
              }
            }

          }
          $result.=('<br />');
      }
    }

    elseif ($_direction == 4)
    {
      for ($i=1; $i < $_side; $i++)
      {
          for ($j=1; $j <$i ; $j++) {
            $result.= " ";
          }
          for ($k=$_side; $k > $i; $k--) {
            if ($_fill)
            {
              $result.= "$_shape";
            }
            else
            {
              if ($i===1 || $i===$_side-1 ||
                $k===$_side || $k===$i+1)
              {
                $result.= "$_shape";
              }
              else
              {
                $result.= " ";
              }
            }

          }
          $result.=('<br />');
      }
    }
  $result.=('</pre>');
  return $result;
}
}

//------------------app 11 - kochektarin & bozorgtarin
function abcde($_a,$_b,$_c,$_d,$_e)
{
  global $result;

       if  ($_a > 10000 ||$_b > 10000||$_c > 10000||$_d > 10000 ||$_e > 10000)
  {
    $result .= "this is a big number. plz enter a less number 10000";
  }
  else
  {
  $numbers = array($_a,$_b,$_c,$_d,$_e);

  for ($i=0; $i <5 ; $i++)
  {
    if ($numbers[$i]<=$numbers[0])
    {
      $min=$numbers[$i];
    }

    if ($numbers[$i]>=$numbers[0])
    {
      $max=$numbers[$i];
    }
  }
      $result.="less = ". $min.'<br />';
      $result.="more = ". $max;

      return $result;
  }
}
//------------------app 12 - 3 adad kochektar & bozorgtar
function adad($_num = 6, $_seprate =" ")
{
  global $result;
  $arr    = explode($_seprate, $_num);
  $answer = [];
  foreach ($arr as $key => $value)
  {
    if (is_numeric ($value))
    {
      $answer[] = $value;
    }
  }

  sort($answer);
  $count = count($answer);
  $result.= " کوچکترین مقادیر:‌ ";
  for ($j=0; $j < 3; $j++)
  {
    if(isset($answer[$j]))
    {
      $result.= $answer[$j] . ", ";
    }
  }
  $result.= "<br>" . " بزرگترین مقادیر:‌ ";

  for ($h=$count-1 ; $h >= ($count-3) ; $h--)
  {
    if(isset($answer[$h]))
    {
      $result.= $answer[$h] . ",";
    }
  }
  return $result;
}

//------------------app 13 - rasme lozi








// function draw_triangel_2($_side = 5, $_fill = true, $_shape= "*")
// {
//   global $result;

//   if  ($_side > 50)
//   {
//     $result .= "this is a big number. plz enter a less number 50";
//   }
//   else
//   {
//   $result.= "<pre>";
//   if (empty($_side))
//     {
//         $result.= "Enter a number in box...";
//         return;
//     }
//   if ($_fill) {
//     for ($row=1; $row <= $_side; $row++)
//     {
//       for ($col=$_side; $col >= $row; $col--)
//       {
//         $result.=(" ");
//       }
//       for ($col=1; $col <= $row; $col++)
//       {
//         $result.= "$_shape";

//       }
//       for ($col=1; $col <= $row; $col++)
//       {
//         $result.= "$_shape";
//       }
//       $result.=("<br>");
//     }

//     ////

//     for ($row=1; $row <= $_side; $row++)
//     {
//       for ($col=1; $col <= $row; $col++)
//       {
//         $result.= " ";
//       }
//       for ($col=$_side; $col >= $row; $col--)
//       {
//          $result.= "$_shape";
//       }
//       for ($col=$_side; $col >= $row ; $col--)
//       {
//         $result.= "$_shape";
//       }
//       $result.= "<br>";
//     }
//       }

//   else
//   {
//       for ($row=1; $row <= $_side; $row++)
//       {
//         for ($col=$_side; $col >= $row; $col--)
//         {
//           $result.=(" ");
//         }
//         for ($col=1; $col <= $row; $col++)
//         {
//           if ($col === 1)
//           {
//           $result.= "$_shape";
//           }
//           else {
//             $result.= " ";
//           }

//         }
//         for ($col=1; $col <= $row; $col++)
//         {
//           if ($col == $row) {
//             $result.= "$_shape";
//           }
//           else
//           {
//             $result.= " ";
//           }
//         }
//         $result.=("<br>");
//       }
//       ///
//       for ($row=1; $row <= $_side; $row++)
//       {
//         for ($col=1; $col <= $row; $col++)
//         {
//           $result.= " ";
//         }
//         for ($col=$_side; $col >= $row; $col--)
//         {
//           if ($col === $_side)
//           {
//             $result.= "$_shape";
//           }
//           else
//           {
//             $result.= " ";
//           }
//         }
//         for ($col=$_side; $col >= $row ; $col--)
//         {
//           if ($col === $row)
//           {
//             $result.= "$_shape";
//           }
//           else
//           {
//             $result.= " ";
//           }

//         }
//         $result.= "<br>";
//       }
//         }
//     $result.= "</pre>";
//     return $result;
// }
// }
//------------------app 14 - maghsoomo alahe

function maghsoom($_num = 6)
{
  global $result;
    if  ($_num > 10000)
  {
    $result .= "this is a big number. plz enter a less number 10000";
  }
  else
  {
  $s = 0;
  for ($i=1; $i <= ($_num/2); $i++)
  {
    $r = $_num % $i;
    if ($r===0)
    {
      $result.= "-". $i ;
      $s++;
    }
  }
  $result.= "<br>" . "تعداد مقسوم علیه ها شامل (" . $s .") عدد میشود";
  return $result;
}
}
?>
