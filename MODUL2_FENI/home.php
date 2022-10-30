<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>MODUL2_FENI</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<nav class="navbar navbar-expand navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="/Phpdasar/MODUL2_FENI/home.php">Home</a>
        <a class="nav-link" href="/Phpdasar/MODUL2_FENI/booking.php">Booking</a>
      </div>
    </div>
  </div>
</nav><br>

<div class="container">
    <div style="text-align:center;">
      <h5><strong>WELCOME TO EAD RENT</h5></strong>
      <p class="text-center">Find your best deal, here!</p>
</div>

<div class="container">

  <div class="row row-cols-1 row-cols-md-2 row-cols-md-3 g-3">
    <div class="col">
    <div class="card">
      <img src="innova.jpg" width="350" height="200" alt="">
      <div class="card-body">
        <h5 class="card-title"><strong>Toyota Innova</h5></strong>
          <p class="card-text">Rp. 200.000 / Day</p>
      </div>
      <center>
      <div class="card">
      <ul class = "list-group list-group-flush">
        <li class="list-group-item"><font color="blue">Abu</li></font>
        <li class="list-group-item"><font color="blue">7 Kursi</li></font>
        <li class="list-group-item"><font color="blue">Matic</li></font>
      </ul>
      <center>
      <form action="booking.php" method="POST">
        <div class="d-flex justify-content-center">
          <button type="submit" href="index2.php" class="btn btn-primary " value="Toyota Innova" nama="BookNow">Book Now</a>
        </div>
      </form>
		</div>
	</div>
</div>

    <div class="col">
    <div class="card">
      <img src="xenia.jpg" width="350" height="200" alt="">
      <div class="card-body">
        <h5 class="card-title"><strong>Daihatsu Xenia</h5></strong>
          <p class="card-text">Rp. 250.000 / Day</p>
      </div>
      <center>
      <div class="card">
      <ul class = "list-group list-group-flush">
        <li class="list-group-item"><font color="blue">Cokelat</li></font>
        <li class="list-group-item"><font color="blue">6 Kursi</li></font>
        <li class="list-group-item"><font color="blue">Manual</li></font>
      </ul>
      <center>
      <form action="booking.php" method="POST">
        <div class="d-flex justify-content-center">
          <button type="submit" href="#" class="btn btn-primary " value="Daihatsu Xenia" nama="BookNow">Book Now</a>
        </div>
      </form>
		</div>
	</div>
</div>
  
    <div class="col">
    <div class="card">
      <img src="rush.jpg" width="350" height="200" alt="">
      <div class="card-body">
        <h5 class="card-title"><strong>Toyota Rush</h5></strong>
          <p class="card-text">Rp. 300.000 / Day</p>
      </div>
      <center>
      <div class="card">
      <ul class = "list-group list-group-flush">
        <li class="list-group-item"><font color="blue">Maroon</li></font>
        <li class="list-group-item"><font color="blue">8 Kursi</li></font>
        <li class="list-group-item"><font color="blue">Manual</li></font>
      </ul>
      <center>
      <form action="booking.php" method="POST">
        <div class="d-flex justify-content-center">
          <button type="submit" href="#" class="btn btn-primary " value="Toyota Rush" nama="BookNow">Book Now</a>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<center>
<div class="card-footer">
		Created by FENI JUNIARTI_1202200017
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>