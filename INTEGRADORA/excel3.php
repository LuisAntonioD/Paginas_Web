<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename = Electrodomex_Modificación de contraseñas.xls");

?>
<meta charset="UTF-8">
<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select * from clavecambiada";
$rs = query ($sql);
?>

<center><div class="container">
<div class="col col-md-10">

            <table class="table table-bordered table-hover">
                <tr class="text-center table-dark">
                    <th>#</th>
                    <th>Usuario</th>
                    <th>Contraseña anterior</th>
                    <th>Fecha de modificación</th>


                </tr>
                    <?php while ($row = $rs -> fetch_assoc()):
                    extract($row);
                    ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $usuario ?></td>
                        <td><?= $password ?></td>
                        <td><?= $fecha ?></td>

                    </tr>
                    <?php endwhile; ?>
            </table>
        </div>
        </div></center>
