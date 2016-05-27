<br>Ülesanne 0201
<br>
<br>Genereeri tsükliga 100 täisarvust koosnev massiiv.
<br>Väljasta see "print_r" funktsiooniga.
<br>
<br>
Vastus 0201<br>
<br>
<?php 
$tmp_array = array();
for($i=1; $i<=100; $i++)
{
    $tmp_array[$i] = $i;
}
print_r($tmp_array);
?>