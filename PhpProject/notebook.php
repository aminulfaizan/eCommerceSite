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
                      <img src="shop/n1.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.200</h5>
                   <p class="card-text">Note Book</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Note Book">
                   <input type ="hidden" name="item_price" value="200">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                  <img src="shop/n2.jpg" class="card-img-top" alt="">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.120</h5>
                    <p class="card-text">Note Book</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Note Book">
                   <input type ="hidden" name="item_price" value="120">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                      <img src="shop/n3.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.80</h5>
                    <p class="card-text">Note Book</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Note Book">
                   <input type ="hidden" name="item_price" value="80">
                </div>
                </div>  
                    </form>
                </div>
                 <div class="col-lg-3">
                     <form action="manage_cart.php" method="POST">
                  <div class="card">
                  <img src="shop/n4.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.50</h5>
                   <p class="card-text">Note Book</p>
                   <button type="submit" name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Note Book">
                   <input type ="hidden" name="item_price" value="50">
                </div>
                </div>  
                    </form>
                </div>
        </div>
            
        </div>
    </body>
</html>
