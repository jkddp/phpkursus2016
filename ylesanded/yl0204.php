<br>Ülesanne 0204
<br>
<br>Lisa massiivi inimese isikuandmed (nimi, vanus jne.) min 5 elementi.
<br>Väljasta need mõnes lauses, sellesama inimese kohta.
<br>Nt. "Kodanik [nimi] on [vanus] aastane"
<br>
<br>
Vastus 0204<br>
<br>
<?php 
$isikuandmed["nimi"]="Jim Piim";
$isikuandmed["vanus"]="28";
$isikuandmed["linn"]="Tallinn";
$isikuandmed["riik"]="Eesti";
$isikuandmed["maailmajagu"]="Euroopa";

echo "Kodanik $isikuandmed["nimi"] on $isikuandmed["vanus"] aastane, sünnikohaga $isikuandmed["linn"], $isikuandmed["riik"], $isikuandmed["maailmajagu"].";
echo "<hr>";

 ?>