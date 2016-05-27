<br>Ülesanne 0401
<br>
<br>Tee massiiv kuhu lisada järgmised andmed:
<br>Nimi, aadress, pildi nimi (nt. vello.jpg), kodulehekülg (nt. www.onu.ee)
<br>Pilt salvesta ülesande kataloogi.
<br>Luua HTML lehekülg kuhu kuvda massiivist välja eelpool kirjeldatud andmed.
<br>Nime kuvamiseks kasuta <b> tagi.
<br>Aadressi kuvamiseks kasuta <i> tagi.
<br>Pildi kuvamiseks kasuta <img src=> tagi.
<br>Kodulehe lingi kuvamiseks kasuta <a href=> tagi.
<br>
Vastus 0401<br>
<br>
<?php 
function string_info($str) 
{
  
  echo "Stringi esimene täht on: ".$str[0].". ";
  
  echo "<br>Stringis ".$str. " on ".strlen($str)." tähte. ";
  echo  "<br>Antud string väikeste tähtedega on järgmine ".strtolower($str).".";
  echo  "<br>Antud string suurte tähtedega on järgmine ".strtoupper($str).".";
 $arv=0;
    for ($i=0; $i < strlen($str); $i++ ){
    
        if ($str[$i]=='a') { 
        $arv=$arv+1;
    
        } 
  
  
    } 
  echo  "<br>Stringis ".$str. " on a tähti ".$arv."."; 
}
string_info("Phpkursus2016");
?>