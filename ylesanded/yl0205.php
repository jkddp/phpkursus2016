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
Vastus 0205<br>
<br>
<?php 

$movies[1][1] = 'Matrix';
$movies[1][2] = 'Titanic';
$movies[1][3] = 'Klass';
$movies[2][1] = 'Klassikokkutulek';
$movies[2][2] = 'x men';
$movies[2][3] = 'Ocean 11';
$movies[3][1] = 'Mingi film';
$movies[3][2] = 'Must ja valge koer';
$movies[3][3] = 'Maša ja karu';
for ($i=1; $i<=3; $i++)
{
  for ($j=1; $j<=3; $j++)
  {
    echo $movies[$i][$j] . "<br />";
  }
}
?>
