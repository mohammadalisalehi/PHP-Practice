</div>
<footer>


<?php echo T_("design by:"); ?>
<a href="?name=about">
<?php echo T_("mohammad ali salehi"); ?>  </a>&copy



<?php
if (date('y') == 16)
{
  echo T_((2000 + date('y')));
}
else
{
echo " &copy 2016-".date('y');
}
?>



</footer>
</body>
</html>
