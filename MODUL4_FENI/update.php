<?php
    include('connector.php');
    $connect=mysqli_connect("localhost:3307", "root", "", "wad_modul4_feni");
    $id=$_GET['id'];
    $nama_mobil = $_POST['nama_mobil'];
    $nama_pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $tanggal = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto=$_FILES['Foto']['name'];
    $foto_tmp=$_FILES['Foto']['tmp_name'];
    move_uploaded_file($foto_tmp, 'foto/'.$foto);
    $pembayaran = $_POST['pembayaran'];
    if(isset($_POST['radio'])){
        $pembayaran = $_POST['radio'];
    }

    $query = mysqli_query($connect, "UPDATE showroom_feni_table SET nama_mobil='$nama_mobil', pemilik_mobil='$nama_pemilik', merk_mobil='$merk', tanggal_beli='$tanggal', deskripsi='$deskripsi', foto_mobil='$foto', status_pembayaran='$pembayaran' WHERE id_mobil='$id'");
    if($query){
        echo "<script> alert('Data Berhasil diupdate')</script>";
        echo "<meta http-equiv='refresh' content='1 url=MyItem.php'>";
        header("/MyItem.php");
    }
    else{
        echo "<script>alert('Data gagal diupdate')</script>";
        echo "<meta http-equiv='refresh' content='1 url=MyItem.php'>";
        header("/MyItem.php");
    }
?>