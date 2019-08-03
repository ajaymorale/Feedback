<?php
$p=0;
$p=$p+1;
echo "the counter:".$p;
//echo "<button name='btn' value='btn' id='btn' onclick=buttn();>button</button>";
function buttn($p)
{
  $q=$p+1;

  echo "the counter:".$q;
}
buttn($p);
buttn($p);
buttn($p);
?>
<!-- <input type="button" onclick="document.write('<?php buttn() ?>');" value="button">-->
