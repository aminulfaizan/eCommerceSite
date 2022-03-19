<?php session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<html>
    <head>
        <title>Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <link rel="stylesheet" href="header.css" type="text/css"/>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="img/logo-1.png">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-3 mb-lg-2">
                        <li class="nav-item">
                            <a class="nav-link active"href="index.html">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"href="index.php" >Shop</a>
                        </li>
                    </ul>
                    <div>
                        <?php
                        $count = 0;
                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                        }
                        ?>
                        <a href="cart.php" class="btn btn-outline-success">My Cart(<?php echo $count; ?>)</a>
                    </div>
                </div>
            </div>
        </nav>
    </body>
</html>