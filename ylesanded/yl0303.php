<br>Ülesanne 0303
<br>
<br>Jätkata eelmist ülesannet. 
<br>
<br>Teha funktsioon nimega "kustuta_element". Funktsiooni sisendargumendiks olgu massiivi elemendi nr. mille väärtust soovime kustutada ja massiiv ise. Kustutatud elemendist järgmised liikugu ühe koha võrra ettepoole. Kustuta massiivi viimane tühi element funktsiooniga unset($mas[key]). Tagasta massiiv põhiprogrammile. Kustuta funktsiooniga element nr. 1 "Jänes". Kuvada "kuva_massiiv" funktsiooniga massiiv välja.
<br>
<br>Näide:
<br>Oli 0. Karu, 1. Jänes, 2. Hunt jne.
<br>Peale kustutamist olgu 0. Karu, 1. Hunt jne.
<br>
<br>
Vastus 0303<br>
<br>
<?php

$mas[0] = 'Karu';
$mas[1] = 'Jänes';
$mas[2] = 'Hunt';
$mas[3] = 'Rebane';
$mas[4] = 'Hirv';
$mas[5] = 'Hiir';
$mas[6] = 'Põder';
$mas[7] = 'Ahv';
$mas[8] = 'Mäger';
$mas[9] = 'Mutt';
function kuva_massiiv($mas) {
	for ($i=0; $i<sizeof($mas); $i++) {
		echo "$i. $mas[$i]<br>";
		echo "<p> </p>";
	}
}
function vaheta_elemendid($i1, $i2, $mas)  {
	$temp = $mas[$i1];
	$mas[$i1] = $mas[$i2];
	$mas[$i2] = $temp;
	return $mas;
}
function kustuta_element($i1, $mas)  {
	unset($mas[$i1]); 
		$mas = array_values($mas);
	return $mas;
}
$mas = vaheta_elemendid(3, 7, $mas);
$mas = kustuta_element(1, $mas);
kuva_massiiv($mas);
?>