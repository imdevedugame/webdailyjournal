<?php
date_default_timezone_set('Asia/Jakarta');

$servername = "localhost";
$username = "u549837623_ivan";
$password = "Ivan@123045";
$db = "u549837623_ivan"; //nama database

//create connection
$conn = new mysqli($servername,$username,$password,$db);

//check apakah ada error connection
if($conn->connect_error){
	//jika ada, hentikan script dan tampilkan pesan error
	die("Connection failed : ".$conn->connect_error);
}

//echo "Connected successfully<hr>";
?>