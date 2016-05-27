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