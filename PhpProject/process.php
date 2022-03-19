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
  if(isset($_POST['btn-send']))
  {
      $query="INSERT INTO `user_feedback`(`Name`, `Email`, `Subject`, `Massage`) VALUES ('$_POST[UName]','$_POST[Email]','$_POST[Subject]','$_POST[msg]')";
      if (mysqli_query($con,$query))
    {
      echo"<script>
               alert('Massage Sent Successfully');
               window.location.href='contact.php';
               </script>";
  }
   else
    {
        echo"<script>
               alert('SQL Error');
               window.location.href='contact.php';
               </script>";
    }
  }
}
?>