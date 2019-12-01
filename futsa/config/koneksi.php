<?php
$hostname	= "localhost";
$username	= "root";
$password	= "";
$dbname		= "futsal_1";

//Langkah 1 : Koneksi ke Server Database
$conn	= mysql_connect($hostname, $username, $password);

//Langkah 2 : Memilih Database pada server Database
$database= mysql_select_db($dbname, $conn);
if(! $conn)
die("Database Not Connected"); 
?>