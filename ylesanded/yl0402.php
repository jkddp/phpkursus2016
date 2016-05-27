<br>Ülesanne 0402
<br>
<br>Tee tsükliga 20 "checkboxi2. Pane neile kõigile oma nimi stiilis box[1], box[2], jne.
<br>Tee tsükliga 20 "teksti lahtrit". Pane neile kõigile oma nimi stiilis cell[1], cell[2], jne.
<br>Tee tsükliga 20 "radio buttonit". Pane neile kõigile üks nimi "radio" ja erinevad väärtused stiilis value1, value2 jne.
<br>
Vastus 0402<br>
<br>
<?php 
echo '<table border="1" cellpadding="2px"><tr><td>';
for ($i=1; $i <= 20; $i++) { 
  echo $i . '. <input type="checkbox" name="box[' . $i . ']"><br />'; 
} 
echo '</td><td>';
for ($i=1; $i <= 20; $i++) { 
  echo $i . '. <input type="text" name="cell[' .$i . ']"><br />'; 
} 
echo '</td><td>';
for ($i=1; $i <= 20; $i++) { 
  echo $i . '. <input type="radio" name="radio" value="value[' . $i . ']"><br />'; 
}
echo '</td></tr></table>';
?>