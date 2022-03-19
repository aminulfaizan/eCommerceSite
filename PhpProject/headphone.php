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
                      <img src="shop/h1.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.2000</h5>
                    <p class="card-text">Headphone</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Headphone">
                   <input type ="hidden" name="item_price" value="2000">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                  <img src="shop/h2.jpg" class="card-img-top" alt="">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.1200</h5>
                    <p class="card-text">Headphone</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Headphone">
                   <input type ="hidden" name="item_price" value="1200">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                      <img src="shop/h3.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.800</h5>
                    <p class="card-text">Headphone</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Headphone">
                   <input type ="hidden" name="item_price" value="800">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                  <img src="shop/h4.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.500</h5>
                   <p class="card-text">Headphone</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Headphone">
                   <input type ="hidden" name="item_price" value="500">
                </div>
                </div>  
                    </form>
                </div>
        </div>
        </div>
    </body>
</html>
