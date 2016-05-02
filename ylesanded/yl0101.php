--== PHP ülesanded 01 ==--<br>
Aine PHP kursus, aasta 2016<br>
<br>
Vastused lisada Githubi andmehoidlasse https://github.com/kasutajanimi/phpkursus2016/ylesanded/yl0101.php järgmine failinimega yl0102.php jne. Lisa koodi sisse kommentaariks failide esimele reaks oma (hüüd)nimi, rühm ja kuupäev.<br>
Näide: https://github.com/supremecreature/phpkursus2016/tree/master/ylesanded<br>
<br>
TSÜKLID<br>
<br>
<br>
================================ <br>
Ülesanne 0101 <br>
<br>
Järgnevas ülesandes tohib kasutada vaid IF tingimust ja FOR tsükklit. Arvude üleühe kuvamiseks kasutage lisamuutujat. Kuvada ühe FOR tsükkliga välja järgmine arvude jada järgmisel kujul: <br>
<br>
1<br>
3<br>
5<br>
7<br>
9<br>
11<br>
13<br>
15<br>
17<br>
19<br>
<br>
<br>
<?php   
for ($i = 1; $i <= 19; $i+=2) 
{ 
    echo "$i<br>"; 
} 
?>
<br>
<br>
================================<br>
Ülesanne 0102<br>
<br>
Järgnevas ülesandes tohib kasutada vaid IF tingimust ja FOR tsükklit. Kuvada ühe FOR tsükkliga välja järgmine arvude jada järgmisel kujul: <br>
<br>
-11<br>
-10<br>
-9<br>
-8<br>
-7<br>
-6<br>
-5<br>
-4<br>
-3<br>
3<br>
4<br>
5<br>
6<br>
7<br>
8<br>
9<br>
10<br>
<br>
<br>
<?php   
for ($i = -11; $i <= -3; $i++) 
{ 
    echo "$i<br>"; 
} 
?>
<?php
for ($i = 3; $i <= 10; $i++) 
{ 
    echo "$i<br>"; 
} 
?>
<br>
================================<br>
Ülesanne 0103<br>
<br>
Järgnevas ülesandes tohib kasutada vaid IF tingimust, mooduli võtmist (mod %) ja FOR tsükklit. Kuvada ühe FOR tsükkliga välja järgmine arvude jada järgmisel kujul: <br>
<br>
100<br>
200<br>
300<br>
400<br>
500<br>
600<br>
700<br>
800<br>
900<br>
1000<br>
<br>
<br>
<?php   
for ($i = 100; $i <= 1000; $i+=100) 
{ 
    echo "$i" . "<br>"; 
} 
echo "<br>"; 
?>
<br>
================================<br>
Ülesanne 0104<br>
<br>
Kuvada kahe FOR tsükkliga välja järgmine arvude jada järgmisel kujul: <br>
<br>
1,0<br>
1,1<br>
1,2<br>
1,3<br>
1,4<br>
1,5<br>
1,6<br>
1,7<br>
1,8<br>
1,9<br>
2,0<br>
2,1<br>
... jne kuni<br>
9,9<br>
<br>
<?php   
for ($i = 1; $i <= 9; $i++) 
{ 
     
    for ($j = 0; $j <= 9; $j++) 
    { 
        echo "$i,$j<br>"; 
    } 
    echo ""; 
} 
?><br>
<br>
================================<br>
Ülesanne 0105<br>
<br>
Kuvada kahe FOR tsükkliga välja järgmine arvude jada järgmisel kujul:<br>
<br>
10,-10<br>
10,-9<br>
10,-8<br>
10,-7<br>
10,-6<br>
10,-5<br>
10,-4<br>
10,-3<br>
10,-2<br>
10,-1<br>
10,0<br>
10,1<br>
10,2<br>
10,3<br>
10,4<br>
10,5<br>
10,6<br>
10,7<br>
10,8<br>
10,9<br>
10,10<br>
9,-10<br>
9,-9<br>
... jne. kuni<br>
-10,10<br>
<br>
<?php   
for ($i = 10; $i >= -10; $i--) 
{ 
    for ($j = -10; $j < 10; $j++) 
    { 
        echo "$i,$j<br>"; 
    } 
} 
echo "<br>";   
?><br>
<br>
