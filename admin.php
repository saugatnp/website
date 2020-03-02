<?php 
include_once "navbar.php";
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link href="./style.css" rel="stylesheet"/>
<body class="admin">
    <div class="container">
        <form action="" method="get">
            Name :<br> <input type="text" name="name" />
            <br>
            Password :<br> <input type="text" name="password" />
            <br>
            <button type="submit">submit</button>
        </form>
    </div>
    <?php 
        $name = (isset($_GET["name"]) ? $_GET["name"]:null);
        $password = (isset($_GET["password"]) ? $_GET["password"] : null);
        $isLogged=0;
        $error="";
        if($name=="admin"&&$password=="admin")
            $isLogged=1;
        elseif($password!=null)
            $error="username or password not matched";
        if($isLogged){
            header("Location: php/index.php");       
        }
        elseif($error!=""){
            echo $error;
        }
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <?php
    include "footer.html";
    ?>
</body>