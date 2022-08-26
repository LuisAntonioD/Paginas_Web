<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficas</title>
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

</head>
<body>
<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select count(id_sucursal) as QRO from inventario where id_sucursal=1";
$rs = query ($sql);
?>

<?php while ($row = $rs -> fetch_assoc()):
   extract($row);
?>
<?php endwhile; ?>  

<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select count(id_sucursal) as CDMX from inventario where id_sucursal=3";
$rs = query ($sql);
?>

<?php while ($row = $rs -> fetch_assoc()):
   extract($row);
?>
<?php endwhile; ?>  

<?php
require_once( "mysql.lib.php" );
$mysqli = conectar();

$sql="select count(id_sucursal) as GDL from inventario where id_sucursal=3";
$rs = query ($sql);
?>

<?php while ($row = $rs -> fetch_assoc()):
   extract($row);
?>
<?php endwhile; ?>  
 
   <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto;width:50%"></div>
   <script>
    Highcharts.setOptions({
    colors: ['rgb(85, 107, 47)']
});
    Highcharts.chart('container', {
      credits: {
        text: 'Electrodomex.com.mx',
        href: 'admin.php'
    },
    
  chart: {
    type: 'column'
  },
  title: {
    text: 'Productos en cada sucursal'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [
      'Sucursal de Querétaro',
      'Sucursal de CDMX',
      'Sucursal de Guadalajara'
    ],
    crosshair: false
  },
  yAxis: {
    min: 0,
    title: {
      text: 'Productos'
    }
  },
  tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>{point.y}</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
  },
  plotOptions: {
    column: {
      pointPadding: 0,
      borderWidth: 60,
      groupPadding: 0,
      shadow: false
    }
  },
  series: [{
    name: 'Productos',
    data: [<?=$QRO?>,<?= $CDMX?>, <?=$GDL?>]

  }]
});

   </script>
</body>
</html>