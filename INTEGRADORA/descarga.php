<?php
include('Fuction_Backup.php');

echo backup_tables('localhost','root','rootadmin01','electrodomex');

$fecha=date("Y-m-d");
header("Content-disposition: attachment; filename=db-backup-Electrodomex-".$fecha.".sql");
header("Content-type: MIME");
readfile("backups/db-backup-".$fecha.".sql");