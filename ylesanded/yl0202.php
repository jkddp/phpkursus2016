<br>Ülesanne 0202
<br>
<br>Lisa käsitsi massiivi 10 looma nime kasutades massiivi kohanäitu. Nt. $animals[0]="karu" jne.
<br>Väljasta see "foreach" tsükkliga.
<br>
<br>
Vastus 0202<br>
<br>
<?php 

$animals[]="karu"; 
$animals[]="rebane"; 
$animals[]="hunt"; 
$animals[]="siil"; 
$animals[]="hirv"; 
$animals[]="jänes"; 
$animals[]="loom"; 
$animals[]="põder"; 
$animals[]="kährik"; 
$animals[]="kähriklane"; 

foreach ($animals as $key => $val)
{
  echo "Massiivi võti on $key ja elemendi väärtus on $val<br />";
}
?>