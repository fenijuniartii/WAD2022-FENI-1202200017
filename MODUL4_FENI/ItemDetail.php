<!DOCTYPE html>
<html lang="eng">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
        .nav-link button {
      display: flex;
      flex-direction: row;
      align-items: center;
      padding: 8px 22px;
      gap: 10px;

      position: absolute;
      width: 110px;
      height: 40px;
      left: 1133px;
      top: 18px;

        /* light/primary/origin */

        color: #3563E9;


        /* Inside auto layout */

        flex: none;
        order: 1;
        flex-grow: 0;

        width: 105px;
        height: 25px;

        /* white */

        background: #FFFFFF;
        border-radius: 5px;

        border: none;
        
    }
    
    </style>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="/WAD2022-FENI-1202200017/MODUL4_FENI/HomeSetelahLogin.php">Home</a>
            <a class="nav-link active" aria-current="page" href="/WAD2022-FENI-1202200017/MODUL4_FENI/MyItem.php">MyCar</a>
            <a class="nav-link" href="/WAD2022-FENI-1202200017/MODUL4_FENI/AddItem.php"><button>Add Car</button></a>
        </div>
        </div>
    </div>
    </nav><br></br>

    <?php
        $connect=mysqli_connect("localhost:3307", "root", "", "wad_modul4_feni");
        $id=$_GET['id'];
        $query=mysqli_query($connect, "SELECT * FROM showroom_feni_table WHERE id_mobil=$id");
        $selects=mysqli_fetch_array($query);
    ?>
        <div class="container">
        <h2><b><?php echo $selects['nama_mobil'] ?></b></h2>
        <p>Detail Mobil <?php echo $selects['nama_mobil'] ?></p>
        <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
            <img src="foto/<?php echo $selects['foto_mobil']?>" alt="No Image"></img>
            <form enctype='multipart/form-data'>
                <div class="mb-3">
                    <label for="nama_mobil"><b>Nama Mobil</b></label>
                    <input type="text" name="nama_mobil" class="form-control form-control-readonly" value="<?php echo $selects['nama_mobil']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="nama_pemilik"><b>Nama Pemilik</b></label>
                    <input type="text" name="pemilik_mobil" class="form-control"value="<?php echo $selects['pemilik_mobil']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="merk_mobil"><b>Merk</b></label>
                    <input type="text" name ="merk_mobil" class="form-control" value="<?php echo $selects['merk_mobil']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="tanggal"><b>Tanggal Beli</b></label>
                    <input type="date" name="tanggal_beli" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo $selects['tanggal_beli']?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="Deskripsi"><b>Deskripsi</b></label>
                    <textarea class="form-control" rows="3" name="Deskripsi" readonly><?php echo $selects['deskripsi']?></textarea>
                </div>
                <div class="mb-3">
                    <label for="Foto"><b>Foto</b></label>
                    <input type="file" name="Foto" id="Foto"  class="form-control" value="" readonly><span><?php echo $selects['foto_mobil']?></span>
                </div>
                <div class="mb-3">
                    <label for="Status_Pembayaran"><b>Status Pembayaran</b></label>
                    <div class="mb-3">
                        <input type="radio" name="Status_Pembayaran" id="Status_Pembayaran" value="Lunas" <?php ($selects["status_pembayaran"] == 'Yes') ? "checked" : ""?>" readonly>
                        <label for="Lunas">Lunas</label>
                        <input type="radio" name="Status_Pembayaran" id="Status_Pembayaran" value="Belum Lunas" <?php ($selects["status_pembayaran"] == 'No') ? "checked" : ""?>" readonly>
                        <label for="Belum Lunas">Belum Lunas</label>
                    </div>
                </div>
                <a href='EditItem.php?id=<?php echo $selects['id_mobil']?>' button class='btn btn-primary' type='Edit'>Edit</button></a><br></br>
            </div>
                             
                
            </form>
        </div>