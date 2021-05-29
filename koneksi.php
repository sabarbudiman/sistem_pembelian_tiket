<?php
$local = "localhost";
$username = "root";
$pass = "";
$database = "sistem_pembelian_tiket";

$tersambung = mysqli_connect($local, $username,$pass,$database);

if(mysqli_connect_error($tersambung)){
    echo "Database tidak tersambung".mysqli_connect_error();
}
?>