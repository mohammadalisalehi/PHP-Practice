
<form method="post">
    <p>طول و عرض مستطیل را گرفته و آن را رسم نمایدد. )هر دو مقددار دخ دواه و در صدورت ورود یکدی
    استفاده از دیگری به عنوان جایگزین یعنی رسم مربع. به صورت توخاخی هم رسم شوند.(
    </p>
  tool <input type="number" name="tool" placeholder="Enter tool" value='10'>
  arz <input type="number" name="arz" placeholder="Enter arz" value='10'>
  Fill <input type="radio" name="fill"  value="1">
  Border <input type="radio" name="fill" value="0">
  <input type="submit" value="Draw">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $tool   = $_POST['tool'];
  $arz    = $_POST['arz'];
  $filbor  = $_POST['fill'];
  mostatil ($tool,$arz,$filbor);
}

function mostatil ($_tool,$_arz,$_filbor)
{
  echo '<pre>';
  for ($arz=0; $arz <$_arz ; $arz++)
  {
      for ($tool=0; $tool <$_tool ; $tool++)
      {
        if ($_filbor==1)
        {
          echo "*";
        }
        else
        {
          if ($arz===0 || $arz===$_arz-1 || $tool===0 || $tool===$_tool-1)
          {
            echo "+";
          }
          else
          {
            echo " ";
          }
        }
      }
      echo '<br />';
  }
}
echo '</pre>';
?>
