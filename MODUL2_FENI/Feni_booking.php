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
        <a class="nav-link" href="/Phpdasar/MODUL2_FENI/Feni_home.php">Home</a>
        <a class="nav-link" href="/Phpdasar/MODUL2_FENI/Feni_booking.php">Booking</a>
      </div>
    </div>
  </div>
</nav><br>

<div class="container">
    <div style="text-align:center;">
    <h5><strong>Rent Your Car Now!</h5></strong>
</div>

<div class="container">
    <form action="Feni_my booking.php" method="GET">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="FENI JUNIARTI_1202200017" readonly>
        </div>
        <div class="mb-3">
            <label for="Book_Date">Book Date</label>
            <input type="date" id="Book_Date" name="Book_Date" class="form-control" placeholder="mm/dd/yyyy">
        </div>
        <div class="mb-3">
            <label for="Start_Time">Start Time</label>
            <input type="time" id="Start_Time" name ="Start_Time" class="form-control" placeholder="--:--">
        </div>
        <div class="mb-3">
            <label for="Duration">Duration (Days)</label>
            <input type="number" id="Duration" name="Duration" class="form-control" min="1" max="7">
        </div>
        <div class="mb-3">
            <label for="Car_Type">Car Type</label>
            <select id="Car_Type" name="Car_Type" class="form-select" onchange="priceFunction()" aria-label="Default select example">
                <option value="Toyota Innova">Toyota Innova</option>
                <option value="Daihatsu Xenia">Daihatsu Xenia</option>
                <option value="Toyota Rush">Toyota Rush</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="Phone_Number">Phone Number</label>
            <input type="tel" name="Phone_Number" id="Phone_Number" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label for="Add_Service"> Add Service(s):</label>
        <div class="form-check">
            <input class="form-check-input" name="Add_Service[]" type="checkbox" value="25000" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                Health Protocol / Rp.25.000
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="Add_Service[]" type="checkbox" value="100000" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">
                Driver / Rp.100.000
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" name="Add_Service[]" type="checkbox" value="250000" id="defaultCheck3">
            <label class="form-check-label" for="defaultCheck3">
                Fuel filled / Rp.250.000
            </label>
        </div>
        <div class="mb-3">
            <div class="d-grid gap-1">
            <input class="btn btn-success" type=" " name="Book" value="Book">  
        </div>
    </div>
</div>
</form>

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
