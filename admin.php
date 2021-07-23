<?php 
include_once "navbar.php";
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link href="./style.css" rel="stylesheet"/>
<body class="admin">
    <div class="container" my-4>
        
        <form action="" method="get" style=" display: flex;
    flex-direction: column;
    align-items: center;" ><h2 style="margin-top:20px;">Admin Login</h2>
            Name :<input type="text" name="name" required/>
            <br>
            Password :<br> <input type="password" name="password" required/>
            <br>
            <button class="btn btn-success btn-xs" type="submit">Log In</button>
        </form>
    </div>
    <?php 
        $name = (isset($_GET["name"]) ? $_GET["name"]:null);
        $password = (isset($_GET["password"]) ? $_GET["password"] : null);
        $isLogged=0;
        $error="";
        if($name=="admin"&&$password=="admin")//sql injection "||1==1)//
            $isLogged=1;
        elseif($password!=null)
            $error="Username or Password is not matched";
        if($isLogged){
            header("Location: php/index.php");       
        }
        elseif($error!=""){
            echo $error;
        }
        include "footer.html";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</body>
