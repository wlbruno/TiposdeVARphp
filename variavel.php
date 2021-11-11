<?php
    //Entregador de delivery ganha 80 reais por dia porém ainda tem as
    // gorjetas dos clientes

    $valorDia = 80;
    $gorjetas = 40;
    $diaria = $valorDia + $gorjetas;

    echo "Segunda-feira : $diaria\n";

    $gorjetas = 15;
    $diaria = $valorDia + $gorjetas;

    echo "Terça-feira: $diaria";

?>