<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- favicon -->
  <link rel="icon" href="images/favicon-16x16.png">
  <!-- bootstrap link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
 
  <title>About Us</title>

  <style>
    
    h1 {
      font-family: 'Squada One', cursive;
      color: #11AA81;
    }

    .icons {
      color: #F33E17;
    }

    .icons:hover {
      color: #254117;
    }

    h3,
    p {
      font-family: 'Montserrat', sans-serif;
    }
  </style>
</head>

<body>
  <?php
    include('Includes/header.php');
    ?>
  <h1 style="text-align: center; margin: 30px; margin-top:100px; font-size: 50px;">About Us</h1>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <i class="icons fas fa-check-circle fa-5x py-3"></i>
        <h3>Easy to use</h3>
        <p>We have all the world class doctors</p>
      </div>
      <div class="col-lg-4">
        <i class="icons custIcon fas fa-bullseye fa-5x py-3"></i>
        <h3>Excellent Doctors</h3>
        <p>We have all the world class doctors</p>
      </div>
      <div class="col-lg-4">
        <i class="icons custIcon fas fa-heart fa-5x py-3"></i>
        <h3>Highest Quality Care. Honest. Trusted.</h3>
        <p>We have all the world class doctors</p>
      </div>
    </div>
  </div>

  <h1 style="margin-top: 100px; text-align:center;">For queries, reach out to us!</h1>
    <hr>
    <div class="container table-responsive py-5">
      <table class="table table-bordered table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Contact Information</th>
        </thead>
        <tbody>
          <tr>
            <td>Phone Number: +91-9999999999</td>
          </tr>
          <tr>
            <td>Email: driveyourdreams@gmail.com</td>
          </tr>
          <tr>
            <td>Residential Address: Block-11, Chintamani Apartment, Near VIT college, Pune, Maharashtra, India - 411037</td>
          </tr>
        </tbody>
      </table>
      <h4 style="margin-top: 50px;"><i class="fal fa-grin"></i> PS: Feel free to contact us, Suggestions will always be appreciated.</h4>
    </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>