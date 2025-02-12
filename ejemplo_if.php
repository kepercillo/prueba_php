<?php
$edad=12;
if($edad>=18):
    echo"es mayor de edad";
endif;
echo'<br>';

$total=90;
echo "Su subtotal es: $".$total;
echo '<br>';
if ($total>=100):
    $total=$total-($total*0.20);
    $descuento=$total*0.20;
    echo 'su descuento es de $'.$descuento."<br>"."<br>"."<br>";
    echo "El total: $".$total."<br>";
endif;
echo "El total: $".$total;
?>