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
                      <img src="shop/ac.jpg" class="card-img-top" alt="">
                  <div class="card-body text-center">
                   <h5 class="card-title">Price: Tk.290</h5>
                    <p class="card-text">Pencil Box</p>
                   <button type="submit"  name="Add-to-cart" class="btn btn-info">Add To Cart</button>
                   <input type ="hidden" name="item_name" value="Pencil Box">
                   <input type ="hidden" name="item_price" value="290">
                </div>
                </div>  
                    </form>
                </div>
                 
        </div>
          </div>
    </body>
</html>

