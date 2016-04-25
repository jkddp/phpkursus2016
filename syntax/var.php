<?php 

/*
$name = "GR";
echo $name ;
echo "<br>";

$tag = "<strong>";
echo $tag.$name;

$name = "Mari-Liis";
$tag_start = "<strong>";
$tag_end = "</strong>";
echo "<br>";

echo $tag_start,$name,$tag_end; 
echo "<br>";
*/
/*
$a = 2;
$b = 3;
$c = 4;
$d = $a + $b * $c;
echo $d;
echo " Olen $d";
echo ' Olen $d';
*/

$h = date("H");
echo "h on $h<br>";

if (
    ($h > 4 AND $h < 10) OR 
    ($h > 21 AND $h < 23)
   )
{
  echo "Mine kohe kalale!<br>";
}
else
{
  echo "Mine magama. Veel pole kalapüügi aeg käes.<br>";
} 



 ?>