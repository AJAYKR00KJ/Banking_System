<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <title>Basic Banking System</title>
  </head>

  <body>

  <?php
  include 'header.php';
  ?>

  <div class="container">
    <div class="row">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <br/> 
                    <h2>Welcome to</h2>
                    <h1>SPARKS BANK</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            <img src="assets/img/bank.png" class="img-fluid pt-2">
            </div>
    </div> 
    
    <div class="row">

        <div data-aos="zoom-in-up" class="col-sm-12 col-md-12 col-lg-4">
            <div class="heading text-center my-5">
                <img style="width:200px;height:130px;" src="assets/img/user.png" class="img-fluid">   
                <a href="createuser.php"><button style="width:200px;height:55px;border-radius: 4px;" class="btn-hover color-1">Create-User</button>  </a>
            </div>
        </div>
        <div data-aos="zoom-in-down" class="col-sm-12 col-md-12 col-lg-4">
            <div class="heading text-center my-5">
                <img style="width:200px;height:130px;" src="assets/img/transaction.png" class="img-fluid">  
                <a href="users.php"><button style="width:200px;height:55px;border-radius: 4px;" class="btn-hover color-2">View All Customers</button>  </a>
            </div>
        </div>
        <div data-aos="zoom-in" class="col-sm-12 col-md-12 col-lg-4">
            <div class="heading text-center my-5"> 
                <img style="width:200px;height:130px;" src="assets/img/history.png" class="img-fluid"> 
                <a href="history.php"><button style="width:200px;height:55px;border-radius: 4px;" class="btn-hover color-3">Transaction History</button>  </a>
            </div>
        </div>
  </div>

  </div>
  
  <?php
  include 'footer.php';
  ?>
      
      <script>
  AOS.init();
</script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
  </body>
</html>