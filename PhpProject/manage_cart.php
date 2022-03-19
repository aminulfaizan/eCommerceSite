<?php
 session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add-to-cart']))
    {
        if(isset($_SESSION['cart']))
        {
           $count=count($_SESSION['cart']);
           $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['item_name'],'Price'=>$_POST['item_price'],'Quantity'=>1);
           echo"<script>
               alert('Item Added');
               window.location.href='index.php';
               </script>";
        }
        
 else {
        $_SESSION['cart'][0]=array('Item_Name'=>$_POST['item_name'],'Price'=>$_POST['item_price'],'Quantity'=>1);
         echo"<script>
               alert('Item Added');
               window.location.href='index.php';
               </script>";
    }
    }
    if(isset($_POST['Remove_Item']))
    {
         foreach($_SESSION['cart'] as $key => $value)   
      {
           if($value['Item_Name']==$_POST['Item_Name'])  
           {    
           unset($_SESSION['cart'][$key]);
           $_SESSION['cart']=array_values($_SESSION['cart']);
           echo"<script>
               alert('Item Removed');
               window.location.href='cart.php';
               </script>";
           }
           
      }
     }
     if(isset($_POST['Mod_Quantity']))
     {
          foreach($_SESSION['cart'] as $key => $value)   
      {
           if($value['Item_Name']==$_POST['Item_Name'])  
           {   
            $_SESSION['cart'][$key]['Quantity']=$_POST['Mod_Quantity'];   
           echo"<script>
               window.location.href='cart.php';
               </script>";
           }
           
      }
     }
     
    }
?>