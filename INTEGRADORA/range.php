<?php
	require'conn.php';
	if(ISSET($_POST['search'])){
		$date1 = date("Y-m-d", strtotime($_POST['date1']));
		$date2 = date("Y-m-d", strtotime($_POST['date2']));
		$query=mysqli_query($conn, "SELECT * FROM `venta` WHERE `fecha` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
		$row=mysqli_num_rows($query);
		if($row>0){
			while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['id']?></td>
		<td><?php echo $fetch['ticket']?></td>
		<td><?php echo $fetch['fecha']?></td>
		<td><?php echo $fetch['cliente']?></td>
		<td>$<?php echo $fetch['total']?></td>
	</tr>
<?php
			}
		}else{
			echo'
			<tr>
				<td colspan = "6"><center>Rango de fechas no especificado</center></td>
			</tr>';
		}
	}
?>
