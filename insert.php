<?php
   include_once("DbConfig.php");
   
	   $first_name 	=	$_POST['first_name'];
	   $last_name 		=	$_POST['last_name'];
	   $email 			=	$_POST['email'];
	   $password 		=	$_POST['password'];
	   $phone 			=	$_POST['phone'];
   
   if(isset($_POST['submit']))
{      
      if ($first_name == '' || $email == '' || $phone == '' || $password == ''  ) {
      header('location: addNewCustomer.php');
   }
      else {
         $duplicate = $conn->query("select * from customers where email='$email'");
   	   if (mysqli_num_rows($duplicate) > 0 || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
   		header("Location: addNewCustomer.php?message='Email id already exists. OR Email format is not correct that you enter'");
   	  }
      else{
   		$sql = "INSERT INTO customers (first_name, password, last_name, phone, email ) values ('$first_name','$password','$last_name','$phone','$email')";
   		if ($conn->query($sql)){
   		header('location:Users.php?message="Record added, successfully!"');
   		}
      }
   }
}
   else{
   	header("Location: addNewCustomer.php");
   }
   
   $conn->close();
   ?>

  