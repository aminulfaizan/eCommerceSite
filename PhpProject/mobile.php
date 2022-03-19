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
                      <img src="shop/m1.jpeg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.27,000</h5>
                   <p class="card-text">Mobile Name: Oppo</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Oppo">
                   <input type ="hidden" name="item_price" value="27000">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                  <img src="shop/m2.jpg" class="card-img-top" alt="">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.25,000</h5>
                   <p class="card-text">Mobile Name: Samsung</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Samsung">
                   <input type ="hidden" name="item_price" value="25000">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                      <img src="shop/m3.png" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.18,000</h5>
                   <p class="card-text">Mobile Name: mi</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="mi">
                   <input type ="hidden" name="item_price" value="18000">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                  <img src="shop/m4.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.95,000</h5>
                   <p class="card-text">Mobile Name: Iphone</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Iphone">
                   <input type ="hidden" name="item_price" value="95000">
                </div>
                </div>  
                    </form>
                </div>
        </div>
            
    </body>
</html>
