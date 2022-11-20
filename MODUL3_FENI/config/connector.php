<?php
    $connect =  mysqli_connect("localhost:8080", "root", "", "modul3");
    if ($connect) {
        die("Connection failed: " . $conn->connect_error);
}
?>