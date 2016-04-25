<?php  

$rand = rand(1,2000);

for($i = 0; $i < 2000; $i++)

{
    echo "1 ";
    if ($i == $rand) echo "l ";
}



?>