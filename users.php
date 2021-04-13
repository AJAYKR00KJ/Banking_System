<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/table.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <title>Basic Banking System</title>

    <style type="text/css">

    
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }

    </style>

  </head>

   
  <body>

  <?php
    session_start();
    include 'config/dbconfig.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
  ?>

 


<!-- POPUP -->
<?php

if(array_key_exists('button1', $_POST)) {
 
  $_SESSION["name"] = $_POST['name'];
  $_SESSION["email"] = $_POST['email'];
  $_SESSION["id"] = $_POST['id'];
  $_SESSION["amount"] = $_POST['amount'];

  header('Location: profile.php#popup1');
    
}
 
?>

<?php
  include 'header.php';
?>

 

      <div class="container">
        <h2 class="text-center pt-4">All Customers</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <!-- <th scope="col" class="text-center py-2">E-Mail</th> -->
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    $sno =0;
                    while($rows=mysqli_fetch_assoc($result)){
                      $sno++;
                ?>
                    <tr>
                        <form method="post">
                        <td class="py-2"><b><?php echo $sno ?></b></td> 
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <!-- <td class="py-2"><?php echo $rows['email']?></td> -->
                        <td class="py-2"><b><?php echo $rows['balance']?></b></td>
                        <input type="hidden" value="<?php echo $rows['name'] ;?>" name="name"/>
                        <input type="hidden" value="<?php echo $rows['email'] ;?>" name="email"/>
                        <input type="hidden" value="<?php echo $rows['balance'] ;?>" name="amount"/>
                        <input type="hidden" value="<?php echo $rows['id'] ;?>" name="id"/> 
                        <a href="#popup1"><td><button  type="submit"  name="button1" style="width:146px;height:25px;border-radius: 4px;" class="btn-hover color-3">View Profile</button></td></a>
                        </form> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
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