<br>--== PHP ülesanded 03 ==--
<br>PHP kursus 2016
<br>
<br>Vastused lisada Githubi andmehoidlasse https://github.com/kasutajanimi/phpkursus2016/ylesanded/yl0301.php järgmine failinimega yl0302.php jne. Lisa koodi sisse kommentaariks failide esimele reaks oma (hüüd)nimi, rühm ja kuupäev.
<br>Näide: https://github.com/supremecreature/phpkursus2016/tree/master/ylesanded
<br>
<br>
<br>FUNKTSIOONID
<br>
<br>================================
<br>Ülesanne 0301
<br>
<br>Luua massiivi nimega "$mas" elementidega Karu, Jänes, Hunt, Rebane, Hirv, Hiir, Põder, Ahv, Mäger, Mutt.
<br>Karu massiivi elemendi indeks olgu 0, Jänesel 1 jne.
<br>
<br>Teha funktsioon nimega "kuva_massiiv". Funktsiooni sisendargumendiks olgu massiiv mida soovime välja kuvada. Funktsiooni sees lugeda funktsiooniga "sizeof" elemendid kokku ja väljastada tsükliga kõik masiivi elemendid üksteise alla. Kuvatud elemendi ette panna ka massiivi elemendi number. Kuvamisel panna kõige lõppu panna paragrafi tag "<p>".
<br>
<br>Näide:
<br>0. Karu
<br>1. Jänes
<br>2. Hunt
<br>jne.
<br>
<br>Lisainfoks , et peale 0301-0303 ülesannet peab tulema umbes säärane programm:
<br>
<br>funktsioon kuva_massiiv
<br>funktsioon vaheta_elemendid
<br>funktsioon kustuta_element
<br>
<br>tee massiiv
<br>kuva_massiiv
<br>vaheta_elemendid
<br>kuva_massiiv
<br>kustuta_element
<br>kuva_massiiv
<br>
<br>
Vastus 0301<br>
<br>
<?php

$mas[0]="Karu";
$mas[1]="Jänes";
$mas[2]="Hunt";
$mas[3]="Rebane";
$mas[4]="Hirv";
$mas[5]="Hiir";
$mas[6]="Põder";
$mas[7]="Ahv";
$mas[8]="Mäger";
$mas[9]="Mutt";

echo "<p>"; 
print_r($mas); 

echo " Kokku on loomi " . sizeof($mas) . ".";


?>
<br>
<br>
<br>================================
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


?>
<br>
<br>
<br>================================
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


?>
<br>
<br>
<br>================================
<br>Ülesanne 0304
<br>
<br>Kasutades arikmeetilist tehet moodul teha funktsioon nimega "number_info", mille sisendargumendiks on täisarv ja mis: 
<br>
<br>1. Teatab kasutajale kas tegu on paaris või paaritu arvuga.
<br>	Mooduli näide:
<br>	12%2=0
<br>	13%2=1
<br>	14%2=0
<br>2. Teatab kasutajale kas arv on suurem või väiksem kui 10.
<br>3. Teatab kasutajale kas arv on suurem või väiksem kui 100.
<br>4. Näitab kasutajale arvu ruudus.
<br>5. Näitab kasutajale arvust ruutjuurt.
<br>
<br>Käivita funktsioon 5 korda sisestades arvudeks: 1, 8, 9, 15, 200
<br>
<br>
Vastus 0304<br>
<br>
<?php


?>
<br>
<br>
<br>================================
<br>Ülesanne 0305
<br>
<br>Teha funktsioon nimega "string_info". Funktsiooni sisendargumendiks olgu teksti string ($string). Funktsioon üleb:
<br>
<br>1. Mis on selle stringi esimene täht ja viimane täht. Funktsioon "strlen" leiab stringi pikkuse ja "echo $string[0]" kuvab esimese tähe.
<br>2. Mitu tähte stringis on (strlen).
<br>3. Kogu string tehaks läbiva väiketähega (strtolower) ja väljastatakse.
<br>4. Kogu string tehaks läbiva suurtähega (strtoupper) ja väljastatakse.
<br>5. Tsükliga loetakse kokku ja kuvatakse ekraanile mitu "a" tähte stringis esineb.
<br>
<br>
Vastus 0305<br>
<br>
<?php


?>
