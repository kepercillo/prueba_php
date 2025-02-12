<?php
$cantidad=15;
$precio=700;
$total=$precio*$cantidad;
if ($cantidad<5) {
    $total=($total)-($total*0.10);
    echo "su total es $".$total;
}elseif ($cantidad>=5 && $cantidad<10) {
    $total=($total)-($total*0.20);
    echo "su total es $".$total;
}elseif ($cantidad>=10) {
    $total=($total)-($total*0.40);
    echo "su total es $".$total;
}else {
    echo"valor no valido";
}

echo "El total a pagar sera $".$total;