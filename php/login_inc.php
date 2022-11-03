<?php
    session_start();

    include_once 'dbh.php';

    if (isset($_POST["login"])){
        $username = $_POST["username"];
        $pwd = ($_POST["pwd"]);
        $sql = "SELECT * FROM users WHERE username='$username' and pwd='$pwd'";

        $result = mysqli_query($conn,$sql);

        if($row=mysqli_fetch_assoc($result)){
            $_SESSION['username'] = $row['username'];
            $_SESSION['pwd'] = $row['pwd'];
	    $_SESSION['id']=$row['id'];

            header("Location: ../profile.php");
        } else{ 
            header("Location: ../index.php?loginerror");
        }
    }
?>