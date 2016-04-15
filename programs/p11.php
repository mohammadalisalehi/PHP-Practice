<form method="post">
    <div>
    <input type="number" name="a" id="a" placeholder" " required title="لطفا عدد را وارد کنید">
    <label for="a">one</label>
    </div>
    <div>
    <input type="number" name="b" id="b" placeholder" " required title="لطفا عدد را وارد کنید">
    <label for="b">two</label>
    </div>
    <div>
    <input type="number" name="c" id="c" placeholder" " required title="لطفا عدد را وارد کنید">
    <label for="c">three</label>
    </div>
    <div>
    <input type="number" name="d" id="d" placeholder" " required title="لطفا عدد را وارد کنید">
    <label for="d">four</label>
    </div>
    <div>
    <input type="number" name="e" id="e" placeholder" " required title="لطفا عدد را وارد کنید">
    <label for="e">five</label>
    </div>
      <input type="submit" value="Click">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $a= $_POST['a'];
  $b= $_POST['b'];
  $c= $_POST['c'];
  $d= $_POST['d'];
  $e= $_POST['e'];
  abcde($a,$b,$c,$d,$e);
}

function abcde($_a,$_b,$_c,$_d,$_e)
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
      echo $min;
      echo '<br />';
      echo $max;
}
?>
