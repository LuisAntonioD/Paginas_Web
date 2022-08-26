<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename = Electrodomex_Clientes que si han realizado compras.xls");

?>
<meta charset="UTF-8">


<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select * from venta_cliente order by id asc";
$rs = query ($sql);
?>

<center><div class="container">
<div class="col col-md-7">

            <table class="table table-bordered table-hover">
                <tr class="text-center table-dark">
                    <th># de venta</th>
                    <th>cliente</th>
                    <th>Nombre</th>

                </tr>
                    <?php while ($row = $rs -> fetch_assoc()):
                    extract($row);
                    ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $cliente ?></td>
                        <td><?= $nombre ?></td>
                    </tr>
                    <?php endwhile; ?>
            </table>
        </div>
        </div></center>