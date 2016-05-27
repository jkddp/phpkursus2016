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

function number_info($i) {
	if ($i % 2) {
		echo "$i on paaritu arv";
	}
	else {
		echo "$i on paarisarv";
	}
	if ($i > 10) {
		echo ", suurem kui 10";
	}
	elseif ($i == 10) {
		echo ", võrdne 10-ga";
	}
	else {
		echo ", väiksem kui 10";
	}
	if ($i > 100) {
		echo " ja suurem kui 100. ";
	}
	elseif ($i == 100) {
		echo " ja võrdne 100-ga. ";
	}
	else {
		echo " ja väiksem kui 100. ";
	}
	echo "$i ruudus on: $i * $i = " . ($i * $i);
	echo " ja ruutjuur $i-st on " . pow($i, 1/2);
}
number_info(1);
echo "<br>";
number_info(8);
echo "<br>";
number_info(9);
echo "<br>";
number_info(15);
echo "<br>";
number_info(200);
echo "<br>";

?>