<br>Ülesanne 0403
<br>
<br>Lisa massiivi 15 HTML erinevat värvi.
<br>Leia ilusaid värvi nimed siit: http://www.w3schools.com/colors/colors_names.asp
<br>Kuva tsükliga välja värvuste nimed ja värvi need sama värvi nt. 
<br><span style='color: cyan'>cyan - sinine taevas</span>
<br>
Vastus 0403<br>
<br>
<?php 
$colors[0]="Aqua";
$colors[1]="Black";
$colors[2]="Chartreuse";
$colors[3]="FloralWhite";
$colors[4]="Lime";
$colors[5]="Magenta";
$colors[6]="Orange";
$colors[7]="Red";
$colors[8]="SpringGreen";
$colors[9]="Yellow";
$colors[10]="Fuchsia";
$colors[11]="Gold";
$colors[12]="Pink";
$colors[13]="Coral";
$colors[14]="White";
for($i=0; $i<sizeof($colors); $i++)
{
  echo ($i+1) . '. <span style="color:'  . $colors[$i] . '" >' . $colors[$i] . '</span><br />';
} 
?>