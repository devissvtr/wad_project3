<?php
//Koneksi ke database
$conn = mysqli_connect("127.0.0.1:3308","root","","wad_project3");

//Mengabil data ari tabel database
$result = mysqli_query($conn,"SELECT * FROM student ");

//var_dump($result)
var_dump(mysqli_fetch_object($result));
?>