<!doctype html>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>blood bank</title>
  <style>
    .ff {
      color: blue;
      font-style: copperplate;

    }
  </style>
</head>

<body>
  <?php

  include 'navbar.php';

  ?>
  <hr color="green" size="10">

  <?php
  include 'carousel.php';
  ?>
  <hr color="blue" size="10">

  <div class="row" style="padding-top:4px;">
    <div class="row text-center">
      <div class="col-md-12 typeHeading">
        <h1 class="learnAbout">Learn About Donation</h1>
      </div>
    </div>
    <br><br>
    <div class="wow col-sm-6 rotateInDownRight text-center animated" data-wow-delay="0ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: rotateInDownRight;">
      <!-- <img src='assets/donationFact.jpg'></img> -->

      <img src="donationFact.jpg" width="500" alt="One Donation Can save upto three lives">

      <blockquote>
        <p style="font-family:oswald">After donating blood, the body works to replenish the blood loss. This stimulates the production of new blood cells and in turn, helps in maintaining good health.</p>
        <p>
        </p>
      </blockquote>

      <button onclick="window.location='donor_detail.php'" class="btn btn-danger svcNearBy hvr-sweep-to-right "><i class="fa fa-tint" aria-hidden="true"></i>&nbsp; Donate Now</button>
      <br><br>
    </div>


    <div class="col-sm-6">
      <table class="table table-responsive table-bordered ">
        <tbody>
          <tr>
            <th colspan="3" style="color:white;background-color:red;">Compatible Blood Type Donors</th>
          </tr>
          <tr>
            <td><b>Blood Type</b></td>
            <td><b>Donate Blood To</b></td>
            <td><b>Receive Blood From</b></td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>A+</b></span></td>
            <td>A+ AB+</td>
            <td>A+ A- O+ O-</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>O+</b></span></td>
            <td>O+ A+ B+ AB+</td>
            <td>O+ O-</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>B+</b></span></td>
            <td>B+ AB+</td>
            <td>B+ B- O+ O-</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>AB+</b></span></td>
            <td>AB+</td>
            <td>Everyone</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>A-</b></span></td>
            <td>A+ A- AB+ AB-</td>
            <td>A- O-</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>O-</b></span></td>
            <td>Everyone</td>
            <td>O-</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>B-</b></span></td>
            <td>B+ B- AB+ AB-</td>
            <td>B- O-</td>
          </tr>
          <tr>
            <td><span style="color: #961e1b;"><b>AB-</b></span></td>
            <td>AB+ AB-</td>
            <td>AB- A- B- O-</td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
  <hr size="15" width="100%" color="black">
  <div class="col-md-12 donationTypeInfoWindow text-center">
    <header class="typeHeading">
      <h1 style="color: green">Types of donation</h1>
    </header>
    <!-- /Header -->

    <!-- Content -->
    <div class="content">
      <p style="text-align: center;">The human body contains five liters of blood, which is made of several useful components i.e. <strong>Whole blood</strong>, <strong>Platelet</strong>, and <strong>Plasma</strong>.</p>
      <p style="text-align: center;">Each type of component has several medical uses and can be used for different medical treatments. your blood donation determines the best donation for you to make.</p>
      <p style="text-align: center;">For <strong>plasma</strong> and <strong>platelet</strong> donation you must have donated whole blood in past two years.</p>

    </div>
    <br><br>


    <div class="row tabInfo" id="wholeBlood">
      <div class="col-md-4 ">

        <h3 class="ff">What is it?</h3>

        <p>
          Blood Collected straight from the donor after its donation usually separated into red blood cells, platelets, and plasma.</p>

        <h3 class="ff">Who can donate?</h3>

        <p>You need to be 18-65 years old, weigh 45kg or more and be fit and healthy.</p>


      </div>
      <div class="col-md-4 infoContent">
        <h3 class="ff">User For?</h3>

        <p>
          Stomach disease, kidney disease, childbirth, operations, blood loss, trauma, cancer, blood diseases, haemophilia, anemia, heart disease.</p>

        <h3 class="ff">Lasts For?</h3>

        <p>Red cells can be stored for 42 days.</p>

      </div>
      <div class="col-md-4 ">
        <h3 class="ff">How long does it take?</h3>

        <p>
          15 minutes to donate.</p>

        <h3 class="ff">How often can I donate?</h3>

        <p>Every 12 weeks</p>

      </div>
    </div>


    <br><br>
    <button type="button" onclick="window.location='https://www.google.com/maps/search/nearest+blood+bank'" style="border-radius:0px" class="btn-lg btn btn-danger svcNearBy hvr-sweep-to-right ">Find Nearest Blood Bank To Donate</button>
    <br><br>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>

</html>
