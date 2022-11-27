<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Modul4_Feni</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
    .nama{
      position: absolute;
      width: 66px;
      height: 14px;
      left: 100px;
      top: 420px;

      font-family: 'Raleway';
      font-style: normal;
      font-weight: 500;
      font-size: 12px;
      line-height: 14px;
      /* identical to box height */

      text-align: center;
      letter-spacing: 0.46px;

    }
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
</head>
<body>
    
<nav class="navbar navbar-expand navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/WAD2022-FENI-1202200017/MODUL4_FENI/HomeSetelahLogin.php">Home</a>
        <a class="nav-link" href="/WAD2022-FENI-1202200017/MODUL4_FENI/MyItem.php">MyCar</a>
        <a class="nav-link" href="/WAD2022-FENI-1202200017/MODUL4_FENI/AddItem.php"><button>Add Car</button></a>
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Nama
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="Logout.php">Logout</a></li>
        </ul>
    </div>
      </div>
    </div>
  </div>
</nav>

<section class="content">
  <div class="row justify-content-center mx-auto d-flex align-items-center">
    <div class="col">
      <h2><b class="card-title">Selamat Datang Di Show Room Feni </b></h2>   
        <p class="card-text">At lacus vitae nulla sagitis scelerisque nisL. Pellentesque duis 
          <br>cursus vestibulum,facilisi ac,sed faucibus</br></p>
          <a href="AddItem.php" class="btn btn-primary">MyCar</a>
        <br></br>
        <br></br>
    <div class="display">
      <img class="style="width: 105.43px; height: 30px; left: 120px; top: 729px;" src="foto\logo-ead.png" width="100" height="30" alt="card image">
      <br></br>

        <p class="nama" style="margin-left:150px; position: absolute">Feni_1202200017</p>
      </div>
</div>
<div class="col">
  <img class="card-img-top img-responsive center-block d-block mx-auto" src="foto\civicc.jpg" width="150" height="300" alt="center">
</div>
</div>
</section>
</body>
</html>