<?php
$conn = new mysqli("localhost", "root", "Anya@1208", "canteen");
if($conn->connect_error){
    die("Connection Failed!".$conn->connect_error);
}
?>