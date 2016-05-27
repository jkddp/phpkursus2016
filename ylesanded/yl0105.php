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
Vastus 0105<br>
<br>
<?php   

for ($i = 10; $i <= -10; $i++) 
{ 
    echo "<br>"; 
     
    for ($j = -10; $j <= 10; $j++) 
    { 
        echo "$i,$j"; 
    } 
    echo "<br>"; 
} 
?><br>
<br>