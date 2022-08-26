<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename = Electrodomex_Ubicación del cliente.xls");

?>
<meta charset="UTF-8">

<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select * from muni_cliente";
$rs = query ($sql);
?>

<center><div class="container">
<div class="col col-md-7">

            <table class="table table-bordered table-hover">
                <tr class="text-center table-dark">
                    <th>Nombre del cliente</th>
                    <th>Municipio</th>

                </tr>
                    <?php while ($row = $rs -> fetch_assoc()):
                    extract($row);
                    ?>
                    <tr>
                        <td><?= $nombreCliente ?></td>
                        <td><?= $municipio ?></td>
                    </tr>
                    <?php endwhile; ?>
            </table>
        </div>
        </div></center>