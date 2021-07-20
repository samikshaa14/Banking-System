<!doctype html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" >
      <!-- Introduction  -->
            <div class="row intro py-1" style="background-color : #000000;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1 style="color:#66FCF1">Welcome to SPARK BANK </h1>
                  <h3 style="color:#FFFFFF">Simple way to transfer Money!</h3>
              
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank1.png" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity -->
            <div class="row activity text-center" style="background-color:#C5C6C7" >
              
                  <div class="col-md act"  >
                    <img src="img/userr1.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #45A29E;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/moneyy.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #45A29E;">Transfer Money</button></a>
                  </div>
                  <div class="col-md act" >
                    <img src="img/transact1.png" class="img-fluid" >
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #45A29E;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-7 py-2" style="background-color:#1F2833">
        <p style="color:#FFFFFF">&copy<b>Samiksha Chaudhari</b> <br>An Open Source Project to The Sparks Foundation </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>