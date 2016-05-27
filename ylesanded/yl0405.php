<br>Ülesanne 0405
<br>
<br>Genereeri kahe FOR tsükkliga 10x10 korrutustabel.
<br>Korrutustabel peab olema HTML tabeli sees.
<br>Korrutustabelis peab olema esimesel real ja veerul numbrid 1-10. 
<br>Teisel real esimese rea ja veeru korrustis jne.
<br>
<br>Näidet otsi PHP süntaksi materjalist: http://students.tmk.edu.ee/php/materjal/php_syntax.php
<br>
Vastus 0405<br>
<br>
<?php 
echo "<table border=1>";
for ($i=1; $i<=10; $i++)
{ 
  echo "<tr>";
  for ($j=1; $j<=10; $j++)
  {
    $mas[$i][$j] = $i*$j;
    
   echo "<td><span style='color: $color'>$i,$j <br><b>".$mas[$i][$j]."</b></span></td>";
  }
  echo "</tr>";
}
echo "</table>"; 
?>