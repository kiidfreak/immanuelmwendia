<?php
$message =$_POST['message'];
$name =$_POST['name'];
$email =$_POST['email'];

if(
   $_POST["message"]
   $_POST["name"]
   $_POST["email"]
  ) 
{
mail("imaina671@gmail.com", "Email Notification",
$_POST["Thanks!"]. "From: jane@janedoe.com");
}

?>