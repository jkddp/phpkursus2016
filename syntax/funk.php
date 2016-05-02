http://students.tmk.edu.ee/andmebaas/SQL/names_surnames.txt<hr>

<?php 

function getname($name)
{
    $names = "koer  123
kass  42
kukk  77
heeringas  33";
    
    $rows = explode("\n", $names);
    //print_r($rows);
    
    foreach($rows as $key => $val)
    {
        $temp[] = explode("  ", $val);
        $surname[$temp[0]] = $temp[1];
    }
    print_r($surname);
    
    
    return $count;
}

getname();

 ?>