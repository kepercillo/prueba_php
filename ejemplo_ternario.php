<?php
$camisas=7;
$precio=10;
$total=$camisas*$precio;
$total= ($camisas>=2) ? $total-($total*0.20) : $total-($total*0.10);
echo "El total a pagar es $". $total;


