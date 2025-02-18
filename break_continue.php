<?php
$pc=["S.O", "SSD","FUENTE","DISCO DURO"];

foreach ($pc as $value) {
    if ($value=="FUENTE") {
        continue;
    }
    echo $value.'<br>';
}

    for ($i=1; $i<=10 ; $i++) {
        
        if($i==5){
            continue;
        }
        echo $i.'<br>';
    }

$j=1;
while ($j <= 10) {
    if ($j==5) {
        $j++;
        continue;
    }
    echo $j.'<br>';
    $j++;
}