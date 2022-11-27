<?php
    $connect=mysqli_connect("localhost:3307", "root", "", "wad_modul4_feni");
    $id=$_GET['id'];
    $hapus= "DELETE from showroom_feni_table WHERE id_mobil = $id";
    if(mysqli_query($connect,$hapus)){
        header("Location: MyItem.php");
    }
    if($query){
        echo "<script>alert('Data Berhasil di Hapus')</script>";
        echo "<meta http-equiv='refresh' content='1 url=MyItem.php'>";
        header("/MyItem.php");
    }
    else{
        echo "<script>alert('Data gagal di Hapus')</script>";
        echo "<meta http-equiv='refresh' content='1 url=MyItem.php'>";
        header("/MyItem.php");
    }
?>