<?php

$db = mysqli_connect('localhost','root','citra06','webspp');
if(!$db){
    throw new Exception("Database gagal terkoneksi", 1);
}

?>