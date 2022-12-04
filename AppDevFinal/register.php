<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
  
  //Database
  $conn = new mysqli('localhost', 'root', '', 'accounts');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else {
      $stmt = $conn->prepare("insert into signup(name, email, password, confirmpassword)
      values(?,?,?,?)");
      $stmt->bind_param("ssss",$name, $email, $password, $confirmpassword);
      $stmt->execute();
      if($password == $confirmpassword) {
        header('location:home-page.html');
        echo
        "<script> alert('Registration Successful'); </script>";
      }
      else {
        header('location:startup-page.html'); 
        echo
        "<script> alert('Password Does Not Match'); </script>";
      }

    
      $stmt->close();
      $conn->close();
  }
?>