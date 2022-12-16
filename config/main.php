<?php

$host="localhost";
$user="root";
$password="";
$db="mtsbc";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("CUY GAGAL KONEKSINYA:".mysqli_connect_error());
}
?>