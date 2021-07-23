<!DOCTYPE html>
<html>
  <head>
    <title>
      RaizStore
    </title>
    <?php 
      
      include_once "navbar.php";
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body >

  <form style=" display: flex;
    flex-direction: column;
    align-items: center;" method="post" action="php/insertuser.php">
  <div class="form-row">
    <div class="form-group ">
      <label for="inputEmail4" style="margin-top:20px;">First Name</label>
      <input type="text" class="form-control"  placeholder="First Name" name="firstName" required>
    </div>
</div>
<div class="form-group ">
      <label for="inputEmail4">Last Name</label>
      <input type="text" class="form-control"  placeholder="Last Name" name="lastName" required>
    </div>
    <div class="form-group ">
      <label for="inputEmail4">Email Id</label>
      <input type="email" class="form-control"  placeholder="Email" name="email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" placeholder="Address" name="address" required>
  </div>

  <div class="form-row">
    <div class="form-group ">
      <label for="inputCity">Contact No</label>
      <input type="number" class="form-control" placeholder="Phone Number" name="phoneNo" required>
    </div>
  </div>
  <div class="form-group">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control"  placeholder="Password" name="password" required>
    </div>
  </div>
  <button type="submit" name="insertbutton" class="btn btn-primary">Sign in</button>
</form>

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <?php
    include "footer.html";
    ?>
  </body>
</html>