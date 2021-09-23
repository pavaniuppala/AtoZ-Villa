<?php 
   session_start();
   $con =mysqli_connect('localhost','pavani','pavani'); #connects to DB
   mysqli_select_db($con,'connect');
   $name=$_POST['user']; #selects value with name"user"
   $pass=$_POST['password'];
   $s="select * from users where name ='$name' && password='$pass'";
   $result=mysqli_query($con,$s); 
   $num= mysqli_num_rows($result);
   if($num==1)
   {
      $_SESSION['username']=$name;
      header('location:home.html');
   }
   else{
      header('location:login.php');
   }
   ?>