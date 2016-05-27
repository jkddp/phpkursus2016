<br>Ülesanne 0203
<br>
<br>Lisa käsitsi massiivi kümne näitleja nime kasutades massiivi loomiseks array funktsiooni 
<br>$stars = array('Clint', 'Bruce'); 
<br>Väljasta see "for" tsükliga.
<br>
<br>
Vastus 0203<br>
<br>
<?php 

$stars = array('Clint', 'Bruce', 'Mel', 'Madonna', 'Savisaar', 'Sandra', 'Ott', 'Näitleja_8', 'Mikk', 'Kaspar'); 

for ($i=0; $i<sizeof($stars); $i++)
{
  echo $i+1 . ". " . $stars[$i] . "<br />";
}

?>