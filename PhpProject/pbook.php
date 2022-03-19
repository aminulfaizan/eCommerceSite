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
                  <img src="shop/pb.jpg" class="card-img-top" alt="">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.900</h5>
                    <p class="card-text">Book Name: A History of Modern Philosophy</p>
                   <button type="submit"  name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="A History of Modern Philosophy">
                   <input type ="hidden" name="item_price" value="900">
                </div>
                </div>  
                    </form>
                </div>
                 
        </div>
          </div>
    </body>
</html>

