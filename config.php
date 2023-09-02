<?php

$conn = new mysqli("localhost", "root", "password", "almacen");

if ($conn->connect_error){
    die("Error conectando la base de datos... " . $conn->connect_error);
}
