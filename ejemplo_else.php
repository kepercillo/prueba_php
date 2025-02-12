<?php
$llantas=4;

if($llantas<5):
        $total=$llantas*800;
else:
        $total=$llantas*700;
endif;

echo"el total a pagar: $".$total;
