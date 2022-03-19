<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include ("header.php");?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shop</title>
        <link rel="stylesheet" href="shop.css" type="text/css"/>
    </head>
    <body>
        <div class = "container" >
             
            <div class = "row" >
               
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                  <img src="shop/eb1.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.670</h5>
                   <p class="card-text">Book Name: Pride and Prejudice</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Pride and Prejudice">
                   <input type ="hidden" name="item_price" value="670">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                  <div class="card">
                  <img src="shop/eb2.jpg" class="card-img-top" alt="">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.500</h5>
                   <p class="card-text">Book Name: Heart of Darkness</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Heart of Darkness">
                   <input type ="hidden" name="item_price" value="500">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                    <form action="manage_cart.php" method="POST">
                  <div class="card">
                  <img src="shop/eb3.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.800</h5>
                   <p class="card-text">Book Name: The Golden Bowl</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="The Golden Bowl">
                   <input type ="hidden" name="item_price" value="800">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                  <img src="shop/eb4.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.580</h5>
                   <p class="card-text">Book Name: Breathing Lessons</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Breathing Lessons">
                   <input type ="hidden" name="item_price" value="580">
                </div>
                </div>  
                    </form>
                </div>
        </div>
        </div>
    </body>
</html>