<?php 
/*En una librería, los clientes hacen pedidos de libros, cuadernos y revistas con las condiciones siguientes: los
libros tienen un descuento del 22%, las revistas del 16% y los cuadernos del 10%. Los datos que se ingresan
para cada tipo de artículo son: la cantidad pedida, el precio unitario y el tipo de pago. Si el pago es al contado,
se tiene un descuento de 6% en cualquiera de los casos. Calcular e imprimir el costo total del pedido
considerando el tipo de pago para cada cliente y el total que pagan al final del día N clientes.*/
 $contador = 0;
 $desuento = 0;
 $subtotal = 0;
 $cantidad = 0;
 $precio = 0;

 $totalPagoCliente = 0;

 do{
    $contador++;
    echo "\n--------------------------------------------------\n";
    echo "\n---------------INFORMACION DEL CLIENTE # ". $contador . "----------------------\n";
    $totalPagoCliente = 0;

    do{
        $desuento = 0;

        echo "\n--------------------------------------------------\n";
        echo "1. Libros\n";
        echo "2. Revistas\n";
        echo "3. Cuadernos\n";
        $opcion = readline ('Seleccione una opcion:');
        echo "\n--------------------------------------------------\n";
        $cantidad = readline('Cantidad:');
        $precio = readline('precio: ');
        $subtotal = $cantidad * $precio;
        switch ($opcion) {
            case '1':
                $desuento = $subtotal * 0.22;
                break;
                case '2':
                    $desuento = $subtotal * 0.16;
                    break;
                    case '3':
                        $desuento = $subtotal * 0.1;
                        break;

           default:
           echo 'Opcion incorrecta';
           break;             
        }
        echo "\n--------------------------------------------------\n";
        echo 'Subtotal: $'. $subtotal ."\n";
        echo 'Descuento: $'. $desuento ."\n";
        echo 'Total Pagar por el Articulo: $'. $subtotal . ($subtotal -$desuento)."\n";

        $totalPagoCliente +== $subtotal - $desuento;

        $resp = readline('Desea seleccionar otro articulo?SI=S/NO=N');
    }while (strtoupper($resp)== 'S');
    echo "\n--------------------------------------------------\n";
    echo'Total a pagar del Cliente:'. $totalPagoCliente . "\n";

 }while (strtoupper($respuesta) == 'S');


?>