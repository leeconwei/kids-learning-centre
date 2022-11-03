<?php
    include_once 'dbh.php';

    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    $checkexist = mysqli_query($conn,"SELECT * FROM users WHERE username='$username';");

    if(mysqli_num_rows($checkexist)>0){
      echo "This user already exists";
      header("Location: ../index.php");

    } 
    else {
      $sql = "INSERT INTO users(username,pwd,fullname,email) VALUES('$username','$pwd','$fullname','$email');";
      
      mysqli_query($conn,$sql);
      header("Location: ../index.php?signup=success");
    }    
?>