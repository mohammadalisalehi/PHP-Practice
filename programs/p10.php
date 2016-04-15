
<div class="program span8">
<h2>Insert "side" and draw type type:</h2>
<form method="post">
    <input type="number" name="one" placeholder=" ">
    <input type="number" name="two" placeholder=" ">
    <input type="number" name="three" placeholder=" ">
    <input type="number" name="four" placeholder=" ">
    <input type="number" name="five" placeholder=" ">
    <input type="number" name="six" placeholder=" ">
  <br><br>
    <input type="submit" value="Calculate" class="button">
    <hr>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $one = $_POST['one'];
    $two   = $_POST['two'];
    $three = $_POST['three'];
    $four = $_POST['four'];
    $five = $_POST['five'];
    $six = $_POST['six'];
    echo "<div class='answer'>";
    min_max($one , $two , $three , $four , $five , $six );
    echo "</div>";
}
function min_max($_one = 1, $_two = 2, $_three = 3, $_four = 4, $_five = 5, $_six = 6)
{
  if (empty($_one)|| empty($_two) || empty($_three) || empty($_four) || empty($_five) || empty($_six) )
    {
        echo "Enter a number in box...";
        return;
    }
    $a = [$_one , $_two , $_three , $_four , $_five , $_six];
    $min = $a[0];
    $max = $a[0];
  for ($i=0; $i < 6; $i++)
  {
    if ($a[$i] < $min)
    {
      $min = $a[$i];
    }
    if ($a[$i] > $max)
    {
      $max = $a[$i];
    }
  }
  echo "min= " . $min . "<br>";
  echo "max= " . $max;
}
?>
</div>