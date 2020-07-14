<?php

    $success = "false";
    $showError = "false";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        include '_dbconnect.php';

        $username = $_POST['username'];
        $password = $_POST['loginpass'];

        //$sql = "SELECT * FROM `users` WHERE `username`= '$username' AND `password`= '$password' ";
        $sql = "SELECT * FROM `users` WHERE `username`= '$username'";
        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);
        if($num == 1)
        {
            $row = mysqli_fetch_assoc($result);
        
            if(password_verify($password, $row['user_pass']))
            {
                $success = "true";

                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['userid'] = $row['user_id'];

                
                header("location: /forum/index.php?loginsuccess=$success");
            }

            else
            {
                $showError = "Invalid Credentials";
            } 
            
        }

        else
        {
            $showError = "Account does not exist for this username. Please Signup first then login";
        }
     
        header("location: /forum/index.php?loginsuccess=$success&error=$showError");
    }

?>