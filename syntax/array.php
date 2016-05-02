<?php 

$drinks[]="piim";
$drinks[]="JimPiim";
$drinks[]="Jim";
$drinks[]="keefir";
$drinks[]="vesi";
$drinks[]="veeeeed";
$drinks[]="kristall";
$drinks["jook"]="mahl";


//echo $drinks[4];

echo "<pre>";
print_r($drinks);
echo "</pre>";

//var dump($drinks);

$rand1 = rand(0, sizeof($drinks)-1);
$rand2 = rand(0, sizeof($drinks)-1);

echo "<hr>";
echo "Isa lemmikjook on $drinks[$rand1], aga poeg joob jooki $drinks[$rand2]";
echo "<hr>";

for ($i = 0; $i < sizeof($drinks); $i++)
{
    echo "<li>$drinks[$i]";
    echo " - " .rand(2,7). "," .rand(0,9). "€";
    echo "</li>";
    echo "</ul>";
}
echo "<p>";

foreach ($drinks as $key => $val)
{
    $counter++;
    echo "$counter) Massivi element indeksiga $key väärtus on $val<br>";
}

 ?>