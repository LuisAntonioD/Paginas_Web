<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename = Electrodomex_Productos de menor precio.xls");

?>

<meta charset="UTF-8">


<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select municipio as sucursal,producto.nombre as nombre_producto,precio as Precio_Venta,estatus
        from producto
        inner join  inventario on inventario.id_producto=producto.id
        inner join  sucursal on inventario.id_sucursal=sucursal.id
        where producto.id IN
        (select producto.id from inventario
        where precio <= 2000.00)
        ORDER BY inventario.id_sucursal";
$rs = query ($sql);
?>



<center><div class="container">
<div class="col col-md-8">

            <table class="table table-bordered table-hover">
                <tr class="text-center table-dark">
                    <th>Sucursal</th>
                    <th>Nombre del producto</th>
                    <th>Precio de venta</th>
                    <th>estatus</th>


                </tr>
                    <?php while ($row = $rs -> fetch_assoc()):
                    extract($row);
                    ?>
                    <tr>
                        <td><?= $sucursal ?></td>
                        <td><?= $nombre_producto ?></td>
                        <td>$<?= $Precio_Venta ?></td>
                        <td><?= $estatus ?></td>
                    </tr>
                    <?php endwhile; ?>
            </table>
        </div>
        </div></center>