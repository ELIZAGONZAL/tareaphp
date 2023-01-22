<?php 
/*Una compañía de seguros tiene contratados a 30 vendedores. Cada uno hace tres ventas a la semana. Su política
de pagos es que un vendedor recibe un sueldo base y 10% extra por comisiones de sus ventas. El gerente de su
compañía desea saber cuánto dinero obtendrá en la semana cada vendedor por concepto de comisiones por las
tres ventas realizadas y cuánto tomando en cuenta su sueldo base y sus comisiones.*/


$salario_base = 500;
$salario_comision = 0.1;
$salario = 3;

$salariovendedor =30;

for ($i = 1; $i <= $salariovendedor; $i++) {
  $salario_comision_monto = $salario * $salario_comision;
  $total_salario = $salario_base + $salario_comision_monto;
  echo "Salariovendedor $i:<br> comision = $salario_comision_monto,<br> Total salario = $total_salario";
}






?>