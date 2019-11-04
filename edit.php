<?php
   include_once 'DbConfig.php';
   
   $first_name 		=	$_POST['first_name'];
   $last_name 		=	$_POST['last_name'];
   $password 		=	$_POST['password'];
   $phone 			=	$_POST['phone'];
   $id 				= 	$_POST['id'];
   
   if(isset($_POST['submit']))
   {
   	$sql = "UPDATE customers SET first_name = '$first_name', password = '$password' , last_name = '$last_name', phone = '$phone' where id='$id'";
   		if ($conn->query($sql)){
   			header('location: Users.php?message="Record added, successfully!"');
   	}
   }
   else{
   	header("Location: addNewCustomer.php");
   }
   
   $conn->close();
   ?>