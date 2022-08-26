<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename = Electrodomex_Facturas del cliente.xls");

?>

<meta charset="UTF-8">


<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select DISTINCT  cliente.nombre,ticket
        from cliente
        inner join venta on venta.cliente = cliente.id 
        where cliente.id IN
        (select cliente.id from cliente
       )";
$rs = query ($sql);
?>
<table class="table table-bordered table-hover">
                <tr class="text-center table-dark">
                    <th>Nombre</th>
                    <th>Factura</th>
                </tr>
                    <?php while ($row = $rs -> fetch_assoc()):
                    extract($row);
                    ?>
                    <tr>
                        <td><?= $nombre ?></td>
                        <td><?= $ticket ?></td>
                    </tr>
                    <?php endwhile; ?>
            </table>