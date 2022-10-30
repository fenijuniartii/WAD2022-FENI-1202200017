
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
        <a class="nav-link" href="/Phpdasar/MODUL2_FENI/my booking.php">Booking</a>
      </div>
    </div>
  </div>
</nav><br>

<?php
    $Booking_Number = isset($_GET['Booking_Number']) ? $_GET['Booking_Number'] : '';
    $Name = isset($_GET['name']) ? $_GET['name'] : '';
    $Check_In = isset($_GET['Book_Date']) ? $_GET['Book_Date'] : '' ;
    $Duration = isset($_GET['Duration']) ? $_GET['Duration'] : '' ;
    $Check_Out = date('Y-m-d', strtotime($Check_In."+$Duration days"));
    $Car_Type = isset($_GET['Car_Type']) ? $_GET['Car_Type'] : '';
    $Phone_Number = isset($_GET['Phone_Number']) ? $_GET['Phone_Number'] : '';
    $Services = isset($_GET['Add_Service']) ? $_GET['Services'] : '';
    $Total_Prices = isset($_GET['Total_Price']) ? $_GET['Total_Price'] : '';
    ?>
    
    <div class="container">
        <h5 class="text-center"><strong>Thank You FENI JUNIARTI_1202200017 for Reserving</h5></strong>
        <p class="text-center">Please double check your reservation details</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Services</th>
                    <th scope="col">Total Price(s)</th>
                </tr>
            </thead>
          <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo Rand(10000,50000) ?></td>
                    <td><?php echo $Name ?></td>
                    <td><?php echo $Check_In ?></td>
                    <td><?php echo $Check_Out ?></td>
                    <td><?php echo $Car_Type ?></td>
                    <td><?php echo $Phone_Number ?></td>
                    <td><?php echo $Services ?></td>
                    <td><?php echo $Total_Prices ?></td>
                </tr>
            </thbody>
        </table>
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