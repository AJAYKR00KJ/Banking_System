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
 
    <link rel="stylesheet" type="text/css" href="assets/css/createuser.css">

    <title>Basic Banking System</title>
  </head>

  <body>


  <?php
    include 'config/dbconfig.php'; 

    if(isset($_POST['submit'])){
       
      

    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transaction.php';
                     </script>";
                    
    }
  }
?>

  <?php
  include 'header.php';
  ?>
 

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="assets/img/user.png" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post"> 
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Enter NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Enter EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Type BALANCE" type="number" name="balance" required>
            </div>  
            <div style="text-align:center;">  

            <input type="submit" name="submit" value="CREATE" style="height:35px;border-radius: 4px;" class="btn-hover color-2"></input>
              <input type="reset" name="reset" valur="RESET" style="height:35px;border-radius: 4px;" class="btn-hover color-7"></input> 
          
            </div> 
          </form>
        </div>
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