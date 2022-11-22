<?php
    $connect=mysqli_connect("localhost:3307", "root", "", "modul3");
    $id=$_GET['id'];
    $hapus= "DELETE from showroom_nama_table id_mobil = $id";
    if(mysqli_query($connect,$hapus)){
        header("Location: MyItem.php");
    }
?>