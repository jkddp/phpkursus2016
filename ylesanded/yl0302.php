<br>Ülesanne 0302
<br>
<br>Jätkata eelmist ülesannet. 
<br>
<br>Tee funktsioon nimega "vaheta_elemendid". Funktsiooni sisendargumendiks olgu kaks massiivi elemendi numbrit, mille kohtasid massiivis soovime vahetada ja massiiv ise. Vahetamiseks tuleb kasutada funktsioonisisest lisamuutujat. Vahetada elementide "3. Rebane" ja "7. Ahv" massiivi kohad. Tagasta massiiv põhiprogrammile. Kuvada "kuva_massiiv" funktsiooniga massiiv välja.
<br>
<br>Näide: 
<br>Rebane jääb nr. 7-ks
<br>Ahv jääb nr. 3-ks
<br>
<br>function vaheta_elemendid($e1, $e2, $mas)  {
<br>
<br>	$ajutine = $mas[$e1];
<br>	$mas[$e1] = $mas[$e2];
<br>	$mas[$e2] = $ajutine;
<br>
<br>	return $mas;
<br>
<br>}
<br>
<br>$loomad = vaheta_elemendid(3, 7, $loomad);
<br>
<br>
Vastus 0302<br>
<br>
<?php

function vaheta_elemendid($e1, $e2, $mas)  {

	$ajutine = $mas[$e1];
	$mas[$e1] = $mas[$e2];
	$mas[$e2] = $ajutine;

	return $mas;

}

$loomad = vaheta_elemendid(3, 7, $loomad);
?>