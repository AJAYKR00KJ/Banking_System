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

    <style type="text/css">

    
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }



      /* popup */
       
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 26%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}



/* PROFILE CARD */
  
 
.card{
  width: 300px;
  max-width: 100%;
  text-align: center;
  border-radius: 12px;  
  background: white;
  border: 1px solid #d4d4d4;
}
.card header {
  background-image: url('https://images.unsplash.com/photo-1616268177838-f524156bb98d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYxNjYyMTQ1NQ&ixlib=rb-1.2.1&q=80&w=400');
  height: 120px;
  border-radius: 12px 12px 0 0;
  margin-bottom: 140px;
}
.card header img {
  margin: 70px 40px 10px 40px;
  border-radius: 50%;
  height: 100px;
  width: 100px;
  border: 6px solid white;
}
.card header p {
  color: #444;
  font-size: 14px;
  font-weight: bold;
}
.card_body{
  margin-top: 10px;
}
.card_body ul.social{
  display: flex;
  list-style: none;  
  margin-bottom: 40px;
  justify-content: space-around;
}
.card_body ul.social li{
  cursor: pointer;
}
.card_body li h3 {
  color: #666;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 5px 10px;
  margin-bottom: 5px;
}
.card_body li p{
  font-weight: 200;
  text-transform: uppercase;
  font-size: 0.8rem;
}

 
    </style>

  </head>

   
  <body>

  <?php
    include 'config/dbconfig.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
  ?>

  <?php
  session_start();
  include 'header.php';
  ?>


<div id="popup1" class="overlay" style="z-index:100;">
	<div class="popup">
		<h4>My Profile</h4>
		<a class="close" href="users.php">x</a>
		<div class="content">
			 
      <div class="card">
      <header>    
        <img src='assets/img/energy.jpg' alt=''> 
        <p>Name: <?php echo $_SESSION["name"] ?> </p></b>
        <p>Email: <?php echo $_SESSION["email"] ?> </p>
        <p>Amount: <?php echo $_SESSION["amount"] ?> </p>
        
      </header>

      <div class="card_body">
      <a href="transact.php?id= <?php echo $_SESSION["id"] ?>">  <button style="width:175px;height:25px;border-radius: 4px;" class="btn-hover color-3">Transfer Money</button></a> 
      </div>   
      </div> 
		</div>
	</div>
</div>

  
<!-- 
POPUP END -->

      <div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <form method="post">
                        <td class="py-2"><b><?php echo $rows['id'] ?></b></td> 
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><b><?php echo $rows['balance']?></b></td>
                        <input type="hidden" value="<?php echo $rows['name'] ;?>" name="name"/>
                        <input type="hidden" value="<?php echo $rows['email'] ;?>" name="email"/>
                        <input type="hidden" value="<?php echo $rows['balance'] ;?>" name="amount"/>
                        <input type="hidden" value="<?php echo $rows['id'] ;?>" name="id"/> 
                        <a href="#popup1"><td><button  type="submit"  name="button1" style="width:76px;height:25px;border-radius: 4px;" class="btn-hover color-3">Transact</button></td></a>
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