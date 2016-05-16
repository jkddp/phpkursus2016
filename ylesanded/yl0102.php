<br>--== PHP ülesanded 02 ==--
<br>PHP kursus 2016
<br>
<br>Vastused lisada Githubi andmehoidlasse https://github.com/kasutajanimi/phpkursus2016/ylesanded/yl0201.php järgmine failinimega yl0202.php jne. Lisa koodi sisse kommentaariks failide esimele reaks oma (hüüd)nimi, rühm ja kuupäev.
<br>Näide: https://github.com/supremecreature/phpkursus2016/tree/master/ylesanded
<br>
<br>MASSIIVID
<br>
<br>================================
<br>Ülesanne 0201
<br>
<br>Genereeri tsükliga 100 täisarvust koosnev massiiv.
<br>Väljasta see "print_r" funktsiooniga.
<br>
<br>
<?php 


?>
<br>
<br>================================
<br>Ülesanne 0202
<br>
<br>Lisa käsitsi massiivi 10 looma nime kasutades massiivi kohanäitu. Nt. $animals[0]="karu" jne.
<br>Väljasta see "foreach" tsükkliga.
<br>
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

echo "<pre>"; 
print_r($animals); 
echo "<pre>"; 

?>
<br>
<br>================================
<br>Ülesanne 0203
<br>
<br>Lisa käsitsi massiivi kümne näitleja nime kasutades massiivi loomiseks array funktsiooni 
<br>$stars = array('Clint', 'Bruce'); 
<br>Väljasta see "for" tsükliga.
<br>
<br>
<?php 

$stars = array('Clint', 'Bruce', 'Mel', 'Madonna', 'Savisaar', 'Sandra', 'Ott', 'Näitleja_8', 'Mikk', 'Kaspar'); 

for($i=0; $i<sizeof($stars); $i++) 
{ 
  echo "$i) $stars[$i]<br>"; 
} 

?>
<br>
<br>================================
<br>Ülesanne 0204
<br>
<br>Lisa massiivi inimese isikuandmed (nimi, vanus jne.) min 5 elementi.
<br>Väljasta need mõnes lauses, sellesama inimese kohta.
<br>Nt. "Kodanik [nimi] on [vanus] aastane"
<br>
<br>
<?php 
$isikuandmed["nimi"]="Jim Piim";
$isikuandmed["vanus"]="28";
$isikuandmed["linn"]="Tallinn";
$isikuandmed["riik"]="Eesti";
$isikuandmed["maailmajagu"]="Euroopa";

echo "Kodanik $isikuandmed["nimi"] on $isikuandmed["vanus"] aastane, sünnikohaga $isikuandmed["linn"], $isikuandmed["riik"], $isikuandmed["maailmajagu"].";
echo "<hr>";

 ?>
<br>
<br>================================
<br>Ülesanne 0205
<br>
<br>
<br>Sisesta käsitsi 3x3 kahemõõtmeline massiiv. Massiivi elementideks sisesta filmide nimed.
<br>Nt.
<br>$movies[1][1] = 'Matrix';
<br>$movies[1][2] = 'Titanic';
<br>jne.
<br>Väljasta see massiiv tsüklitega.
<br>
<br>
<?php 


?>
