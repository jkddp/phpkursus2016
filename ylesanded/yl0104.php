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
Vastus 0104<br>
<br>
<?php   

for ($i = 1; $i <= 9; $i++) 
{ 
    echo "<br>"; 
     
    for ($j = 0; $j <= 9; $j++) 
    { 
        echo "$i,$j"; 
    } 
    echo "<br>"; 
} 
?>