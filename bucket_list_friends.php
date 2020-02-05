<?php
echo("Hoeveel vreinden zal ik vragen om hun droom").PHP_EOL;
$keuze = readline("");
$lijst = array ();
if(is_numeric($keuze)){


for($i = 1; $i <= $keuze; $i++){
    echo("Wat is jou naam").PHP_EOL;
    $naam = readline("");
    echo("wat is je droom").PHP_EOL;
    $droom = readline("");
    
    $lijst[$naam] = $droom;
    
    
}
}
else{
    echo("$keuze is geen geldig getal, probeer het opnieuw!!");
}

foreach($lijst as $naam => $droom){
    echo("$naam heeft als droom: $droom").PHP_EOL;
}



?>