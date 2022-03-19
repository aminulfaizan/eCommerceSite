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
                      <img src="shop/c1.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.370</h5>
                   <p class="card-text">Basic Colours</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Basic Colours">
                   <input type ="hidden" name="item_price" value="370">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                  <img src="shop/c2.jpg" class="card-img-top" alt="">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.520</h5>
                    <p class="card-text">Water Colour</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Water Colour">
                   <input type ="hidden" name="item_price" value="520">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                      <img src="shop/c3.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.680</h5>
                    <p class="card-text">40 Colours</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="40 Colours">
                   <input type ="hidden" name="item_price" value="680">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                  <img src="shop/c4.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.1550</h5>
                   <p class="card-text">Colour Combo</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Colour Combo">
                   <input type ="hidden" name="item_price" value="1550">
                </div>
                </div>  
                    </form>
                </div>
        </div>
        </div>
    </body>
</html>
