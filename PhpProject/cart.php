<?php include ("header.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cart</title>
        <link rel="stylesheet" href="shop.css" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center border rounded bg-light my-5">
                    <h1>My Cart</h1>
                </div> 
                <div class="col-lg-9">
                    <table class="table">
            <thead class="text-center">
            <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Item_Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
     </tr>
  </thead>
  <tbody class="text-center">
      <?php
      if(isset($_SESSION['cart']))
      {    
      foreach($_SESSION['cart'] as $key => $value)
      {
          $s=$key+1;
          echo"
             <tr>
             <td>$s</td>
             <td>$value[Item_Name]</td>
             <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
             <form action='manage_cart.php' method='POST'>    
             <td><input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit()' type='number' value='$value[Quantity]' min='1' max='10'></td>
              <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
             </form>
             <td class='itotal'></td>
             <form action='manage_cart.php' method='POST'>
             <td><button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button></td>
             <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
             </form>
             </tr>
              ";
          
      }
      }
      ?>
  </tbody>
</table>
                </div>
                
                        <?php if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0)
                        {
                        ?>
                         <div class="col-lg-3">
                    <div class="border bg-light rounded p-4">
                        <h6>Total Item Price</h6>    
                        <h6 id='gtotal'></h6>
                        <h6>Delivery Charge: 100</h6>
                        <h6>Total</h6> 
                        <h6 id='atotal'></h6>
                        <br>
                        <form action="purchase.php" method="POST">
                            <div class="form-group">
                            <label>Full Name</label>
                            <input type="Text" name="fullname" class="form-control" required>
                            </div>
                             <div class="form-group">
                            <label>Address</label>
                            <input type="Text" name="address"  class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="phone_no"  class="form-control" required>
                            </div>
                            <div class="form-check">
                             <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                             Cash On Delivery
                            </label>
                            </div><br>
                        <button class="btn btn-green btn-block" name="purchase" >Purchase</button>
                    </form>
                        <?php
                        }
                        ?>
                   </div> 
                </div>
            </div>
         </div>
        <script>
            var gt=0;
            var iprice=document.getElementsByClassName('iprice');
            var iquantity=document.getElementsByClassName('iquantity');
            var itotal=document.getElementsByClassName('itotal');
            var gtotal=document.getElementById('gtotal');
            
            function subTotal()
            {
                gt=0;
                for(i=0;i < iprice.length;i++)
                {
                 itotal[i].innerText=(iprice[i].value)*(iquantity[i].value); 
                 gt=gt+(iprice[i].value)*(iquantity[i].value); 
                }
                gtotal.innerText=gt;
                atotal.innerText=gt+100;
            }
          
            subTotal();
            </script>
         
      
         </body>
</html> 

