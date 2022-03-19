<?php
 session_start();
 $con=mysqli_connect("localhost","root","","e-commerce");
 if(mysqli_connect_errno())
 {
     echo"<script>
               alert('Cannot Connect to Database');
               window.location.href='cart.php';
               </script>";
     exit();
 }
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['purchase']))
  {
     $query1="INSERT INTO `user_data`(`Full_Name`, `Address`, `Phone_No`) VALUES ('$_POST[fullname]','$_POST[address]','$_POST[phone_no]')";
    if (mysqli_query($con,$query1))
    {
        $Order_id= mysqli_insert_id($con);
        $query2= "INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
        $stmt=mysqli_prepare($con, $query2);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Item_Name,$Price,$Quantity);
            foreach ($_SESSION['cart'] as $key => $values)
            {
                $Item_Name=$values['Item_Name'];
                $Price=$values['Price'];
                $Quantity=$values['Quantity'];
                mysqli_stmt_execute($stmt);
            }
            unset($_SESSION['cart']);
            echo"<script>
               alert('Order Placed');
               window.location.href='index.php';
               </script>";
        }
 else {
     echo"<script>
               alert('SQL Query Prepare Error');
               window.location.href='cart.php';
               </script>";
 }
        
    }
    else
    {
        echo"<script>
               alert('SQL Error');
               window.location.href='cart.php';
               </script>";
    }
     
  }
  
}
?>

