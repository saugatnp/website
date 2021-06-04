<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">IT Biz Solutions</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <?php 
        // include database connection file
        require_once "php/functions.php";
        // Object creation
        $DB=new DB_con();
        $token = $_COOKIE['token'];
        //get userdata through token

        $sql = $DB->checktoken($token);
        ?>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="wired.php">Wired</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="wireless.php">Wireless</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="accessories.php">Accessories</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="login.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Log In
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">User</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="admin.php">Admin</a>
        </div>

      </li>
      <?php
      if(mysqli_num_rows($sql)>0){
      ?>
  <a class="nav-link" href="sign_out.php">Sign out</a>
  
<?php 
      }
    else {
      ?>
          <a class="nav-link" href="sign_up.php">Sign In</a>
          <?php
}
          ?>
      </li>
    </ul>
  </div>
</nav>
